<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbsenteeismStoreRequest;
use App\Models\Employee;
use App\Models\incapacity_type;
use App\Models\absenteeism;
use App\Models\cie_10;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Exception;
use PDF;


class AbsenteeismController extends Controller
{

    public function index()
    {
        $absenteeisms = absenteeism::all();
        $cie_10s = cie_10::pluck('Description','id');
        $cie_10s_idx = cie_10::pluck('Code','id');
        $listaIncapacidades = incapacity_type::pluck('incapacity_type','id');
        return view('administrador.absenteeism.index',compact('absenteeisms','listaIncapacidades','cie_10s','cie_10s_idx'));
    }

    public function pdf()
    {

        $absenteeisms = absenteeism::paginate();
        $cie_10s = cie_10::all();
        $employees = Employee::all();
        $cie_10s_idx = cie_10::pluck('Code','id');
        $listaIncapacidades = incapacity_type::pluck('incapacity_type','id');
        $pdf = PDF::loadView('administrador.absenteeism.pdf',['absenteeisms'=>$absenteeisms],compact('absenteeisms','listaIncapacidades','cie_10s','cie_10s_idx'));
        return $pdf->download('absenteeism.pdf');
        //return $pdf->stream();
        //return view('administrador.absenteeism.pdf',compact('absenteeisms','listaIncapacidades','cie_10s','cie_10s_idx'));




    }

    public function create()
    {
        $absenteeisms = absenteeism::all();
        $cie_10s = cie_10::all();
        $employees = Employee::all();
        $listaIncapacidades = incapacity_type::pluck('incapacity_type','id');
        return view('administrador.absenteeism.create',compact('listaIncapacidades','employees','cie_10s'));
    }


    public function store(AbsenteeismStoreRequest $request)
    {
        Try{

            $result = Employee::find($request->NameEmployee);
            absenteeism::create([
                'NameEmployee' => $result->Name.' '.$result->LastName,
                'DocumentType'=>$result->DocumentType,
                'DocumentNumber'=>$result->DocumentNumber,
                'Start_date'=>$request->Start_date,
                'End_date'=>$request->End_date,
                'Incapacity_type_id'=>$request->Incapacity_type_id,
                'Illness'=>$request->Illness,

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

    public function edit(Absenteeism $absenteeism)
    {
        $cie_10s =cie_10::all();
        $employees = Employee::find($absenteeism->employee_id);

        $listaIncapacidades = incapacity_type::pluck('incapacity_type','id');
        return view('administrador.absenteeism.edit',compact('listaIncapacidades','employees','cie_10s','absenteeism'));
    }

    public function update(Request $request, Absenteeism $absenteeism)
    {
        try
        {
            print_r($absenteeism);
            $absenteeism->update([


                'Start_date'=> $request->Start_date,
                'End_date'=> $request->End_date,
                'Incapacity_type_id'=> $request->Incapacity_type_id,
                'Clasification'=> $request-> Clasification,


            ]);
            Alert::toast('Empleado editado con exito','success');
            return redirect()->route('administrador.absenteeism.index');
        }

        catch (\Exception $e)
        {
            print_r($e);
            Alert::toast('Ocurrio un error al actualizar','error');
            return redirect()->route('administrador.absenteeism.index');
        }
    }


    public function destroy(Absenteeism $absenteeism)
    {
        $absenteeism->delete();
        Alert::toast('absenteeism eliminado correctamente','success');
        return redirect()->route('administrador.absenteeism.index'); //
    }
}
