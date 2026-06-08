<?php

namespace Database\Seeders\Survey;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // metro

    DB::table('pictures')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'path_relative_url' => env('path.url.storage.graphics') . "/metro.png",
    ]);

    // fluent

    DB::table('pictures')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'path_relative_url' => env('path.url.storage.graphics') . "/fluent.png",
    ]);
  }
}
