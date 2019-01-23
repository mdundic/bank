<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Save user
     *
     * @param array $data
     *
     * @return null
     */
    public function save(array $data)
    {
        $this->user->name     = $data['name'];
        $this->user->email    = $data['email'];
        $this->user->password = password_hash($data['password'], PASSWORD_BCRYPT);
        $this->user->balance  = $data['balance'];

        $this->user->save();
    }
}