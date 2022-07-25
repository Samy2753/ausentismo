<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeStoreRequest;
use Illuminate\Http\Request;
use App\Models\employee;
use Exception;
use Laravel\Sanctum\Sanctum;
use Monolog\Handler\SamplingHandler;
use ParagonIE\ConstantTime\Base64DotSlash;
use phpDocumentor\Reflection\Types\This;
use PhpParser\Node\Expr\Cast\Double;
use Prophecy\Doubler\Doubler;
use RealRashid\SweetAlert\Facades\Alert;



class EmployeeController extends Controller
{

    public function index()
    {
     $employees= Employee::where('Status','1')->get();

       return view('empleado.employees.index',compact('employees'));
    }


    public function create()
    {
        return view('empleado.employees.create');
    }




    public function store(EmployeeStoreRequest $request)
    {

        $SalaryDay = $this->calculosalario(intval($request->BaseSalary));

        try {



            Employee::create([

                'FirstName'=> $request->FirstName,
                'LastName'=> $request->LastName,
                'DocumentType'=> $request->DocumentType,
                'DocumentNumber'=> $request->DocumentNumber,
                'BaseSalary'=> $request->BaseSalary,
                'SalaryDay'=> $SalaryDay,
                'Position'=> $request->Position,
                'Department'=> $request->Department,
                'EPS'=> $request->EPS,
                'AFP'=> $request->AFP,
                'ARL'=> $request->ARL,
                'Status' => '1',

            ]);
            Alert::toast('Registro guardado con exito!','success');
            return redirect()->route('empleado.employees.index');
        }

           catch (Exception $e)
            {
                return  "Ha ocurrido un error".$e;
             }
    }

    public function calculosalario($BaseSalary)
    {
        $SalaryDay = ($BaseSalary/30);
    return $SalaryDay;    }

    public function show($id)
    {
        //
    }


    public function edit(Employee $employee)
    {
        return view('empleado.employees.edit',compact('employee'));
    }


    public function update(Request $request, Employee $employee)
    {
        $SalaryDay = $this->calculosalario(intval($request->BaseSalary));
        try
        {

            $employee->update([

                'FirstName'=> $request->FirstName,
                'LastName'=> $request->LastName,
                'DocumentType'=> $request->DocumentType,
                'DocumentNumber'=> $request->DocumentNumber,
                'BaseSalary'=> $request->BaseSalary,
                'SalaryDay'=> $SalaryDay,
                'Position'=> $request->Position,
                'Department'=> $request->Department,
                'EPS'=> $request->EPS,
                'AFP'=> $request->AFP,
                'ARL'=> $request->ARL,


            ]);
            Alert::toast('Empleado editado con exito','success');
            return redirect()->route('empleado.employees.index');
        }

        catch (\Exception $e)
        {

            Alert::toast('Ocurrio un error al actualizar','error');
            return redirect()->route('empleado.employees.index');
        }
    }


    public function destroy(Employee $employee)
    {
         try{
            $employee->update([

                'Status' => '0'

            ]);
            Alert::toast('Usuario eliminado correctamente','success');
            return redirect()->route('empleado.employees.index');

        }

        catch(Exception $e) {
            Alert::toast('Error al eliminar','success');
            return redirect()->route('empleado.employees.index');
              }
    }
}
