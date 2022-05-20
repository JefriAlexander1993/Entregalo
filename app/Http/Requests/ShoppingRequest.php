<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShoppingRequest extends FormRequest
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
            'weight' => [
                'required',
            ],
            'declared_value' => [
                'required',
            ],
            'origin' => [
                'required',
                'max:255'
            ],
            'destination' => [
                'required',
                'max:255'
            ],
            'senders_name' => [
                'required',
                'max:255'
            ],
            'sender_phone_number' => [
                'required',
                'max:255'
            ],
            'recipient_name' => [
                'required',
                'max:255'
            ],
            'recipient_phone_number' => [
                'required',
                'max:255'
            ],
            'description' => [
                'max:255'
            ]
        ];
    }
}
