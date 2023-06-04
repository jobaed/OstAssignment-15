<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Assignment Task 01

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create( 'products', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name', 100 );
            $table->decimal( 'price', 5, 2 );
            $table->longText( 'description' );

            // For get Auto Time stamp. any insert system you can use
            $table->timestamp( 'created_at' )->useCurrent();
            $table->timestamp( 'updated_at' )->useCurrent()->useCurrentOnUpdate();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists( 'products' );
    }
};
