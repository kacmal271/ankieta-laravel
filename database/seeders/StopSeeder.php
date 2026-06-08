<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * this file is: finished
 */

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StopSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */

  public function run(): void
  {
    ///////////////////////////////////////////////////////////////////////////////
    // STATION

    DB::table('stops')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Ogrody',
      'stop_id' => 'OGRO'
    ]);

    DB::table('stops')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Ogrody',

      // OGRO + id
      'stop_id' => 'OGRO2'

    ]);

    DB::table('stops')->insert([
      'id' => 3,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Dworzec Zachodni',

      // replace: punctuation into spaces
      // replace: polish diacritics
      // substring 4: spaces delimited
      'stop_id' => 'DWORZZACH'
    ]);

    DB::table('stops')->insert([
      'id' => 4,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Kacza',
      'stop_id' => 'KACZ'
    ]);

    DB::table('stops')->insert([
      'id' => 5,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Stary Strzeszyn',
      'stop_id' => 'STARSTRZ'
    ]);

    DB::table('stops')->insert([
      'id' => 6,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Boranta',
      'stop_id' => 'BORA'
    ]);

    DB::table('stops')->insert([
      'id' => 7,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Ławica',
      'stop_id' => 'LAWI'
    ]);

    DB::table('stops')->insert([
      'id' => 8,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Rondo Kaponiera',
      'stop_id' => 'RONDKAPO'
    ]);

    DB::table('stops')->insert([
      'id' => 9,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Górczyn PKM',
      'stop_id' => 'GORCPKM'
    ]);

    DB::table('stops')->insert([
      'id' => 10,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Dębiec PKM',
      'stop_id' => 'DEBIPKM'
    ]);

    DB::table('stops')->insert([
      'id' => 11,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Darzybór',
      'stop_id' => 'DARZ'
    ]);

    DB::table('stops')->insert([
      'id' => 12,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Rondo Rataje',

      // portmanteau + id
      'stop_id' => 'RONDRATA'

    ]);

    DB::table('stops')->insert([
      'id' => 13,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Sypniewo',
      'stop_id' => 'SYPN'
    ]);

    DB::table('stops')->insert([
      'id' => 14,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Unii Lubelskiej',
      'stop_id' => 'UNIILUBE'
    ]);

    DB::table('stops')->insert([
      'id' => 15,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Spławie',
      'stop_id' => 'SPLA'
    ]);

    DB::table('stops')->insert([
      'id' => 17,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Junikowo',
      'stop_id' => 'JUNI'
    ]);

    DB::table('stops')->insert([
      'id' => 18,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Franowo',
      'stop_id' => 'FRAN'
    ]);

    DB::table('stops')->insert([
      'id' => 19,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Dębiec PKM',
      'stop_id' => 'DEBIPKM19'
    ]);

    DB::table('stops')->insert([
      'id' => 20,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Aleje Marcinkowskiego',
      'stop_id' => 'ALEJMARC'
    ]);

    DB::table('stops')->insert([
      'id' => 21,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Unii Lubelskiej',
      'stop_id' => 'UNIILUBE21'
    ]);

    DB::table('stops')->insert([
      'id' => 22,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Połabska',
      'stop_id' => 'POLA'
    ]);

    DB::table('stops')->insert([
      'id' => 23,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Górczyn PKM',
      'stop_id' => 'GORCPKM24'
    ]);

    DB::table('stops')->insert([
      'id' => 24,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Os. Sobieskiego',
      'stop_id' => 'OSSOBI'
    ]);

    DB::table('stops')->insert([
      'id' => 25,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Aleje Marcinkowskiego',
      'stop_id' => 'ALEJMARC25'
    ]);

    DB::table('stops')->insert([
      'id' => 26,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Starołęka PKM',
      'stop_id' => 'STARPKM'
    ]);

    DB::table('stops')->insert([
      'id' => 27,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Garbary PKM',
      'stop_id' => 'GARBPKM'
    ]);

    DB::table('stops')->insert([
      'id' => 28,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Zajezdnia/Madalińskiego',
      'stop_id' => 'ZAJEMADA'
    ]);

    DB::table('stops')->insert([
      'id' => 29,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Nowe Zoo',
      'stop_id' => 'NOWEZOO'
    ]);

    DB::table('stops')->insert([
      'id' => 30,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Poznań Główny',
      'stop_id' => 'POZNGLOW'
    ]);

    DB::table('stops')->insert([
      'id' => 31,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Muzeum Broni Pancernej',
      'stop_id' => 'MUZEBRONPANC'
    ]);

    DB::table('stops')->insert([
      'id' => 32,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Rondo Śródka nż.',
      'stop_id' => 'RONDSRODNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 33,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Szwajcarska Szpital',
      'stop_id' => 'SZWASZPI'
    ]);

    DB::table('stops')->insert([
      'id' => 34,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Kacza',
      'stop_id' => 'KACZ34'
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // STOP

    DB::table('stops')->insert([
      'id' => 1001,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Polska nż.',
      'stop_id' => 'POLSNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1002,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Os. Lotnictwa Polskiego',
      'stop_id' => 'OSLOTNPOLS'
    ]);

    DB::table('stops')->insert([
      'id' => 1003,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Park Wilsona',
      'stop_id' => 'PARKWILS'
    ]);

    DB::table('stops')->insert([
      'id' => 1004,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Ułańska',
      'stop_id' => 'ULAN'
    ]);

    DB::table('stops')->insert([
      'id' => 1005,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Instytut Technologiczno-Przyrodniczy nż.',
      'stop_id' => 'INSTTECHPRZYNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1006,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Strzeszyn PKM',
      'stop_id' => 'STRZPKM'
    ]);

    DB::table('stops')->insert([
      'id' => 1007,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Malechowska nż.',
      'stop_id' => 'MALENZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1008,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Os. Bajkowe',
      'stop_id' => 'OSBAJK'
    ]);

    DB::table('stops')->insert([
      'id' => 1009,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Bojanowska',
      'stop_id' => 'BOJA'
    ]);

    DB::table('stops')->insert([
      'id' => 1010,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Ostatnia',
      'stop_id' => 'OSTA'
    ]);

    DB::table('stops')->insert([
      'id' => 1011,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Schronisko Dla Zwierząt nż.',
      'stop_id' => 'SCHRDLAZWIENZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1012,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Kobylepole nż.',
      'stop_id' => 'KOBYNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1013,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Park Sypniewskiego nż.',
      'stop_id' => 'PARKSYPNNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1014,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Głuszyna OSIR',
      'stop_id' => 'GLUSOSIR'
    ]);

    DB::table('stops')->insert([
      'id' => 1015,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Gospodarska',
      'stop_id' => 'GOSP'
    ]);

    DB::table('stops')->insert([
      'id' => 1016,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Oliwkowa nż.',
      'stop_id' => 'OLIWNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1017,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Cmentarna',
      'stop_id' => 'CMEN'
    ]);

    DB::table('stops')->insert([
      'id' => 1018,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Grotkowska',
      'stop_id' => 'GROT'
    ]);

    DB::table('stops')->insert([
      'id' => 1019,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Wspólna',
      'stop_id' => 'WSPO'
    ]);

    DB::table('stops')->insert([
      'id' => 1020,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'HCP',
      'stop_id' => 'HCP'
    ]);

    DB::table('stops')->insert([
      'id' => 1021,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Tadeuszak',
      'stop_id' => 'TADE'
    ]);

    DB::table('stops')->insert([
      'id' => 1022,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Rondo Żegrze',
      'stop_id' => 'RONDZEGR'
    ]);

    DB::table('stops')->insert([
      'id' => 1023,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Rondo Solidarności',
      'stop_id' => 'RONDSOLI'
    ]);

    DB::table('stops')->insert([
      'id' => 1024,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Os. Pod Lipami',
      'stop_id' => 'OSPODLIPA'
    ]);

    DB::table('stops')->insert([
      'id' => 1025,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Pl. Wiosny Ludów',
      'stop_id' => 'PLWIOSLUDO'
    ]);

    DB::table('stops')->insert([
      'id' => 1026,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Łąkowa',
      'stop_id' => 'LAKO'
    ]);

    DB::table('stops')->insert([
      'id' => 1027,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Forteczna nż.',
      'stop_id' => 'FORTNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1028,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Okopowa nż.',
      'stop_id' => 'OKOPNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1029,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Głogowska/Hetmańska',
      'stop_id' => 'GLOGHETM'
    ]);

    DB::table('stops')->insert([
      'id' => 1030,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Rondo Nowaka-Jeziorańskiego',
      'stop_id' => 'RONDNOWAJEZI'
    ]);

    DB::table('stops')->insert([
      'id' => 1031,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Tor Regatowy Malta nż.',
      'stop_id' => 'TORREGAMALTNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1032,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Termy Maltańskie nż.',
      'stop_id' => 'TERMMALTNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1033,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Polska nż.',
      'stop_id' => 'POLSNZ1033'
    ]);

    DB::table('stops')->insert([
      'id' => 1034,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Ogrody nż.',
      'stop_id' => 'OGRONZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1035,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Dymka nż.',
      'stop_id' => 'DYMKNZ'
    ]);

    DB::table('stops')->insert([
      'id' => 1036,
      'created_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'updated_at' => new \DateTimeImmutable('2025-01-01 00:00:01'),
      'name' => 'Os. Zodiak nż.',
      'stop_id' => 'OSZODINZ'
    ]);
  }
}
