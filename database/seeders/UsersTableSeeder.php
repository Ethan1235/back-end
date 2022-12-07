<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(200)->create();

        $user = User::find(1);
        $user->name = 'Ethan';
        $user->email = '7578@qq.com';
        $user->is_admin = true;
        $user->save();
    }
}