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
        Schema::create('family_heads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->date('birthdate');
            $table->string('mobile_no');
            $table->text('address');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->enum('marital_status', ['married', 'unmarried']);
            $table->date('wedding_date')->nullable();
            $table->text('hobbies');
            $table->string('photo');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_heads');
    }
};
