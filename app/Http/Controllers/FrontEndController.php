<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use App\Routine;
use App\TempDBRotine;
use App\RegisterCourse;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front-end.home');
    }

    public function adminLogin(){
        return view('front-end.login');
    }

    public function studentLogin(){
        return view('front-end.student-login');
    }


    public function teacherRegistration(){
        return view('front-end.teacher-registration');
    }






    public function contuctUs(){
        return view('front-end.contuctUs');
    }






    public function studentRegistration(){
        if(Auth::check()){
            if(Auth::user()->hasRole('Student')){
       return redirect()->route('register-course', ['id' => Auth()->user()->id]);
       }else{
           return view('front-end.studentRegistration');
       }
        }else {
            
             return view('front-end.studentRegistration');
        }
    }








    public function saveStudentInfo(Request $request){
        $this->validate($request, [
            'name' => 'required|max:30|min:2',
            'email' => 'email|unique:users,email|required',
            'v_id' => 'required',
            'dept' => 'required',
            'password' => ['required',
                'min:6',
                'confirmed'],
            'password_confirmation' => 'required_with:password|same:password',
        ]);
        // return $request;
        $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->v_id = $request->v_id;
            $user->dept = $request->dept;
            $user->password = Hash::make($request->password);

            $user->save();
            $user->attachRole(Role::where('name', 'Student')->first());
            if(Auth::check()){

            }else {
                Auth::login($user);
            }
            

        return redirect()->route('register-course', ['id' => $user->id]);
    }








    public function saveTeacherInfo(Request $request){
        $this->validate($request, [
            'name' => 'required|max:30|min:2',
            'email' => 'email|unique:users,email|required',
            'v_id' => 'required',
            'dept' => 'required',
            'password' => ['required',
                'min:6',
                'confirmed'],
            'password_confirmation' => 'required_with:password|same:password',
        ]);
        // return $request;
        $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->v_id = $request->v_id;
            $user->dept = $request->dept;
            $user->password = Hash::make($request->password);

            $user->save();
            $user->attachRole(Role::where('name', 'Teacher')->first());
            Auth::login($user);

        return redirect()->route('/');
    }





    public function regCourse($id){
          return view('front-end.register-course',[
            'student_id'=>$id
        ]);
    }






    public function studentInfo(){
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', '=', 'Student');
        })
        ->join('register_courses','register_courses.student_id','=','users.id')
        ->select('users.*','register_courses.image','register_courses.course_title')
        ->orderBy('users.created_at', 'desc')->get();

        return view('front-end.studentInfo',['users'=>$users]);
    }



    public function removeUser($id){
        $regCourseStudent=RegisterCourse::where('student_id',$id)->get();
        foreach ($regCourseStudent as $data) {
        $data->delete();
    }
     

        User::find($id)->delete();

        return redirect()->back()->with('message','Student Info Successfully Deleted');
    }





    public function generateRoutine(){

        return view('front-end.generateRoutine');
    }




    public function saveAdminGenerateRoutine( Request $request){
        $obj_regStudent=RegisterCourse::where('exam_type',$request->exam_type)
        ->where('semister',$request->semister)->groupBy('course_title','semister')
        ->select('course_title','semister',DB::raw('count(*) as total'))->get();
         $t= $obj_regStudent->count();
         // return $obj_regStudent[0];
         TempDBRotine::truncate();
         Routine::truncate();
    for($i=0;$i<$t;$i++){
            $obj_temp=new TempDBRotine();
            $obj_temp->course_title=$obj_regStudent[$i]->course_title;
            $obj_temp->semister=$obj_regStudent[$i]->semister;
            $obj_temp->total_reg=$obj_regStudent[$i]->total;
            $obj_temp->save();
    }
    $obj_data=TempDBRotine::all();
    return redirect('admin-generate-routine');
        // return view('front-end.adminGenerateRoutine',['obj_data'=>$obj_data]);
    }

