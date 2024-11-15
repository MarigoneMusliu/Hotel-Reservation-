<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("Titulli");
            $table->string("Pershkrimi");
            $table->string("Statusi");
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};