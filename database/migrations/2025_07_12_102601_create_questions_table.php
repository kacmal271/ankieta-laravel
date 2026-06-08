<?php

use App\Models\Survey\Category;

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
    Schema::create('questions', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      // orderNumber, not null, unique
      $table->integer('orderNumber')
        ->nullable(false);

      // question, not null
      $table->text('question', 65535)
        ->nullable(false);

      $table->foreignIdFor(Category::class);

      $table->foreign('category_id')
				->references('id')
				->on('categories')
				->onDelete('cascade');

      // input_type, not null
      $table->enum('input_type', ['radio', 'checkbox', 'select'])
        ->nullable(false);

      // subquestion, nullable
      $table->text('subquestion', 65535)
        ->nullable(true);

      // context, nullable
      $table->string('context', 255)
        ->nullable(true)
        ->default(null);
    });
  }
  
  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('questions');
  }
};
