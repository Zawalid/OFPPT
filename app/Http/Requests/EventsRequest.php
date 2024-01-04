<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventsRequest extends FormRequest
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
        return [
            "titre"=> "required",
            "description" => "required",
            "image"=> "required",
            "etat" => "required",
            "lieu"=> "required",
            "duree" => "required",
            "date_evenement" => "required",
            "annee_formation" => "required",
            "image" => "required"
        ];
    }
}
