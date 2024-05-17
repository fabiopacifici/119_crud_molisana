<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePastaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        //dd($this->pasta);

        return [
            //'title' => ['required', 'min:3', 'max:200', Rule::unique('pastas')->ignore($this->pasta->id)],
            'title' => "required|unique:pastas,title," . $this->pasta->id,
            'src' => 'required|max:255',
            'weight' => 'nullable|max:10',
            'type' => 'nullable|max:15',
            'cooking_time' => 'nullable|max:15',
            'description' => 'nullable|max:500'
        ];
    }
}
