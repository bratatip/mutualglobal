<?php

namespace App\Http\Requests\Admin\Client;

use Illuminate\Foundation\Http\FormRequest;

class PolicyStoreRequest extends FormRequest
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
            'client' => 'required',
            'insurer' => 'required',
            'policy_number' => 'required',
            'policy_start_date' => 'required|date',
            'policy_end_date' => 'required|date|after_or_equal:policy_start_date',
            'premium_inc_gst' => 'required|numeric',
            'occupancy' => 'required|string',
            'property_address' => 'required|string',
            'policy_copy' => 'required|file|mimes:pdf',
        ];
    }
}
