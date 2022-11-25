<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
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
            'name' => 'required|min:4',
            'description' => 'min:4',
            'speciality' => 'required',
            'magic' => 'required',
            'strength' => 'required',
            'agility' => 'required',
            'intelligence' => 'required',
            'lifepoint' => 'required',
        ];
    }
}
