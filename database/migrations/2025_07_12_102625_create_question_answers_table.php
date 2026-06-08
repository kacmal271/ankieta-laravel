<?php

use App\Models\Survey\Question;
use App\Models\Survey\Picture;

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
    Schema::create('question_answers', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      // orderNumber, not null
      $table->integer('orderNumber')
        ->nullable(false);

      $table->foreignIdFor(Question::class);

      $table->foreign('question_id')
				->references('id')
				->on('questions')
				->onDelete('cascade');

      // label
      // answer, not null
      $table->text('answer', 65535)
        ->nullable(false);

      $table->foreignIdFor(Picture::class)
        ->nullable(true);

      // dont use: referential integrity constraints
      // question can exist w/o picture

        // $table->foreign('picture_id')
        // 	->references('id')
        // 	->on('pictures');

      /**
       * answer_name, not null
       * cannot be unique
       * used as: foreign key
       */

      $table->string('answer_name', 255)
        ->nullable(false);

      // value, not null, unique
      $table->string('value', 255)
        ->nullable(false);
    });
  }
  
  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('question_answers');
  }
};
