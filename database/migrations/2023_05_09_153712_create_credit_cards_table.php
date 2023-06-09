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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id('CardID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('AccountID');
            $table->foreign('UserID')->references('user_id')->on('users');
            $table->foreign('AccountID')->references('account_id')->on('accounts');
            $table->string('CardholderName', 50);
            $table->string('CardNumber', 16);
            $table->string('ExpirationDate', 5);
            $table->string('SecurityCode', 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_cards');
    }
};
