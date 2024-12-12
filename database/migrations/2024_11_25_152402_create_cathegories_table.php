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
        Schema::create('cathegories', function (Blueprint $table) {
            $table->id();
			$table->String('name');
			$table->foreignId('cathegory_id')->nullable()->constrained()->cascadeOnDelete(); //optional parent cathegory
			$table->String('parent')->nullable(); //optional parent cathegory name
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cathegories');
    }
};
