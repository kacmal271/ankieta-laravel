<?php

namespace Database\Seeders\Survey;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // 01 age

    DB::table('questions')->insert([
      'id' => 1,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 1,
      'question' => 'My age:',
      'category_id' => 1,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 02 sex

    DB::table('questions')->insert([
      'id' => 2,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 2,
      'question' => 'Sex:',
      'category_id' => 1,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 03 isColorBlind

    DB::table('questions')->insert([
      'id' => 3,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 3,
      'question' => 'Do you suffer from a diagnosed color blindness?',
      'category_id' => 1,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 04 isLeftHanded

    DB::table('questions')->insert([
      'id' => 4,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 4,
      'question' => 'Are you left or right-handed?',
      'category_id' => 1,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 05 isVisionImpaired

    DB::table('questions')->insert([
      'id' => 5,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 5,
      'question' => 'Do you suffer from a visual impairment?',
      'category_id' => 1,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 06 isVisionTreated

    DB::table('questions')->insert([
      'id' => 6,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 6,
      'question' => 'Do you use glasses or contact lenses?',
      'category_id' => 1,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 07 metro

    DB::table('questions')->insert([
      'id' => 7,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 7,
      'question' => 'Please find information concerning a timetable by clicking the link: :link and then returning to the survey...',
      'category_id' => 2,
      'input_type' => 'select',
      'subquestion' => "What time does the last :service_type :icon of line no. :line_no depart from the ':stop_name' stop towards ':station_name' on :time_period?",
      'context' => "metro",
    ]);

    // 08 metroGrade

    DB::table('questions')->insert([
      'id' => 8,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 8,
      'question' => 'How do I rate the accuracy of the information I have found in the timetable?',
      'category_id' => 2,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 09 fluent

    DB::table('questions')->insert([
      'id' => 9,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 9,
      'question' => 'Please find information on a timetable by clicking here: :link and returning to the survey...',
      'category_id' => 2,
      'input_type' => 'select',
      'subquestion' => "How many times does :service_type :icon no. :line_no transit due the ':station_name' station on :time_period?",
      'context' => "fluent",
    ]);

    // 10 fluentGrade

    DB::table('questions')->insert([
      'id' => 10,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 10,
      'question' => 'How do I rate the accuracy of the information I have found in the timetable?',
      'category_id' => 2,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 11 searchTime

    DB::table('questions')->insert([
      'id' => 11,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 11,
      'question' => 'On which website was it faster to find the information?',
      'category_id' => 2,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 12 readability

    DB::table('questions')->insert([
      'id' => 12,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 12,
      'question' => 'Which page appears more readable?',
      'category_id' => 2,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 13 declaredDevice

    DB::table('questions')->insert([
      'id' => 13,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 13,

      /**
       * app can always remove special characters
       * however it is good to possess as much context information and inflection as you can
       * easy to reduce (differentiate), time-consuming to build (integrate)
       */

      'question' => 'I access websites mainly via:',

      'category_id' => 3,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 14 internetScreentime

    DB::table('questions')->insert([
      'id' => 14,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 14,

      /**
       * app can always remove special characters
       * however it is good to possess as much context information and inflection as you can
       * easy to reduce (differentiate), time-consuming to build (integrate)
       */

      'question' => 'I think I spend so many hours on the internet:',

      'category_id' => 3,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

    // 15 [various]

    DB::table('questions')->insert([
      'id' => 15,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 15,
      'question' => 'What kind of information do I look up most often? Note: This is a multiple-choice question :)',
      'category_id' => 3,
      'input_type' => 'checkbox',
      'subquestion' => null,
    ]);

    // 16 declaredSystem

    DB::table('questions')->insert([
      'id' => 16,
      'created_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 11:29:00'),
      'orderNumber' => 16,
      'question' => 'Which operating system do I use the most:',
      'category_id' => 3,
      'input_type' => 'radio',
      'subquestion' => null,
    ]);

  }
}
