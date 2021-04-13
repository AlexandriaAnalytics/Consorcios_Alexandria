<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles('Admin'); // habilitado para todos los usuarios
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //busco los roles
        $roles = Role::get();
        //devuelvo la vista de creacion junto con la variable roles
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request) //(StoreUserRequest contiene las validaciones antes de almacenar 
    {
        $data = $request->validated();
        if ($request->hasfile('avatar')) {
           $file = $request->file('avatar');
           $namefile = time().$file->getClientOriginalName();
           $file->move(public_path().'/images/', $namefile);
        }

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->slug = $data['name']. time();
        $user->avatar = $namefile;
        $user->role_id = $data['role_id'];
        $user->save();

        return redirect()->route('users.index')->with('status','Creación Correcta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::get();
        return view('users.show', compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //busco los roles
        $roles = Role::get();
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->fill($request->except('avatar', 'password'));

        if ($request->hasfile('avatar')) {
           $file = $request->file('avatar');
           $namefile = time().$file->getClientOriginalName();
           $user->avatar = $namefile;
           $file->move(public_path().'/images/', $namefile);
        }
        // dd($user);
        $user->save();

        return redirect()->route('users.index', [$user])->with('status','Actualización Correcta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $file_path = public_path().'/images/'.$user->avatar;
        \File::delete($file_path);
        
        $user->delete();
        return redirect()->route('users.index')->with('status','Eliminación Correcta.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        return view('users.details', compact('user'));
    }
}
