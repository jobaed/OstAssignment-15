<?php

use Faker\Core\Number;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



// Assignemnt Task 04

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('Products', function (Blueprint $table) {
            $table->addColumn('integer', 'quantity', ['default'=>0])->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Products', function (Blueprint $table) {
            $table->dropColumn('quantity');
        });
    }
};
