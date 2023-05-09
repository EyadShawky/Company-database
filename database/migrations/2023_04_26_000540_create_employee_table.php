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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('super_ssn')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->string('name' , 60);
            $table->string('Address' , 255);
            $table->integer('Sex');
            $table->dateTime('Bdate');
            $table->decimal('salary', 10, 2);
            $table->foreign('super_ssn')->references('id')->on('employee');
            $table->foreign('department_id')->references('id')->on('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
