<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function display($id){

//    $users = User::all();

        $all = \DB::table('users')
            ->where('users.id','=',$id)
            ->join('subject_user','users.id','=','subject_user.user_id')
            ->join('subjects','subjects.id','=','subject_user.subject_id')
            ->get();
//
//        foreach ($all as $subject){
//            echo $subject->name . "<br>" . "Subject type: " . $subject->type . "<br>" . "Subject term: " . $subject->term . "<br>" ;
//        }
//
//        $subjects = Subject::all()->where('term',1);
//
//        foreach ($subjects as $subject){
//            echo "Name: " . $subject->name . "<br>" . "Term:" . $subject->term . "<br>";
//        }
//        $data['users'] = $all;
//        return $all;
        return view('home',compact('all'));


    }
}
