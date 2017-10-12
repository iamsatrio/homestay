<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('type_id');
//            $table->foreign('type_id')->references('id')->on('user_detail_types');
            $table->bigInteger('amount');
            $table->string('etc');
            $table->bigInteger('saldo');
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
        Schema::dropIfExists('user_details');
    }
}
