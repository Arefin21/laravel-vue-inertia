<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
       // return "Index";
       return inertia('Index/Index');
    }

    public function show(){
        // "Show";
        return inertia('Index/Show');

    }

    public function test(){
        return inertia('Index/Test');
    }
}
