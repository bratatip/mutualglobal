<?php

namespace App\Http\Requests\Client;

use App\Rules\EmailFull;
use App\Rules\ReCaptcha;
use App\Rules\ValidNameRule;
use App\Rules\ValidPhoneRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ClientRegistrationRequest extends FormRequest
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
            'name' => ['required', 'max:50', new ValidNameRule],
            'email' => [
                'required',
                'email',
                new EmailFull,
                Rule::unique('client_registrations', 'email'),
                Rule::unique('users', 'email'),
            ],
            'phone' => [
                'required',
                new ValidPhoneRule,
                Rule::unique('client_registrations', 'phone'),
                Rule::unique('users', 'phone'),
            ],
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ];
    }
}
