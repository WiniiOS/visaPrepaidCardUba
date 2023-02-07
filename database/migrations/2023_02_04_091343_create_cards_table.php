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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('surname');
            $table->string('lastname');
            $table->string('city');
            $table->string('residentialAdress');
            $table->string('emailAdress');
            $table->integer('phone1');
            $table->integer('phone2');
            $table->integer('cniNumber');
            $table->date('birthday');
            $table->string('profession');
            $table->string('toContactName');
            $table->string('toContactPhone');
            $table->string('toContactAdress');
            $table->enum('segment', [1,2,3]);
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
        Schema::dropIfExists('cards');
    }
};
