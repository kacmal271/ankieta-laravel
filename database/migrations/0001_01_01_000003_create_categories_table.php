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
    Schema::create('categories', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      // orderNumber, not null, unique
      $table->integer('orderNumber')
        ->nullable(false)
        ->unique(true);

      /**
       * category, not null, unique
       * 
       * TEXT cannot be unique
       * 
       * reason:
       * 
       *   unique is only attribute that is size-limited
       *   MySQL cannot size-limit TEXT
       *   Laravel can but that's on app side
       * 
       * https://stackoverflow.com/questions/1827063/mysql-error-key-specification-without-a-key-length
       */

      $table->text('category')
        ->nullable(false);
    });
  }
  
  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('categories');
  }
};
