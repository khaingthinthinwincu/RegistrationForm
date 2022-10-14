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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //insert column
            $table->string('phone'); //insert column
            $table->date('date');//insert column
            $table->string('gender');//insert column
            $table->string('nrc');//insert column
            $table->string('marriage');//insert column
            $table->string('township'); //insert column
            $table->longText('biography')->nullable(); //insert column
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
        Schema::dropIfExists('registers');
    }
};
