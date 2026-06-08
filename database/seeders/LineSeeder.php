<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * this file is: finished
 */

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
{
  /**
  * Run the database seeds.
  */
  public function run(): void
  {
    ///////////////////////////////////////////////////////////////////////////////
    // bus id=1

    DB::table('lines')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 121,
      'service_type_id' => 1 // bus
    ]);

    DB::table('lines')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 145,
      'service_type_id' => 1 // bus
    ]);

    DB::table('lines')->insert([
      'id' => 3,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 146,
      'service_type_id' => 1 // bus
    ]);

    DB::table('lines')->insert([
      'id' => 4,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 148,
      'service_type_id' => 1 // bus
    ]);

    DB::table('lines')->insert([
      'id' => 5,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 149,
      'service_type_id' => 1 // bus
    ]);

    DB::table('lines')->insert([
      'id' => 6,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 152,
      'service_type_id' => 1 // bus
    ]);

    DB::table('lines')->insert([
      'id' => 7,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 153,
      'service_type_id' => 1 // bus
    ]);

    DB::table('lines')->insert([
      'id' => 8,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 154,
      'service_type_id' => 1 // bus
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // night id=2

    DB::table('lines')->insert([
      'id' => 9,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 212,
      'service_type_id' => 2 // night
    ]);

    DB::table('lines')->insert([
      'id' => 10,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 211,
      'service_type_id' => 2 // night
    ]);

    DB::table('lines')->insert([
      'id' => 11,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 202,
      'service_type_id' => 2 // night
    ]);

    DB::table('lines')->insert([
      'id' => 12,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 201,
      'service_type_id' => 2 // night
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // Tourist id=3

    DB::table('lines')->insert([
      'id' => 13,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 20,
      'service_type_id' => 3 // tourist
    ]);

    DB::table('lines')->insert([
      'id' => 14,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 100,
      'service_type_id' => 3 // tourist
    ]);

    DB::table('lines')->insert([
      'id' => 15,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 102,
      'service_type_id' => 3 // tourist
    ]);

    DB::table('lines')->insert([
      'id' => 16,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 104,
      'service_type_id' => 3 // tourist
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // Trams id=4

    DB::table('lines')->insert([
      'id' => 17,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 1,
      'service_type_id' => 4 // tram
    ]);

    DB::table('lines')->insert([
      'id' => 18,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 2,
      'service_type_id' => 4 // tram
    ]);

    DB::table('lines')->insert([
      'id' => 19,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 3,
      'service_type_id' => 4 // tram
    ]);

    DB::table('lines')->insert([
      'id' => 20,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'no' => 5,
      'service_type_id' => 4 // tram
    ]);
  }
}
