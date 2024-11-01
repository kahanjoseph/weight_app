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
        Schema::create('weight_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ID of the user');
            $table->decimal('weight', 8, 2)->comment('Weight in kilograms');
            $table->date('date')->comment('Date of the weight entry');
            $table->text('remarks')->nullable()->comment('Remarks or notes about the weight entry');
            $table->timestamps();

            // Adding foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weight_table');
    }
};
