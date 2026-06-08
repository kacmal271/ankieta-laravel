<?php

namespace Database\Seeders\Survey;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('categories')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 1,
      'category' => 'First, I would like You to share some demographic and health-related information.',
    ]);

    DB::table('categories')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 2,
      'category' => 'Now, please complete the following challenges.',
    ]);

    DB::table('categories')->insert([
      'id' => 3,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 3,
      'category' => 'Finally, a few preferential questions.',
    ]);
  }
}
