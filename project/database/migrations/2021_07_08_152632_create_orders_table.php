<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->string('nome');
            $table->foreign('nome')->references('nome')->on('users')->onDelete('cascade');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('titolo');
            $table->string('data');
            $table->string('ora');
            $table->string('descrizione');
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
        Schema::dropIfExists('orders');
    }
}
