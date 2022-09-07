<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('energies', function (Blueprint $table) {
            $table->id();
            $table->float('energy_value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('energies');
    }
};
