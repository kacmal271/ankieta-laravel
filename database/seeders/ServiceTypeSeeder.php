<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * this file is: finished
 */

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
  /**
  * Run the database seeds.
  */
  public function run(): void
  {
    DB::table('service_types')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'type' => 'bus'
    ]);

    DB::table('service_types')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'type' => 'night.service'
    ]);

    DB::table('service_types')->insert([
      'id' => 3,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'type' => 'tourist.line'
    ]);

    DB::table('service_types')->insert([
      'id' => 4,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'type' => 'tram'
    ]);
  }
}
