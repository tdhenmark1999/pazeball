<?php

namespace App\Laravel\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class RequestManager extends FormRequest
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
     * Override Illuminate\Foundation\Http\FormRequest@response method
     *
     * @return Illuminate\Routing\Redirector
     */

    protected function failedValidation(Validator $validator)
    {
        session()->flash('notification-status','error');
        session()->flash('notification-msg','Some fields are missing or not accepted.');
        throw (new ValidationException($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo($this->getRedirectUrl());
    }

    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return response()->json($errors, 422);
        }

        session()->flash('notification-status','error');
        session()->flash('notification-msg','Some fields are missing or not accepted.');


        return $this->redirector->to($this->getRedirectUrl())
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }
}
