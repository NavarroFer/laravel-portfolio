<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show','index');        
    }

    /**
     * Display a listing of the proyects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate();

        return view('projects.index',compact('projects'));
    }

    public function show(Project $project)
    {           
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        // $fields = request()->validate([
        //     'title'=>'required',
        //     'url'=>'required',
        //     'description'=>'required'
        // ]);

        // Project::create([
        //     'title' => request('title'),
        //     'url' =>  request('url'),
        //     'description' => request('description'),

        // ]);

        //lo mismo que lo de arriba

        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);                
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con exito.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito.');
    }
}
