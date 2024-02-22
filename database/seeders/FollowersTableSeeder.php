<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users=User::all();
        $user=$users->first();
        $user_id=$user->id;

        //获取去掉ID为1的所有用户ID数组
        $followers=$users->slice(1);
        $follower_ids=$followers->pluck("id")->toArray();

        //关注除了1号用户以外的所有用户
        $user->follow($follower_ids);

        //除了1号用户以外的所有用户都来关注1号用户
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
