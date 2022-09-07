<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pfs', function (Blueprint $table) {
            $table->id();
            $table->float('powerfactor_value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pfs');
    }
};
