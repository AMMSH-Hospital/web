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
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('appointment_type')->nullable()->after('department_id');
            $table->date('date_of_birth')->nullable()->after('patient_phone');
            $table->string('gender')->nullable()->after('date_of_birth');
            $table->string('patient_type')->default('new')->after('gender');
            $table->string('medical_records')->nullable()->after('message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn(['appointment_type', 'date_of_birth', 'gender', 'patient_type', 'medical_records']);
        });
    }
};
