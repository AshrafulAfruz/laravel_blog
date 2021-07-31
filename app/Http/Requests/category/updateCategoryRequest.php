<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class updateCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories,name,'.$this->category->id.'|max:255',
            'slug'=>'required|unique:categories,slug,'.$this->category->id,
            'description'=>'nullable',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' =>Str::slug($this->name),
        ]);
    }
}
