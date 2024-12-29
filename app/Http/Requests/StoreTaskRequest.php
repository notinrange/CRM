<?php

namespace App\Http\Requests;
use App\Constants\TaskStatus;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            //
            'title' => ['required'],
            'description' => ['required'],
            'user_id' => ['required',Rule::exists('users','id')],
            'client_id' => ['required',Rule::exists('clients','id')],
            'project_id' => ['required',Rule::exists('projects','id')],
            'deadline_at' => ['required','date','after:yesterday'],
            'status' => ['required',Rule::in(TaskStatus::all())],
        ];
    }
}
