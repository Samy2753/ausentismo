<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\returnSelf;

class userController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('administrador.users.index',compact(['users']));
    }


    public function create()
    {
        return view('administrador.users.create');
    }


    public function store(Request $request)
    {

        try
        {
            User::create($request->all());
            //Alert::success('Exitoso', 'usuario guardado correctamente');
            Alert::toast('usuario guardado exitosamente', 'success');
            return redirect()->route('administrador.users.index');
        }
        catch(Exception $e)
        {
            return "ha ocurrido un error";
        }

    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        return view('administrador.users.edit',compact('user'));
    }


    public function update(Request $request, User $user)
    {
        try
        {

            $user->update($request->all());
            Alert::toast('usuario editado exitosamente', 'success');
            return redirect()->route('administrador.users.index');

        }catch(Exception $e)
        {

        }
    }

    public function destroy(User $user)
    {

    }
}
