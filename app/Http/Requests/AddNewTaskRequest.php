<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewTaskRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:250'],
            'deadline' => ['required', 'string', 'date'],
            'todo_status_id' => ['required'],
            'task_remind_interval_id' => ['required'],
            'details' => ['nullable','max:500'],
        ];
    }

    public function withValidator($validator)
    {
        $messages = $validator->messages();

        foreach ($messages->all() as $message)
        {
            toastr()->error($message, 'Error');
        }

        return $validator->errors()->all();

    }

    public function messages()
   {
       return
       [
           'name.required' => 'Task name is required!',
           'deadline.required'  => 'Task deadline is required!',
           'todo_status_id.required' => 'Status is required!',
           'details'=>'Task details can have max 250 characters ',
       ];
   }
}
