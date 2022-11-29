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
            'speciality' => 'min:2',
            'magic' => 'min:1',
            'strength' => 'min:1',
            'agility' => 'min:1',
            'intelligence' => 'min:1',
            'lifepoint' => 'min:1',
        ];
    }
}
