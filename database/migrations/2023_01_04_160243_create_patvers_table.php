<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patvers', function (Blueprint $table) {
            $table->id();
            $table->integer('hamar');
            $table->string('anun');
            $table->string('azganun');
            $table->integer('qanak');
            $table->integer('heraxos');
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
        Schema::dropIfExists('patvers');
    }
};
