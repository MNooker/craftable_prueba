<?php

namespace App\Http\Requests\Admin\Empleado;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreEmpleado extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.empleado.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'Nombre' => ['required', 'string'],
            'ApellidoPaterno' => ['required', 'string'],
            'ApellidoMaterno' => ['required', 'string'],
            'Telefono' => ['required', 'string'],
            'Edad' => ['required', 'integer'],
            'FechaNacimiento' => ['required', 'date'],
            'LugarNacimiento' => ['required', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
