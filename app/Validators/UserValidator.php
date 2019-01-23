<?php

namespace App\Validators;

use Illuminate\Http\Request;

class UserValidator
{
    /**
     * Validate user
     *
     * @param Request $request
     *
     * @return null
     */
    public function validateUser(Request $request)
    {
        $request->validate([
            // allows only Alpha characters with spaces
            'name'     => 'required|regex:/^[a-z ]+$/i',
            'email'    => 'required|email|unique:users,email',
            // password must be at least 8 characters long and contains at least one letter, one number and one special character
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/i',
            // balance can be any positive or negative decimal number
            'balance'  => 'required|regex:/^[-+]?\d+(\.\d{1,})?$/i'
        ]);
    }
}