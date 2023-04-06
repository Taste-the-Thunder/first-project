<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about($name1)
    {
        $name = "<h1>Dhruvin</h1>";
        $surname = "Prajapati";
        $users = ['chhagan', 'gagan', 'magan'];
        return view('about', compact('name','surname','users', 'name1'));
    }
    public function userInfo()
    {
        return view('userinfo');
    }
    public function student()
    {
        $studentData = Student::all();
        return view('student', compact('studentData'));
    }
    public function studentStore(Request $request)
    {
        Student::create([
            'roll_no' => $request['roll_no'],
            'name' => $request['name']
        ]);

        return redirect('student');
        // return $this->student();
        // $studentData = Student::all();
        // return view('student', compact('studentData'));
    }

}
