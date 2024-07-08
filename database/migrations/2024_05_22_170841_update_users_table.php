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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('user_key');
            $table->string('designation');
            $table->foreignId('user_type_id')->constrained(); // Corrected foreign key definition
            $table->integer('date_of_joining');
            $table->integer('status');
            $table->string('employee_type');
            $table->integer('current_salary');
            $table->integer('current_shift');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['user_type_id']);
            $table->dropColumn('user_type_id');
        });
    }
};
