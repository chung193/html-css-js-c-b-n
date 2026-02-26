<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('members')->insert([
        'fullname' => 'Nguyễn Văn Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('123456'), 
        'gender' => 'nam',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
