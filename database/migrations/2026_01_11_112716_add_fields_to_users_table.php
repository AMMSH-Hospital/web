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
            $table->string('username')->unique();
            $table->string('phone')->nullable();
            $table->string('role')
                ->comment('admin, doctor, staff')
                ->default('staff');
            $table->string('photo')->nullable();
            $table->boolean('status')->default(true);
            $table->dateTime('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('phone');
            $table->dropColumn('role');
            $table->dropColumn('photo');
            $table->dropColumn('status');
            $table->dropColumn('last_login');
        });
    }
};
