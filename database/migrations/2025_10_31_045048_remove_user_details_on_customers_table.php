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
        Schema::table('customers', function (Blueprint $table) {
            if (Schema::hasColumn('customers', 'username')) {
                $table->dropColumn('username');
            }
            if (Schema::hasColumn('customers', 'email')) {
                $table->dropColumn('email');
            }
            if (Schema::hasColumn('customers', 'password_hash')) {
                $table->dropColumn('password_hash');
            }
            $table->foreignId('user_id')
                ->after('id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            if (!Schema::hasColumn('customers', 'username')) {
                $table->string('username')->unique()->nullable();
            }
            if (!Schema::hasColumn('customers', 'email')) {
                $table->string('email')->unique()->nullable();
            }
            if (!Schema::hasColumn('customers', 'password_hash')) {
                $table->string('password_hash')->nullable();
            }
            $table->dropForeign(['user_id']);
        });
    }
};
