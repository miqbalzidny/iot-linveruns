<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('currents', function (Blueprint $table) {
            $table->id();
            $table->float('current_value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('currents');
    }
};
