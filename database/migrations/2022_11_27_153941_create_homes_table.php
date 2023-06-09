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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            // $table->string('vernagir');
            // $table->string('nkar');
            // $table->string('text');
            // $table->ipAddress('nkar1', 500);
            $table->string('nkar1', 500);
            $table->string('nkar2',500);
            $table->string('nkar3',500);
            $table->string('vernagir',255);
            $table->string('nkar',500);
            $table->string('text',10000);
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
        Schema::dropIfExists('homes');
    }
};
