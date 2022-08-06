<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mune', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('color')->nullable();
            $table->decimal('price',10,2)->nullable();
            $table->enum('staus',['active','not_active']);
            $table->date('start_date');
            $table->date('end_date');
            $table->text('desc')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('currint_user');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mune');
    }
}
