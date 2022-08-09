<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('img')->nullable();
            $table->string('desc')->nullable();
            $table->string('calories')->nullable();
            $table->enum('staus',['active','not_active']);
            $table->decimal('price',10,2);
            $table->unsignedBigInteger('cat_id');
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
