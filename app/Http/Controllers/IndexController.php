<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
       // return "Index";
       return inertia('Index/Index',
    [
        'message'=>'Hello From Laravel',
        'test'=>'test message'
            ]
        );
    }

    public function show(){
        // "Show";
        return inertia('Index/Show');

    }

    public function test(){
        return inertia('Index/Test');
    }
}
