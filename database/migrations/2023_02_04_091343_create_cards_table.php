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
            $table->string('residentialAddress');
            $table->integer('phone1');
            $table->integer('phone2')->nullable();
            $table->string('cniNumber');
            $table->text('lieuCreationCni');
            $table->date('birthday');
            $table->string('profession');
            $table->string('toContactName');
            $table->integer('toContactPhone');
            $table->string('toContactAddress');
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
