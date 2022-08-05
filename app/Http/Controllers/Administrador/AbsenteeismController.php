<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbsenteeismStoreRequest;
use App\Models\Employee;
use App\Models\incapacity_type;
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
        $absenteeisms = absenteeism::all();
        $listaIncapacidades = incapacity_type::pluck('incapacity_type','id');
        return view('administrador.absenteeism.index',compact('absenteeisms','listaIncapacidades'));
    }


    public function create()
    {
        $employees = Employee::all();
        $listaIncapacidades = incapacity_type::pluck('incapacity_type','id');
        return view('administrador.absenteeism.create',compact('listaIncapacidades','employees'));
    }


    public function store(AbsenteeismStoreRequest $request)
    {
        Try{

            $result = Employee::find($request->NameEmployeer);
            absenteeism::create([
                'NameEmployeer' => $result->Name.' '.$result->LastName,
                'DocumentType'=>$result->DocumentType,
                'DocumentNumber'=>$result->DocumentNumber,
                'Start_date'=>$request->Start_date,
                'End_date'=>$request->End_date,
                'Incapacity_type_id'=>$request->Incapacity_type_id,
                'Clasification'=>$request->Clasification,

            ]);
            Alert::toast('usuario guardado exitosamente', 'success');
            return redirect()->route('administrador.absenteeism.index');
        }
        catch(Exception $e)
        {
            return "ha ocurrido un error". $e;
        }
    }


    public function show($id)
    {
        $result = incapacity_type::find(2);
        print_r($result);
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
