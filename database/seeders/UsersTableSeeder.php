<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->count(50)->create();
    
        $user=User::find(1);
        $user->name='XB';
        $user->email='1542954996@qq.com';
        $user->password='123456';
        $user->is_admin=true;
        $user->save();
    }
}
