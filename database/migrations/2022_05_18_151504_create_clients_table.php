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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('lname');
            $table->string('password');
            $table->string('phone');
            $table->string('state');
            $table->text('adr');
            $table->string('photo');
            $table->enum('sex',['Homme','Femme']);
            $table->date('birth');
            $table->enum('type',['personnel','agency','freelancer']);
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
};
