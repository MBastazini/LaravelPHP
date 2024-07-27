<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dados= [
            'name' => 'Admin',
            'email' => 'admin2@mail.com',
            'password' => '123456',
        ];
        User::Create($dados);
    }
}
