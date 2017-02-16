<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditRequest;
use Illuminate\Support\Facades\DB;


class UsuarioController extends Controller
{
    public function index(Request $request)
	{
                  
               $query=trim($request->get('searchText'));
        
		$users= User::name($request->get('name'))->orderBy('id','DESC')->paginate(3);
                return view('admin.usuarios.index')->with('users',$users);
                
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
           
		return view('admin.usuarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
           
           $user = new User($request->all());
           
           $user->save();
           flash::success("insertado correctamente");
          
           return redirect()->route('admin.usuarios.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            
            $users = User::find($id);
      
            return view('admin.usuarios.edit')->with('users',$users);
            
           
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
            dd('hola');
            $user = User::find($id);
                $user->fill($request->all());
                $user->save();
                flash::success("Usuario editado correctamente");
                return redirect()->route('admin.usuarios.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
                $persona=User::findOrFail($id);
                $persona->delete();
                
         
           flash::error('El usuario ha sido borrado correctamente');
           return redirect()->route('admin.usuarios.index');
	}
}
