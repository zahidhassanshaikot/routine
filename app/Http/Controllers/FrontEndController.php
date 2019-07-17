<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
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
        })->orderBy('created_at', 'desc')->get();

        return view('front-end.studentInfo',['users'=>$users]);
    }
    public function removeUser($id){
        User::find($id)->delete();

        return redirect()->back();
    }

    public function generateRoutine(){

        return view('front-end.generateRoutine');
    }

    public function adminGenerateRoutine( Request $request){
        $obj_regStudent=RegisterCourse::where('exam_type',$request->exam_type)
        ->where('semister',$request->semister)->groupBy('course_title','semister')
        ->select('course_title','semister',DB::raw('count(*) as total'))->get();
        return $obj_regStudent;
        return view('front-end.adminGenerateRoutine');
    }

    public function routine(){
        return view('front-end.routine');
    }
    public function saveRegCourseInfo(Request $request){
        $len=count($request->reg_type);

for($i=0;$i<$len;$i++){
    $obj_RegisterCourse=new RegisterCourse();
    $obj_RegisterCourse->student_id=$request->student_id;
    $obj_RegisterCourse->reg_type=$request->reg_type[$i];
    $obj_RegisterCourse->teacher_init=$request->teacher_init[$i];
    $obj_RegisterCourse->course_code=$request->course_code[$i];
    $obj_RegisterCourse->course_title=$request->course_title[$i];
    $obj_RegisterCourse->exam_type=$request->exam_type[$i];
    $obj_RegisterCourse->semister=$request->semister[$i];
    $obj_RegisterCourse->save();

}

        return redirect('/');
    }
}
