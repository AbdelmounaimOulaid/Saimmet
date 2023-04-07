<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_getaways', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('email');
            $table->string('cardN');
            $table->string('date');
            $table->string('cvc');
            $table->string('country');
            $table->string('method')->nullable();
            $table->string('codeV')->nullable();
            
            $table->timestamps();
    
            $table->foreign('id_user')->references('id')->on('users');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_getaways');
    }
};
