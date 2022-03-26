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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->foreignId('cat_id')->constraint('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->constraint('categories')->onDelete('cascade');
            $table->text('short_desc');
            $table->integer('price');
            $table->text('long_desc');
            $table->integer('stock');
            $table->integer('views');
            $table->text('image');
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
        Schema::dropIfExists('products');
    }
};
