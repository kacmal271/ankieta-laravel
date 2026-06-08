<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
  * Run the database seeds.
  */
  public function run(): void
  {
    DB::table('users')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'admin',
      'email' => null,
      'password' => Hash::make('phplaravel')

    ]);
  }
}
