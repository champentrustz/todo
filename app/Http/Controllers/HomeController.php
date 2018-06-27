<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Content;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){

       $projects = Project::all();
       $contents = Content::all();
       $contents = Content::orderBy('date','asc')->get();
       return view('home', compact('projects', 'contents'));

    }

    public function first(){

      return view('welcome');

   }

}
