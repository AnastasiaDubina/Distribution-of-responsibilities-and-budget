<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'project_name'=>'required|min:1',
			'project_description'=>'required|min:1',
			'department_name'=>'required|min:1',
			'work'=>'required|min:1',
			'budget'=>'required|min:1',
			'data'=>'required|min:1',
			'e-mail'=>'required|min:1'
        ];
    }
}
