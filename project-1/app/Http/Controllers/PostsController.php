<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id)
    {
        $names =[
            "1" => "Arya",
            "2" => "Athul"
        ];
        if(!isset($names[$id])){
            abort(404);
        }
        $student =$names[$id];
        $data =["student_name"=> $student];
        echo $id;
        //echo "WELCOME From Posts Controllers";
        return view('posts.index',$data);
        
    }
}