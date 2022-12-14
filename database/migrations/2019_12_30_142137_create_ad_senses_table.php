<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdSensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_senses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Location');
            $table->string('name');
            $table->string('Display');
            $table->string('Type')->default(1);
            $table->string('Active')->default(1);
            $table->longtext('image')->nullable();
            $table->longtext('url')->nullable();
            $table->longtext('code')->nullable();
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
        Schema::dropIfExists('ad_senses');
    }
}
