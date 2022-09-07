<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('voltages', function (Blueprint $table) {
            $table->id();
            $table->float('voltage_value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voltages');
    }
};
