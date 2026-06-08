<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  */
  public function run(): void
  {
    $this->call([
      UserSeeder::class,

      ServiceTypeSeeder::class, // #1
      TimePeriodSeeder::class,  // #2
      LineSeeder::class,        // #3
      StopSeeder::class,        // #4

      Survey\CategorySeeder::class,
      Survey\PictureSeeder::class,
      Survey\QuestionSeeder::class,
      Survey\QuestionAnswerSeeder::class,
    ]);

    StopsLinesSeeder::class::run();  // #5

    $this->call([
      DepartureSeeder::class,   // #6
    ]);
  }
}
