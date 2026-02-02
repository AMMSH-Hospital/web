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
        Schema::table('doctors', function (Blueprint $table) {
            $table->json('qualifications')->nullable();
            $table->json('professional_experiences')->nullable();
            $table->string('professional_experience')->nullable();
            $table->json('tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('qualifications');
            $table->dropColumn('professional_experiences');
            $table->dropColumn('professional_experience');
            $table->dropColumn('tags');
        });
    }
};
