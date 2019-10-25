<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Project;

class SaveProjectRequest extends FormRequest
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
        $data = $this->validationData();
        $projectId = Project::where('slug', $data['slug'])
                            ->value('id');

        return [
            'title' => 'required',
            'description' => 'required',
            'slug' => [
                'required',
                Rule::unique('projects')->ignore($projectId)
            ]
        ];
    }

    public function messages() {
        return [
            'slug.required' => __('The URL field it is empty')
        ];
    }
}
