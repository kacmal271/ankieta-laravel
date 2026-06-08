<?php

namespace Database\Seeders\Survey;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionAnswerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    ///////////////////////////////////////////////////////////////////////////////
    // 01 age

    DB::table('question_answers')->insert([
      'id' => 11,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 1,
      'answer' => '<13',
      'picture_id' => null,
      'answer_name' => 'age',
      'value' => '0',
    ]);

    DB::table('question_answers')->insert([
      'id' => 12,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 1,
      'answer' => '13-18',
      'picture_id' => null,
      'answer_name' => 'age',
      'value' => '13',
    ]);

    DB::table('question_answers')->insert([
      'id' => 13,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 1,
      'answer' => '19-26',
      'picture_id' => null,
      'answer_name' => 'age',
      'value' => '19',
    ]);

    DB::table('question_answers')->insert([
      'id' => 14,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 4,
      'question_id' => 1,
      'answer' => '27-35',
      'picture_id' => null,
      'answer_name' => 'age',
      'value' => '27',
    ]);

    DB::table('question_answers')->insert([
      'id' => 15,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 5,
      'question_id' => 1,
      'answer' => '36-50',
      'picture_id' => null,
      'answer_name' => 'age',
      'value' => '36',
    ]);

    DB::table('question_answers')->insert([
      'id' => 16,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 6,
      'question_id' => 1,
      'answer' => '51-75',
      'picture_id' => null,
      'answer_name' => 'age',
      'value' => '51',
    ]);

    DB::table('question_answers')->insert([
      'id' => 17,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 7,
      'question_id' => 1,
      'answer' => '76+',
      'picture_id' => null,
      'answer_name' => 'age',
      'value' => '76',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 02 sex

    DB::table('question_answers')->insert([
      'id' => 21,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 2,
      'answer' => 'Male',
      'picture_id' => null,
      'answer_name' => 'sex',
      'value' => 'm',
    ]);

    DB::table('question_answers')->insert([
      'id' => 22,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 2,
      'answer' => 'Female',
      'picture_id' => null,
      'answer_name' => 'sex',
      'value' => 'f',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 03 isColorBlind

    DB::table('question_answers')->insert([
      'id' => 31,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 3,
      'answer' => 'Yes',
      'picture_id' => null,
      'answer_name' => 'isColorBlind',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 32,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 3,
      'answer' => 'No',
      'picture_id' => null,
      'answer_name' => 'isColorBlind',
      'value' => '0',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 04 isLeftHanded

    DB::table('question_answers')->insert([
      'id' => 41,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 4,
      'answer' => 'Left-handed',
      'picture_id' => null,
      'answer_name' => 'isLeftHanded',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 42,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 4,
      'answer' => 'Right-handed',
      'picture_id' => null,
      'answer_name' => 'isLeftHanded',
      'value' => '0',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 05 isVisionImpaired

    DB::table('question_answers')->insert([
      'id' => 51,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 5,
      'answer' => 'Yes',
      'picture_id' => null,
      'answer_name' => 'isVisionImpaired',
      'value' => 'true',
    ]);

    DB::table('question_answers')->insert([
      'id' => 52,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 5,
      'answer' => 'No',
      'picture_id' => null,
      'answer_name' => 'isVisionImpaired',
      'value' => 'false',
    ]);

    DB::table('question_answers')->insert([
      'id' => 53,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 5,
      'answer' => "I don't know",
      'picture_id' => null,
      'answer_name' => 'isVisionImpaired',
      'value' => 'undefined',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 06 isVisionTreated

    DB::table('question_answers')->insert([
      'id' => 61,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 6,
      'answer' => 'Yes',
      'picture_id' => null,
      'answer_name' => 'isVisionTreated',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 62,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 6,
      'answer' => 'No',
      'picture_id' => null,
      'answer_name' => 'isVisionTreated',
      'value' => '0',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 07 metro

    // dynamic survey: session should hold this information

    ///////////////////////////////////////////////////////////////////////////////
    // 08 metroGrade

    DB::table('question_answers')->insert([
      'id' => 81,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 8,
      'answer' => 'Uncertain information',
      'picture_id' => null,
      'answer_name' => 'metroGrade',
      'value' => '0',
    ]);

    DB::table('question_answers')->insert([
      'id' => 82,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 8,
      'answer' => 'Information rather uncertain',
      'picture_id' => null,
      'answer_name' => 'metroGrade',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 83,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 8,
      'answer' => "I don't know",
      'picture_id' => null,
      'answer_name' => 'metroGrade',
      'value' => '2',
    ]);

    DB::table('question_answers')->insert([
      'id' => 84,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 4,
      'question_id' => 8,
      'answer' => "Information rather certain",
      'picture_id' => null,
      'answer_name' => 'metroGrade',
      'value' => '3',
    ]);

    DB::table('question_answers')->insert([
      'id' => 85,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 5,
      'question_id' => 8,
      'answer' => "Certain information",
      'picture_id' => null,
      'answer_name' => 'metroGrade',
      'value' => '4',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 09 fluent

    // dynamic survey: session should hold this information

    ///////////////////////////////////////////////////////////////////////////////
    // 10 fluentGrade

    DB::table('question_answers')->insert([
      'id' => 101,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 10,
      'answer' => 'Uncertain information',
      'picture_id' => null,
      'answer_name' => 'fluentGrade',
      'value' => '0',
    ]);

    DB::table('question_answers')->insert([
      'id' => 102,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 10,
      'answer' => 'Information rather uncertain',
      'picture_id' => null,
      'answer_name' => 'fluentGrade',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 103,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 10,
      'answer' => "I don't know",
      'picture_id' => null,
      'answer_name' => 'fluentGrade',
      'value' => '2',
    ]);

    DB::table('question_answers')->insert([
      'id' => 104,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 4,
      'question_id' => 10,
      'answer' => "Information rather certain",
      'picture_id' => null,
      'answer_name' => 'fluentGrade',
      'value' => '3',
    ]);

    DB::table('question_answers')->insert([
      'id' => 105,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 5,
      'question_id' => 10,
      'answer' => "Certain information",
      'picture_id' => null,
      'answer_name' => 'fluentGrade',
      'value' => '4',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 11 searchTime

    DB::table('question_answers')->insert([
      'id' => 111,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 11,
      'answer' => "Website 1.",
      'picture_id' => 1,
      'answer_name' => 'searchTime',
      'value' => 'metro',
    ]);

    DB::table('question_answers')->insert([
      'id' => 112,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 11,
      'answer' => "Website 2.",
      'picture_id' => 2,
      'answer_name' => 'searchTime',
      'value' => 'fluent',
    ]);

    DB::table('question_answers')->insert([
      'id' => 113,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 11,
      'answer' => "Both.female",
      'picture_id' => null,
      'answer_name' => 'searchTime',
      'value' => 'both',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 12 readability

    DB::table('question_answers')->insert([
      'id' => 121,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 12,
      'answer' => "Website 1.",
      'picture_id' => 1,
      'answer_name' => 'readability',
      'value' => 'metro',
    ]);

    DB::table('question_answers')->insert([
      'id' => 122,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 12,
      'answer' => "Website 2.",
      'picture_id' => 2,
      'answer_name' => 'readability',
      'value' => 'fluent',
    ]);

    DB::table('question_answers')->insert([
      'id' => 123,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 12,
      'answer' => "Both.female",
      'picture_id' => null,
      'answer_name' => 'readability',
      'value' => 'both',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 13 declaredDevice

    DB::table('question_answers')->insert([
      'id' => 131,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 13,
      'answer' => "Personal computer / Laptop",
      'picture_id' => null,
      'answer_name' => 'declaredDevice',
      'value' => 'large',
    ]);

    DB::table('question_answers')->insert([
      'id' => 132,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 13,
      'answer' => "Tablet",
      'picture_id' => null,
      'answer_name' => 'declaredDevice',
      'value' => 'tablet',
    ]);

    DB::table('question_answers')->insert([
      'id' => 133,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 13,
      'answer' => "Phone / Handheld device",
      'picture_id' => null,
      'answer_name' => 'declaredDevice',
      'value' => 'handheld',
    ]);

    DB::table('question_answers')->insert([
      'id' => 134,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 4,
      'question_id' => 13,
      'answer' => "Other.female",
      'picture_id' => null,
      'answer_name' => 'declaredDevice',
      'value' => 'other',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 14 internetScreentime

    DB::table('question_answers')->insert([
      'id' => 141,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 14,
      'answer' => "<1",
      'picture_id' => null,
      'answer_name' => 'internetScreentime',
      'value' => '0',
    ]);

    DB::table('question_answers')->insert([
      'id' => 142,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 14,
      'answer' => "1-4",
      'picture_id' => null,
      'answer_name' => 'internetScreentime',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 143,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 14,
      'answer' => "5-8",
      'picture_id' => null,
      'answer_name' => 'internetScreentime',
      'value' => '5',
    ]);

    DB::table('question_answers')->insert([
      'id' => 144,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 4,
      'question_id' => 14,
      'answer' => "9+",
      'picture_id' => null,
      'answer_name' => 'internetScreentime',
      'value' => '9',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 15 [various]

    DB::table('question_answers')->insert([
      'id' => 151,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 15,
      'answer' => "Social media (example: facebook.com)",
      'picture_id' => null,
      'answer_name' => 'isSocial',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 152,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 15,
      'answer' => "Entertainment (netflix.com)",
      'picture_id' => null,
      'answer_name' => 'isEntertainment',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 153,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 15,
      'answer' => "Artificial intelligence models (chatgpt.com)",
      'picture_id' => null,
      'answer_name' => 'isAI',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 154,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 4,
      'question_id' => 15,
      'answer' => "Mail (gmail.com)",
      'picture_id' => null,
      'answer_name' => 'isMail',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 155,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 5,
      'question_id' => 15,
      'answer' => "Banking",
      'picture_id' => null,
      'answer_name' => 'isBanking',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 156,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 6,
      'question_id' => 15,
      'answer' => "Encyclopedic information (wikipedia.org)",
      'picture_id' => null,
      'answer_name' => 'isEncyclopedic',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 157,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 7,
      'question_id' => 15,
      'answer' => "Education (khanacademy.org)",
      'picture_id' => null,
      'answer_name' => 'isEducation',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 158,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 8,
      'question_id' => 15,
      'answer' => "Scientific information (scholar.google.com)",
      'picture_id' => null,
      'answer_name' => 'isScientific',
      'value' => '1',
    ]);

    DB::table('question_answers')->insert([
      'id' => 159,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 9,
      'question_id' => 15,
      'answer' => "For work/school related purposes",
      'picture_id' => null,
      'answer_name' => 'isProfessional',
      'value' => '1',
    ]);

    ///////////////////////////////////////////////////////////////////////////////
    // 16 declaredSystem

    DB::table('question_answers')->insert([
      'id' => 161,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 1,
      'question_id' => 16,
      'answer' => "Windows 10/11",
      'picture_id' => null,
      'answer_name' => 'declaredSystem',
      'value' => 'win10',
    ]);

    DB::table('question_answers')->insert([
      'id' => 162,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 2,
      'question_id' => 16,
      'answer' => "Windows 8/8.1",
      'picture_id' => null,
      'answer_name' => 'declaredSystem',
      'value' => 'win8',
    ]);

    DB::table('question_answers')->insert([
      'id' => 163,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 3,
      'question_id' => 16,
      'answer' => "Windows 7 or older",
      'picture_id' => null,
      'answer_name' => 'declaredSystem',
      'value' => 'win_old',
    ]);

    DB::table('question_answers')->insert([
      'id' => 164,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 4,
      'question_id' => 16,
      'answer' => "macOS",
      'picture_id' => null,
      'answer_name' => 'declaredSystem',
      'value' => 'macos',
    ]);

    DB::table('question_answers')->insert([
      'id' => 165,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 5,
      'question_id' => 16,
      'answer' => "iOS",
      'picture_id' => null,
      'answer_name' => 'declaredSystem',
      'value' => 'ios',
    ]);

    DB::table('question_answers')->insert([
      'id' => 166,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 6,
      'question_id' => 16,
      'answer' => "Android",
      'picture_id' => null,
      'answer_name' => 'declaredSystem',
      'value' => 'android',
    ]);

    DB::table('question_answers')->insert([
      'id' => 167,
      'created_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'updated_at' => new \DateTimeImmutable('2025-07-12 13:29:00'),
      'orderNumber' => 7,
      'question_id' => 16,
      'answer' => "Other.male",
      'picture_id' => null,
      'answer_name' => 'declaredSystem',
      'value' => 'other',
    ]);
    
  }
}
