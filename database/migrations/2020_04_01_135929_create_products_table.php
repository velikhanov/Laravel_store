<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('name_az')->nullable();
          $table->string('name_en')->nullable();
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');
          $table->json('properties')->nullable();
          $table->json('properties_az')->nullable();
          $table->json('properties_en')->nullable();
          $table->text('description')->nullable();
          $table->text('description_az')->nullable();
          $table->text('description_en')->nullable();
          $table->integer('price');
          $table->string('url');
          $table->boolean('status')->default(true);
          $table->timestamp('updated_at');
          $table->timestamp('created_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
