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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->nullable();
           $table->string('slug', 191)->unique(); // Pour des URLs propres : thepolitico.cd/category/politique
        $table->text('about')->nullable();
        $table->text('description')->nullable();      
    
    

             $table->json('images')->nullable();
            $table->string('video_url')->nullable();
            $table->string('phone')->nullable();
    $table->string('address')->nullable();
    $table->string('email')->nullable();
               $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
