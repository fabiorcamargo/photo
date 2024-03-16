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
        Schema::table('portifolio_photos', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('folder')->nullable()->change();
            $table->string('tags')->nullable()->change();
            $table->string('file')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portifolio_photos', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
            $table->string('folder')->nullable(false)->change();
            $table->string('tags')->nullable(false)->change();
        });
    }
};
