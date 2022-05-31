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
        Schema::create('propreties', function (Blueprint $table) {
            $table->id();
            $table->string('unique');
            $table->integer('client');
            $table->string('title');
            $table->string('photo');
            $table->enum('status',['A vendre','A loué']);
            $table->string('type');
            $table->double('price');
            $table->double('area');
            $table->text('adr');
            $table->string('state');
            $table->text('desc');
            $table->text('other');
            $table->string('room')->nullable();
            $table->text('sps');
            $table->enum('pay',['Promotion immobilière','Acte notarié','Promesse de vente'
            ,'Crédit bancaire','Livré foncier', 'Paiement par tranches','Acte notarié','Main à Main']);
            $table->integer('floor')->nullable();
            $table->integer('nbrFloor')->nullable();
            $table->enum('etat',['Nouveau','Ancien']);
            $table->enum('payPar',['12 mois','24 mois','6 mois','3 mois','1 mois','Semaine','Jour'])->nullable();
            $table->date('expire');
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
        Schema::dropIfExists('propreties');
    }
};
