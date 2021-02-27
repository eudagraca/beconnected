<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('phone');
            $table->string('alternative_phone')->nullable();
            $table->string('classification');
            $table->string('about_company');
            $table->string('main_services');
            $table->string('address');
            $table->string('province');
            $table->string('district');
            $table->string('license');
            $table->string('segment_area');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
