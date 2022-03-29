<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        User::factory()->create(
            [
                'name'     => 'Vero',
                'email'    => 'vero@email.com',
                'password' => Hash::make('my_super_password'),
            ]
        );
    }
}
