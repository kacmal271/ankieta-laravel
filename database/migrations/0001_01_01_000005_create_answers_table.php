<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
  * Run the migrations.
  */
  public function up(): void
  {
    Schema::create('answers', function (Blueprint $table)
    {
      $table->id();

      // determine: how much time was taken

      $table->timestamps();

      // MySQL 8.4: enum(string, string, ..)

      $table->enum    ('age', ['0', '13', '19', '27', '36', '51', '76'])
        ->nullable(true)
        ->default(null);

      $table->enum    ('sex', ['m', 'f'])
        ->nullable(true)
        ->default(null);

      $table->string  ('metroCorrectValue', 255)
        ->nullable(true)
        ->default(-1);

      $table->string  ('metroValue', 255)
        ->nullable(true)
        ->default(null);

      $table->datetime('metroStart')
        ->nullable(true)
        ->default(null);

      $table->datetime('metroEnd')
        ->nullable(true)
        ->default(null);

      $table->enum    ('metroGrade', ['0', '1', '2', '3', '4'])
        ->nullable(true)
        ->default(null);

      $table->string  ('fluentCorrectValue', 255)
        ->nullable(true)
        ->default(-1);

      $table->string  ('fluentValue', 255)
        ->nullable(true)
        ->default(null);

      $table->datetime('fluentStart')
        ->nullable(true)
        ->default(null);

      $table->datetime('fluentEnd')
        ->nullable(true)
        ->default(null);

      $table->enum    ('fluentGrade', ['0', '1', '2', '3', '4'])
        ->nullable(true)
        ->default(null);

      $table->enum    ('searchTime', ['metro', 'fluent', 'both'])
        ->nullable(true)
        ->default(null);

      $table->enum    ('readability', ['metro', 'fluent', 'both'])
        ->nullable(true)
        ->default(null);

      $table->enum    ('declaredDevice', ['large', 'tablet', 'handheld', 'other'])
        ->nullable(true)
        ->default(null);

      $table->enum    ('internetScreentime', ['0', '1', '5', '9'])
        ->nullable(true)
        ->default(null);

      $table->enum    ('declaredSystem', ['win10', 'win8', 'win_old', 'macos', 'ios', 'android', 'other'])
        ->nullable(true)
        ->default(null);

      $table->boolean ('isColorBlind')
        ->nullable(true)
        ->default(null);

      $table->boolean ('isLeftHanded')
        ->nullable(true)
        ->default(null);

      $table->enum    ('isVisionImpaired', ['true', 'false', 'undefined'])
        ->nullable(true)
        ->default(null);

      $table->boolean ('isVisionTreated')
        ->nullable(true)
        ->default(null);

      $table->boolean ('isSocial')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isEntertainment')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isAi')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isMail')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isBanking')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isEncyclopedic')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isEducation')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isScientific')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isProfessional')
        ->nullable(false)
        ->default(0);

      $table->boolean ('isFinished')
        ->nullable(false)
        ->default(false);
    });
  }
  
  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('answers');
  }
};
