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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("membership_number");
            $table->string("image")->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email_address');
            $table->string('telephone_number');
            $table->date('date_of_birth');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('address');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->string('aim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};