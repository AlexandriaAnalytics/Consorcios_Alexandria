<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProyectRequest;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['Admin','Administrator','OA']); // habilitado para todos los usuarios
        $buildings = Building::all();

        return view('buildings.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyectRequest $request)
    {
        if ($request->hasfile('avatar')) {
           $file = $request->file('avatar');
           $namefile = time().$file->getClientOriginalName();
           $file->move(public_path().'/images/', $namefile);
        }
       $building = new Building();
        $building->name = $request->input('name');
        //$project->slug = $request->input('slug');;
        $building->slug = ($request->input('name')). time(); //($request->input('input-lastname')) .
        $building->avatar = $namefile;
        $building->save();
        
        return redirect()->route('buildings.index')->with('status','Creación Correcta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
        return view('buildings.show', compact('building'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        return view('buildings.edit', compact('building'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
        $building->fill($request->except('avatar'));

        if ($request->hasfile('avatar')) {
           $file = $request->file('avatar');
           $namefile = time().$file->getClientOriginalName();
           $building->avatar = $namefile;
           $file->move(public_path().'/images/', $namefile);
        }
        $building->save();

        return redirect()->route('buildings.show', [$building])->with('status','Actualización Correcta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        $file_path = public_path().'/images/'.$building->avatar;
        \File::delete($file_path);
        
        $building->delete();
        return redirect()->route('buildings.index')->with('status','Eliminación Correcta.');
    }
}
