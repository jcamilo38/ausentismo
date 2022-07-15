<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Models\employee;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
class EmployeeController extends Controller
{

    public function index()
    {
       $employees= Employee::where('status','1')->get();
       return view('empleado.employees.index',compact('employees'));
    }


    public function create()
    {
        return view('empleado.employees.create');
    }


    public function store(Request $request)
    {

        try {
            Employee::create([

                'Firstname'=> $request->FirstName,
                'LastName'=> $request->LastName,
                'DocumentType'=> $request->DocumentType,
                'BaseSalary'=> $request->BaseSalary,
                'SalaryDay'=> $request->SalaryDay,
                'Position'=> $request->Position,
                'Department'=> $request->Department,
                'EPS'=> $request->EPS,
                'AFD'=> $request->AFD,
                'ARL,'=> $request->ARL,
                'status' => '1',

            ]);
            Alert::toast('Registro guardado con exito!','success');
            return redirect()->route('empleado.employees.index');
        }

           catch (Exception $e)
            {
                return  "Ha ocurrido un error";
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
