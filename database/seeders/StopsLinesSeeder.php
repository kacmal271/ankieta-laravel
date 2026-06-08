<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * this file is: finished
 */

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StopsLinesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public static function run(): void
  {
    ///////////////////////////////////////////////////////////////////////////////
    // 121 x Ogrody is #01

    DB::table('stops_lines')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OGRO',
      'line_id' => 1
    ]);

    // 121 x Polska nż. is #02

    DB::table('stops_lines')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'POLSNZ',
      'line_id' => 1
    ]);

    // 121 x Os. Lotnictwa Polskiego is #03

    DB::table('stops_lines')->insert([
      'id' => 3,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OSLOTNPOLS',
      'line_id' => 1
    ]);

    // 121 x Ogrody is #04

    DB::table('stops_lines')->insert([
      'id' => 4,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OGRO2',
      'line_id' => 1
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 145

    DB::table('stops_lines')->insert([
      'id' => 5,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'DWORZZACH',
      'line_id' => 2
    ]);

    DB::table('stops_lines')->insert([
      'id' => 6,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'PARKWILS',
      'line_id' => 2
    ]);

    DB::table('stops_lines')->insert([
      'id' => 7,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'ULAN',
      'line_id' => 2
    ]);

    DB::table('stops_lines')->insert([
      'id' => 8,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'KACZ',
      'line_id' => 2
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 146

    DB::table('stops_lines')->insert([
      'id' => 9,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'STARSTRZ',
      'line_id' => 3
    ]);

    DB::table('stops_lines')->insert([
      'id' => 10,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'INSTTECHPRZYNZ',
      'line_id' => 3
    ]);

    DB::table('stops_lines')->insert([
      'id' => 11,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'STRZPKM',
      'line_id' => 3
    ]);

    DB::table('stops_lines')->insert([
      'id' => 12,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'BORA',
      'line_id' => 3
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 148

    DB::table('stops_lines')->insert([
      'id' => 13,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'LAWI',
      'line_id' => 4
    ]);

    DB::table('stops_lines')->insert([
      'id' => 14,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'MALENZ',
      'line_id' => 4
    ]);

    DB::table('stops_lines')->insert([
      'id' => 15,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OSBAJK',
      'line_id' => 4
    ]);

    DB::table('stops_lines')->insert([
      'id' => 16,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDKAPO',
      'line_id' => 4
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 149

    DB::table('stops_lines')->insert([
      'id' => 17,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'GORCPKM',
      'line_id' => 5
    ]);

    DB::table('stops_lines')->insert([
      'id' => 18,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'BOJA',
      'line_id' => 5
    ]);

    DB::table('stops_lines')->insert([
      'id' => 19,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OSTA',
      'line_id' => 5
    ]);

    DB::table('stops_lines')->insert([
      'id' => 20,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'DEBIPKM',
      'line_id' => 5
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 152

    DB::table('stops_lines')->insert([
      'id' => 21,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'DARZ',
      'line_id' => 6
    ]);

    DB::table('stops_lines')->insert([
      'id' => 22,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'SCHRDLAZWIENZ',
      'line_id' => 6
    ]);

    DB::table('stops_lines')->insert([
      'id' => 23,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'KOBYNZ',
      'line_id' => 6
    ]);

    DB::table('stops_lines')->insert([
      'id' => 24,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDRATA',
      'line_id' => 6
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 153

    DB::table('stops_lines')->insert([
      'id' => 25,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'SYPN',
      'line_id' => 7
    ]);

    DB::table('stops_lines')->insert([
      'id' => 26,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'PARKSYPNNZ',
      'line_id' => 7
    ]);

    DB::table('stops_lines')->insert([
      'id' => 27,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'GLUSOSIR',
      'line_id' => 7
    ]);

    DB::table('stops_lines')->insert([
      'id' => 28,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'UNIILUBE',
      'line_id' => 7
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 154

    DB::table('stops_lines')->insert([
      'id' => 29,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'SPLA',
      'line_id' => 8
    ]);

    DB::table('stops_lines')->insert([
      'id' => 30,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'GOSP',
      'line_id' => 8
    ]);

    DB::table('stops_lines')->insert([
      'id' => 31,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OLIWNZ',
      'line_id' => 8
    ]);

    DB::table('stops_lines')->insert([
      'id' => 32,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDRATA',
      'line_id' => 8
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 1

    DB::table('stops_lines')->insert([
      'id' => 33,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'JUNI',
      'line_id' => 17
    ]);

    DB::table('stops_lines')->insert([
      'id' => 34,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'CMEN',
      'line_id' => 17
    ]);

    DB::table('stops_lines')->insert([
      'id' => 35,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'GROT',
      'line_id' => 17
    ]);

    DB::table('stops_lines')->insert([
      'id' => 36,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'FRAN',
      'line_id' => 17
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 2

    DB::table('stops_lines')->insert([
      'id' => 37,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'DEBIPKM19',
      'line_id' => 18
    ]);

    DB::table('stops_lines')->insert([
      'id' => 38,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'WSPO',
      'line_id' => 18
    ]);

    DB::table('stops_lines')->insert([
      'id' => 39,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'HCP',
      'line_id' => 18
    ]);

    DB::table('stops_lines')->insert([
      'id' => 40,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'ALEJMARC',
      'line_id' => 18
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 3

    DB::table('stops_lines')->insert([
      'id' => 41,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'UNIILUBE21',
      'line_id' => 19
    ]);

    DB::table('stops_lines')->insert([
      'id' => 42,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'TADE',
      'line_id' => 19
    ]);

    DB::table('stops_lines')->insert([
      'id' => 43,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDZEGR',
      'line_id' => 19
    ]);

    DB::table('stops_lines')->insert([
      'id' => 44,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'ALEJMARC',
      'line_id' => 19
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 5

    DB::table('stops_lines')->insert([
      'id' => 45,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'POLA',
      'line_id' => 20
    ]);

    DB::table('stops_lines')->insert([
      'id' => 46,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDSOLI',
      'line_id' => 20
    ]);

    DB::table('stops_lines')->insert([
      'id' => 47,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OSPODLIPA',
      'line_id' => 20
    ]);

    DB::table('stops_lines')->insert([
      'id' => 48,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'GORCPKM24',
      'line_id' => 20
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 201

    DB::table('stops_lines')->insert([
      'id' => 49,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'ALEJMARC25',
      'line_id' => 12
    ]);

    DB::table('stops_lines')->insert([
      'id' => 50,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'PLWIOSLUDO',
      'line_id' => 12
    ]);

    DB::table('stops_lines')->insert([
      'id' => 51,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'LAKO',
      'line_id' => 12
    ]);

    DB::table('stops_lines')->insert([
      'id' => 52,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OSSOBI',
      'line_id' => 12
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 202

    DB::table('stops_lines')->insert([
      'id' => 53,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'UNIILUBE21',
      'line_id' => 11
    ]);

    DB::table('stops_lines')->insert([
      'id' => 54,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'TADE',
      'line_id' => 11
    ]);

    DB::table('stops_lines')->insert([
      'id' => 55,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDZEGR',
      'line_id' => 11
    ]);

    DB::table('stops_lines')->insert([
      'id' => 56,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'ALEJMARC',
      'line_id' => 11
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 211

    DB::table('stops_lines')->insert([
      'id' => 57,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'STARPKM',
      'line_id' => 10
    ]);

    DB::table('stops_lines')->insert([
      'id' => 58,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'FORTNZ',
      'line_id' => 10
    ]);

    DB::table('stops_lines')->insert([
      'id' => 59,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OKOPNZ',
      'line_id' => 10
    ]);

    DB::table('stops_lines')->insert([
      'id' => 60,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'GARBPKM',
      'line_id' => 10
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 212

    DB::table('stops_lines')->insert([
      'id' => 61,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'SZWASZPI',
      'line_id' => 10
    ]);

    DB::table('stops_lines')->insert([
      'id' => 62,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'DYMKNZ',
      'line_id' => 10
    ]);

    DB::table('stops_lines')->insert([
      'id' => 63,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OSZODINZ',
      'line_id' => 10
    ]);

    DB::table('stops_lines')->insert([
      'id' => 64,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'KACZ34',
      'line_id' => 10
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 20

    DB::table('stops_lines')->insert([
      'id' => 65,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'ZAJEMADA',
      'line_id' => 13
    ]);

    DB::table('stops_lines')->insert([
      'id' => 66,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'GLOGHETM',
      'line_id' => 13
    ]);

    DB::table('stops_lines')->insert([
      'id' => 67,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDNOWAJEZI',
      'line_id' => 13
    ]);

    DB::table('stops_lines')->insert([
      'id' => 68,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'ZAJEMADA',
      'line_id' => 13
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 100

    DB::table('stops_lines')->insert([
      'id' => 69,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'NOWEZOO',
      'line_id' => 14
    ]);

    DB::table('stops_lines')->insert([
      'id' => 70,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'TORREGAMALTNZ',
      'line_id' => 14
    ]);

    DB::table('stops_lines')->insert([
      'id' => 71,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'TERMMALTNZ',
      'line_id' => 14
    ]);

    DB::table('stops_lines')->insert([
      'id' => 72,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'POZNGLOW',
      'line_id' => 14
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 102

    DB::table('stops_lines')->insert([
      'id' => 73,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'MUZEBRONPANC',
      'line_id' => 15
    ]);

    DB::table('stops_lines')->insert([
      'id' => 74,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'POLSNZ1033',
      'line_id' => 15
    ]);

    DB::table('stops_lines')->insert([
      'id' => 75,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'OGRONZ',
      'line_id' => 15
    ]);

    DB::table('stops_lines')->insert([
      'id' => 76,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'POZNGLOW',
      'line_id' => 15
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 104

    DB::table('stops_lines')->insert([
      'id' => 77,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'NOWEZOO',
      'line_id' => 16
    ]);

    DB::table('stops_lines')->insert([
      'id' => 78,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'TORREGAMALTNZ',
      'line_id' => 16
    ]);

    DB::table('stops_lines')->insert([
      'id' => 79,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'TERMMALTNZ',
      'line_id' => 16
    ]);

    DB::table('stops_lines')->insert([
      'id' => 80,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'stop_id' => 'RONDSRODNZ',
      'line_id' => 16
    ]);
  }
}
