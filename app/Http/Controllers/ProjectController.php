<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['Admin','Administrator','OA','Provider']); // habilitado para todos los usuarios
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        if ($request->hasfile('avatar')) {
           $file = $request->file('avatar');
           $namefile = time().$file->getClientOriginalName();
           $file->move(public_path().'/images/', $namefile);
        }
       $project = new Project();
        $project->name = $request->input('name');
        $project->slug = ($request->input('name')). time();
        $project->avatar = $namefile;
        $project->save();
        
        return redirect()->route('projects.index')->with('status','Creación Correcta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     utilizando implicit bindings
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->fill($request->except('avatar'));

        if ($request->hasfile('avatar')) {
           $file = $request->file('avatar');
           $namefile = time().$file->getClientOriginalName();
           $project->avatar = $namefile;
           $file->move(public_path().'/images/', $namefile);
        }
        $project->save();

        return redirect()->route('projects.show', [$project])->with('status','Actualización Correcta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $file_path = public_path().'/images/'.$project->avatar;
        \File::delete($file_path);
        
        $project->delete();
        return redirect()->route('projects.index')->with('status','Eliminación Correcta.');
    }
}
