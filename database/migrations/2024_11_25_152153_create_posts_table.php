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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->String('title');
			$table->String('header');
			$table->String('author');
			$table->String('body');
			$table->foreignId('cathegory_id')->constrained();
			$table->String('cathegory_name');
			$table->String('image');
			$table->String('image_desc');
			$table->String('source');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
