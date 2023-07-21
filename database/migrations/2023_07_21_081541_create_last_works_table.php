<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_order')->unsigned()->nullable();
            $table->string('name');
            $table->string('link')->nullable();
            $table->string('ar_name');
            $table->string('type');
            $table->string('image')->nullable()->default('images/last_work.png');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('last_works');
    }
}
