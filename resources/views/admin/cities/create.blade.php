<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('population')->nullable();
            $table->string('state_code');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
