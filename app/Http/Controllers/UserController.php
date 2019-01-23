<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Validators\UserValidator;
use App\Repositories\UserRepository;

class UserController extends Controller
{

    protected $validator;
    protected $userRepository;

    public function __construct(UserValidator $validator, UserRepository $userRepository)
    {
        $this->validator      = $validator;
        $this->userRepository = $userRepository;
    }

    /**
     * Save user
     *
     * @param Request $request
     *
     * @return null
     *
     * @throws ValidationException
     */
    public function save(Request $request)
    {
        try {
            $this->validator->validateUser($request);
        } catch (ValidationException $exception) {
            $errors = '';

            foreach ($exception->errors() as $error) {
                $errors .= implode(' ', $error) . ' ';
            }

            return response()->json([
                'errors' => $errors
            ], 422);
        }

        $this->userRepository->save([
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
            'balance'  => $request->get('balance'),
        ]);

        return response()->json('success', 201);
    }
}