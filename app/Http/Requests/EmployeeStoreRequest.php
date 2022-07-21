<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'FirstName'=> 'required',
            'LastName'=> 'required',
            'DocumentType'=> 'required',
            'DocumentNumber'=> 'required',
            'BaseSalary'=> 'required',
            'Position'=> 'required',
            'Department'=> 'required',
            'EPS'=> 'required',
            'AFD'=> 'required',
            'ARL'=> 'required',

        ];

    }

    public function messages(){
        return [


            'FirstName.required'=> 'Debe ingresar Nombres',
            'LastName.required'=> 'Debe ingresar Apellidos',
            'DocumentType.required'=> 'Debe seleccionar un tipo de documento',
            'DocumentNumber.required'=> 'Numero de documento es obligatorio',
            'BaseSalary.required'=> 'Debe ingresar salario base',
            'Position.required'=> 'Debe ingresar cargo',
            'Department.required'=> 'Debe ingresar Area',
            'EPS.required'=> 'Debe ingresar EPS',
            'AFD.required'=> 'Debe ingresar AFD',
            'ARL.required'=> 'Debe ingresar ARL',
        ];
    }
}
