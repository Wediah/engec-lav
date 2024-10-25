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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('firm')->default('Engec Group')->change();
            $table->string('type')->default('Design')->change();
            $table->string('status')->default('Active')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('firm')->default('Engec Group')->change();
            $table->string('type')->default('Design')->change();
            $table->string('status')->default('Active')->change();
        });
    }
};
