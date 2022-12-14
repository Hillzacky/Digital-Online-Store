<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->integer('author_id');
            $table->integer('category_id')->nullable();
            $table->longtext('Title_ar');
            $table->longtext('Title_en');
            $table->longtext('Title_fr');
            $table->longtext('body_ar');
            $table->longtext('body_en');
            $table->longtext('body_fr');
            $table->longtext('image')->nullable();
            $table->longtext('slug')->unique();
            $table->longtext('meta_description');
            $table->longtext('meta_keywords');
            $table->longtext('seo_title')->nullable();
            $table->boolean('featured')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
