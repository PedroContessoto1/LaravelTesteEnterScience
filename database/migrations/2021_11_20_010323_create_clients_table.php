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
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->date('birth_date')->nullable();
            $table->enum('sex', ['M', 'F','O'])->nullable();
            // endereço
            $table->string('cep', 20);
            $table->string('street', 100);
            $table->string('house_number', 10);
            $table->string('complement', 100);
            $table->string('city', 100);
            $table->string('states', 2)->nullable();
            $table->string('email', 100);
            $table->string('phone', 20)->nullable();
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
