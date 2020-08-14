<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;

class EventRegistrationValidator
{
    public function validateEmailAndEvent(Request $request)
    {
        $validatedArray = $request->validate([
            'email' => 'required|email',
            'companyEvent' => 'exists:company_events,id|required',
        ]);

        return $validatedArray;
    }
}