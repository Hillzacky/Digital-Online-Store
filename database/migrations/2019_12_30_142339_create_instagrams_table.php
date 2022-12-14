<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagrams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('Title_ar');
            $table->longtext('Title_en');
            $table->longtext('Title_fr');
            $table->longtext('body_ar');
            $table->longtext('body_en');
            $table->longtext('body_fr');
            $table->longtext('image')->nullable();
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
        Schema::dropIfExists('instagrams');
    }
}
