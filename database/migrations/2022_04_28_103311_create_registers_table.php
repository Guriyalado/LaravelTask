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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
             $table->string('firstname')->nullable();
              $table->string('lastname')->nullable();
              $table->string('email')->nullable();
               $table->string('password')->nullable();
                $table->string('date')->nullable();
                $table->string('gender')->nullable();
                $table->string('income')->nullable();
                $table->string('occupation')->nullable();
                $table->string('family')->nullable();
                $table->string('manglik')->nullable();
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
