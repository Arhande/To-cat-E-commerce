<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "admin";
        $admin->role = "admin";
        $admin->email = "admin@admin.com";
        $admin->email_verified_at = Carbon::now();
        $admin->password = Hash::make('admin');
        $admin->save();

        $user = new User();
        $user->name = "user test";
        $user->role = "user";
        $user->email = "user@user.com";
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('user');
        $user->save();
    }
}
