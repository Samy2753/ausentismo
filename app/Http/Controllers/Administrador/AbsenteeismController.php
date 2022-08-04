<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;
use App\Http\Requests\AbsenteeismStoreRequest;
use App\Models\employee;
use App\Models\absenteeism;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Exception;


class AbsenteeismController extends Controller
{

    public function index()
    {

        return view('administrador.absenteeism.index');
    }


    public function create()
    {
        return view('administrador.absenteeism.create');
    }


    public function store(AbsenteeismStoreRequest $request)
    {
        Try{
            $result = Employee::find($request->employee);
            absenteeism::create([
                'name' => $result->Name.' '.$result->LastName,
                'incapacity_type'=>$request->incapacity_type,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'incapacity_type_id'=>$request->absenteeism,
                'employee_id'=>$request->employee
            ]);
            Alert::toast('usuario guardado exitosamente', 'success');
            return redirect()->route('administrador.users.index');
        }
        catch(Exception $e)
        {
            return "ha ocurrido un error". $e;
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
