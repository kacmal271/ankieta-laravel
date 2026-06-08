<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * this file is: wip
 */

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartureSeeder extends Seeder
{
  /**
  * Run the database seeds.
  */
  public function run(): void
  {
    ///////////////////////////////////////////////////////////////////////////////
    // 2 x Dębiec PKM -> Aleje Marcinkowskiego x Work days

    ### 1

    DB::table('departures')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 2,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('04:50:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 3,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('04:51:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 3,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 4,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('04:53:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 4,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 4,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('04:57:00'),
      'isTakeOff' => false
    ]);

    ### 2

    DB::table('departures')->insert([
      'id' => 5,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 6,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:00:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 6,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 7,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:01:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 7,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 8,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:03:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 8,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 8,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:10:00'),
      'isTakeOff' => false
    ]);

    ### 3

    DB::table('departures')->insert([
      'id' => 9,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 10,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:10:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 10,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 11,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:11:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 11,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 12,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:13:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 12,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 12,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('08:20:00'),
      'isTakeOff' => false
    ]);

    ### 4

    DB::table('departures')->insert([
      'id' => 13,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 14,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:04:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 14,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 15,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:05:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 15,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 16,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:07:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 16,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 16,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:24:00'),
      'isTakeOff' => false
    ]);

    ### 5

    DB::table('departures')->insert([
      'id' => 17,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 18,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:19:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 18,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 19,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:20:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 19,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 20,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:22:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 20,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 20,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:39:00'),
      'isTakeOff' => false
    ]);

    ### 6

    DB::table('departures')->insert([
      'id' => 21,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 22,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:34:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 22,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 23,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:35:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 23,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 24,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:37:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 24,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 24,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('12:54:00'),
      'isTakeOff' => false
    ]);

    ### 7

    DB::table('departures')->insert([
      'id' => 25,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 26,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:00:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 26,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 27,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:01:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 27,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 28,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:03:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 28,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 28,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:10:00'),
      'isTakeOff' => false
    ]);

    ### 8

    DB::table('departures')->insert([
      'id' => 29,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 30,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:10:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 30,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 31,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:11:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 31,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 32,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:13:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 32,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 32,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('16:20:00'),
      'isTakeOff' => false
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 2 x Dębiec PKM -> Aleje Marcinkowskiego x Saturdays

    ### 1

    DB::table('departures')->insert([
      'id' => 33,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 34,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('05:05:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 34,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 35,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('05:06:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 35,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 36,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('05:08:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 36,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 36,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('05:24:00'),
      'isTakeOff' => false
    ]);

    ### 2

    DB::table('departures')->insert([
      'id' => 37,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 38,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:04:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 38,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 39,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:05:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 39,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 40,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:07:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 40,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 40,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:24:00'),
      'isTakeOff' => false
    ]);

    ### 3

    DB::table('departures')->insert([
      'id' => 42,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 43,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:20:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 43,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 44,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:21:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 44,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 45,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:23:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 45,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 45,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('13:40:00'),
      'isTakeOff' => false
    ]);

    ### 4

    DB::table('departures')->insert([
      'id' => 46,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 47,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('17:00:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 47,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 48,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('17:01:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 48,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 49,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('17:03:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 49,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 49,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('17:10:00'),
      'isTakeOff' => false
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 2 x Aleje Marcinkowskiego -> Dębiec PKM x Work days

    ### 1 transit

    DB::table('departures')->insert([
      'id' => 50,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 51,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('05:00:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 51,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 52,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('05:10:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 52,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 53,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('05:12:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 53,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 53,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('05:14:00'),
      'isTakeOff' => false
    ]);

    ### 2 transit

    DB::table('departures')->insert([
      'id' => 54,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 55,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:01:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 55,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 56,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:07:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 56,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 57,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:09:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 57,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 57,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:11:00'),
      'isTakeOff' => false
    ]);

    ### 3 transit

    DB::table('departures')->insert([
      'id' => 58,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 59,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:11:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 59,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 60,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:17:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 60,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 61,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:19:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 61,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 61,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('09:21:00'),
      'isTakeOff' => false
    ]);

    ### 4 transit

    DB::table('departures')->insert([
      'id' => 62,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 63,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:00:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 63,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 64,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:01:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 64,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 65,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:03:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 65,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 65,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:20:00'),
      'isTakeOff' => false
    ]);

    ### 5 transit

    DB::table('departures')->insert([
      'id' => 66,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 67,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:15:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 67,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 68,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:16:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 68,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 69,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:18:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 69,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 69,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:28:00'),
      'isTakeOff' => false
    ]);

    ### 6 transit

    DB::table('departures')->insert([
      'id' => 70,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 71,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:30:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 71,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 72,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:31:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 72,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 73,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:33:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 73,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 73,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('13:45:00'),
      'isTakeOff' => false
    ]);

    ### 7 transit

    DB::table('departures')->insert([
      'id' => 74,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 75,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:01:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 75,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 76,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:07:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 76,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 77,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:09:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 77,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 77,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:11:00'),
      'isTakeOff' => false
    ]);

    ### 8 transit

    DB::table('departures')->insert([
      'id' => 78,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 79,
      'stops_lines_id' => 40,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:11:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 79,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 80,
      'stops_lines_id' => 39,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:17:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 80,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 81,
      'stops_lines_id' => 38,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:19:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 81,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 81,
      'stops_lines_id' => 37,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('17:21:00'),
      'isTakeOff' => false
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 2 x Aleje Marcinkowskiego -> Dębiec PKM x Saturdays

    ### 1 transit

    DB::table('departures')->insert([
      'id' => 82,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 83,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('06:00:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 83,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 84,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('06:01:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 84,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 85,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('06:03:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 85,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 85,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('06:05:00'),
      'isTakeOff' => false
    ]);

    ### 2 transit

    DB::table('departures')->insert([
      'id' => 86,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 87,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:01:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 87,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 88,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:07:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 88,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 89,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:09:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 89,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 89,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:11:00'),
      'isTakeOff' => false
    ]);

    ### 3 transit

    DB::table('departures')->insert([
      'id' => 90,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 91,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:11:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 91,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 92,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:17:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 92,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 93,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:19:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 93,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 93,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('14:21:00'),
      'isTakeOff' => false
    ]);

    ### 4 transit

    DB::table('departures')->insert([
      'id' => 95,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 96,
      'stops_lines_id' => 40,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('18:01:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 96,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 97,
      'stops_lines_id' => 39,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('18:07:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 97,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 98,
      'stops_lines_id' => 38,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('18:09:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 98,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 98,
      'stops_lines_id' => 37,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('18:11:00'),
      'isTakeOff' => false
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 211 x Starołęka PKM -> Garbary PKM x Work Days

    ### 1. transit

    DB::table('departures')->insert([
      'id' => 99,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 100,
      'stops_lines_id' => 57,
      'time_period_id' => 1, // work days

      // [A]
      // notice (!) day BEFORE
      'departure' => new \DateTimeImmutable('2025-01-01 23:22:00'),

      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 100,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 101,
      'stops_lines_id' => 58,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-01 23:22:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 101,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 102,
      'stops_lines_id' => 59,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-01 23:23:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 102,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 102,
      'stops_lines_id' => 60,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-01 23:44:00'),
      'isTakeOff' => false
    ]);

    ### 2. transit

    DB::table('departures')->insert([
      'id' => 103,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 104,
      'stops_lines_id' => 57,
      'time_period_id' => 1, // work days

      // [A]
      // notice (!) day AFTER
      'departure' => new \DateTimeImmutable('2025-01-02 01:22:00'),

      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 104,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 105,
      'stops_lines_id' => 58,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 01:22:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 105,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 106,
      'stops_lines_id' => 59,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 01:23:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 106,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 106,
      'stops_lines_id' => 60,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 01:44:00'),
      'isTakeOff' => false
    ]);

    ### 3. transit

    DB::table('departures')->insert([
      'id' => 107,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 108,
      'stops_lines_id' => 57,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 03:22:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 108,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 109,
      'stops_lines_id' => 58,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 03:22:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 109,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 110,
      'stops_lines_id' => 59,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 03:23:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 110,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 110,
      'stops_lines_id' => 60,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 03:44:00'),
      'isTakeOff' => false
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 211 x Starołęka PKM -> Garbary PKM x Saturdays

    ### 1. transit

    DB::table('departures')->insert([
      'id' => 111,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 112,
      'stops_lines_id' => 57,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 00:22:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 112,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 113,
      'stops_lines_id' => 58,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 00:22:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 113,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 114,
      'stops_lines_id' => 59,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 00:23:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 114,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 114,
      'stops_lines_id' => 60,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 00:44:00'),
      'isTakeOff' => false
    ]);

    ### 2. transit

    DB::table('departures')->insert([
      'id' => 115,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 116,
      'stops_lines_id' => 57,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 02:22:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 116,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 117,
      'stops_lines_id' => 58,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 02:22:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 117,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 118,
      'stops_lines_id' => 59,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 02:23:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 118,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 118,
      'stops_lines_id' => 60,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 02:44:00'),
      'isTakeOff' => false
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 211 x Garbary PKM -> Starołęka PKM x Work days

    ### 1. transit

    DB::table('departures')->insert([
      'id' => 119,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 120,
      'stops_lines_id' => 60,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 00:09:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 120,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 121,
      'stops_lines_id' => 59,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 00:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 121,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 122,
      'stops_lines_id' => 58,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 00:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 122,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 122,
      'stops_lines_id' => 57,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 00:42:00'),
      'isTakeOff' => false
    ]);

    ### 2. transit

    DB::table('departures')->insert([
      'id' => 123,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 124,
      'stops_lines_id' => 60,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 02:09:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 124,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 125,
      'stops_lines_id' => 59,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 02:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 125,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 126,
      'stops_lines_id' => 58,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 02:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 126,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 126,
      'stops_lines_id' => 57,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 02:33:00'),
      'isTakeOff' => false
    ]);

    ### 3. transit

    DB::table('departures')->insert([
      'id' => 127,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 128,
      'stops_lines_id' => 60,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 04:09:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 128,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 129,
      'stops_lines_id' => 59,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 04:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 129,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 130,
      'stops_lines_id' => 58,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 04:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 130,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 130,
      'stops_lines_id' => 57,
      'time_period_id' => 1, // work days
      'departure' => new \DateTimeImmutable('2025-01-02 04:33:00'),
      'isTakeOff' => false
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 211 x Garbary PKM -> Starołęka PKM x Saturdays

    ### 1. transit

    DB::table('departures')->insert([
      'id' => 131,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 132,
      'stops_lines_id' => 60,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 01:09:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 132,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 133,
      'stops_lines_id' => 59,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 01:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 133,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 134,
      'stops_lines_id' => 58,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 01:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 134,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 134,
      'stops_lines_id' => 57,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 01:42:00'),
      'isTakeOff' => false
    ]);

    ### 2. transit

    DB::table('departures')->insert([
      'id' => 135,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 136,
      'stops_lines_id' => 60,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 03:09:00'),
      'isTakeOff' => true
    ]);

    DB::table('departures')->insert([
      'id' => 136,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 137,
      'stops_lines_id' => 59,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 03:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 137,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 138,
      'stops_lines_id' => 58,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 03:32:00'),
      'isTakeOff' => false
    ]);

    DB::table('departures')->insert([
      'id' => 138,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'next_id' => 138,
      'stops_lines_id' => 57,
      'time_period_id' => 2, // saturdays
      'departure' => new \DateTimeImmutable('2025-01-02 03:33:00'),
      'isTakeOff' => false
    ]);
  }
}
