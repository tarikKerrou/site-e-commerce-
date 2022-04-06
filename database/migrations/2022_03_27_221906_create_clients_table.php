<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table-> increments ('id_client')->index();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dateNaissance');
            $table->text('email');
            $table->text('numCarteBancaire');
            $table->date('dateExprie');
            $table-> unsignedBigInteger ('id_produit')->index();
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');

            
            
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
}
