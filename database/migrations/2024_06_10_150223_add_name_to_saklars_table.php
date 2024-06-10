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
        Schema::table('saklars', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->enum('status', ['on', 'off'])->default('off')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('saklars', function (Blueprint $table) {
            //
        });
    }
};