public function saveRoutineData(Request $request){

    $this->validate($request, [
            'exam_date' => 'required',
            'exam_time' => 'required',
            'room_no' => 'required',
            
    ]);
    $obj_routine=Routine::all();

    $course_title= $request->course_title;


    $obj_temp=TempDBRotine::find($request->reg_id);
    // $stu=RegisterCourse::where('course_title',$obj_temp->course_title)->get();
// return $obj_routine;

foreach ($obj_routine as $value) {
$sub=$value->subject;

    $oobj=Db::table('register_courses as t1')
    ->join('register_courses as t2','t1.student_id','=','t2.student_id')
    ->where('t1.semister',$request->semister)
    ->where(function($query) use ($course_title,$sub){
        $query->where('t2.course_title', '=', $sub);
        $query->where('t1.course_title', '=', $course_title);
        
    })->select('t2.*')->get();

//     SELECT a.*,b.* FROM `register_courses` as a JOIN register_courses as b 
// WHERE a.student_id=b.student_id && a.course_title='OOP' && b.course_title='Math'



// return $oobj;

    foreach ($oobj as $st) {
        if($course_title !=$st->course_title && $value->exam_time==$request->exam_time && $value->exam_date==$request->exam_date ){
            return redirect()->back()->with('message','Some student have exam on this date on this time. Please change date or time');

        }elseif($course_title ==$st->course_title && $value->exam_time==$request->exam_time && $value->exam_date==$request->exam_date){
            $obj_routine=new Routine();
            $obj_routine->subject=$obj_temp->course_title;
            $obj_routine->exam_date=$request->exam_date;
            $obj_routine->exam_time=$request->exam_time;
            $obj_routine->room_no=$request->room_no;
            if($obj_temp->total_reg>51){
            $obj_routine->total=50;
            $obj_temp->total_reg=$obj_temp->total_reg-50;
            $obj_temp->save();
        }else{
            $obj_routine->total=$obj_temp->total_reg;
                $obj_temp->total_reg=0;
            $obj_temp->save();
        }
            $obj_routine->save();
        return redirect()->back()->with('message','Saved to routine');


        }

    }
}


  
    $obj_routine=new Routine();
    $obj_routine->subject=$obj_temp->course_title;
    $obj_routine->exam_date=$request->exam_date;
    $obj_routine->exam_time=$request->exam_time;
    $obj_routine->room_no=$request->room_no;
    if($obj_temp->total_reg>51){
    $obj_routine->total=50;
    $obj_temp->total_reg=$obj_temp->total_reg-50;
    $obj_temp->save();
}else{
    $obj_routine->total=$obj_temp->total_reg;
        $obj_temp->total_reg=0;
    $obj_temp->save();
}
    $obj_routine->save();
return redirect()->back()->with('message','Saved to routine');

}



    public function adminGenerateRoutine(){
        $obj_data=TempDBRotine::where('total_reg','>',0)->get();
        return view('front-end.adminGenerateRoutine',['obj_data'=>$obj_data]);
    }



    public function routine(){
        $obj_routine=Routine::all();
        return view('front-end.routine',['obj_routine'=>$obj_routine]);
    }





    public function saveRegCourseInfo(Request $request){
        $len=count($request->reg_type);

for($i=0;$i<$len;$i++){
    // dd($request->file('image'));
    $obj_RegisterCourse=new RegisterCourse();
    $obj_RegisterCourse->student_id=$request->student_id;
    $obj_RegisterCourse->reg_type=$request->reg_type[$i];
    $obj_RegisterCourse->teacher_init=$request->teacher_init[$i];
    $obj_RegisterCourse->course_code=$request->course_code[$i];
    $obj_RegisterCourse->course_title=$request->course_title[$i];
    $obj_RegisterCourse->exam_type=$request->exam_type[$i];
    $obj_RegisterCourse->semister=$request->semister[$i];
    if($request->reg_type[$i]=='Improvement'){
        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg|max:2048',
            ]);
        
            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "ab" . rand(5, 10) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $obj_RegisterCourse->image = $imageUrl;
        }
    }
    $obj_RegisterCourse->save();

}

        return redirect('/');
    }
}
