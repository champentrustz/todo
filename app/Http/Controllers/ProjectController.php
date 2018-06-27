<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Content;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function createproject(Request $request){
      $this->validate($request, [
          'addproject' => 'required'
      ]);

      $project = new Project;
      $project->user()->associate(Auth::user());
      $project->title = $request->input('addproject');
      $project->save();
      return back()->withErrors([
          'success' => ['Success']
      ]);
    }
    public function deleteproject($project_id) {
      $project = Project::find($project_id);
      $contents = Content::all();
      $contents = $project->contents->sortBy('project_id');
      if ($project->user_id == Auth::id()) {
            if($contents == '[]'){
              $project->delete();
              return redirect('/home')->withErrors([
                  'success' => ['Success']
              ]);
          }
          else{
            return back()->withErrors([
                'notsuccessclear' => ['Not success : please clear content in this list']
            ]);
          }
        }
        else{

        }


  }

    public function createcontent(Request $request){

      $this->validate($request, [
          'add' => 'required',
          'date' => 'required',
          'time' => 'required',
          'list' => 'required'
      ]);
      $content = new Content;
      $content->user()->associate(Auth::user());
      $content->body = $request->input('add');
      $content->date = $request->input('date');
      $content->time = $request->input('time');
      $content->project_id = $request->input('list');
      $content->save();
      return back()->withErrors([
          'success' => ['Success']
      ]);
    }

    public function deletecontent($content_id) {

        $content = Content::find($content_id);
        if ($content->user_id == Auth::id()) {

          $content->delete();
          return back()->withErrors([
              'success' => ['Success']
          ]);

        } else {
          return back()->withErrors([
              'notsuccess' => ['not Success']
          ]);
        }

    }

    public function sortproject($project_id) {

        $project = Project::find($project_id);
        $content = new Content;
        $content->project()->associate($project);
        $content->user()->associate(Auth::user());
        $projects = Project::all();
        $contents = $project->contents->sortBy('date');
          return view('show', compact('projects', 'contents'));

    }

    public function today() {
      $projects = Project::all();
      $contents = Content::all();
      $contents = Content::orderBy('date','asc')->get();
      return view('today', compact('projects', 'contents'));


  }



}
