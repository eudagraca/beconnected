<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concursos', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('phone');
            $table->string('Referencia');
            $table->string('address');
            $table->string('segment_area');
            $table->foreignId('distrito_id')->constrained()->onDelete('cascade');
            $table->foreignId('provincia_id')->constrained()->onDelete('cascade');
            $table->string('Descricao');
            $table->dateTime('Validade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('concursos');
    }
}
