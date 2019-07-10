<?php

namespace App\Http\Controllers;

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
        return view('front-end.studentRegistration');
    }
    public function studentInfo(){
        return view('front-end.studentInfo');
    }
    public function generateRoutine(){
        return view('front-end.generateRoutine');
    }
    public function adminGenerateRoutine(){
        return view('front-end.adminGenerateRoutine');
    }
    public function routine(){
        return view('front-end.routine');
    }
}
