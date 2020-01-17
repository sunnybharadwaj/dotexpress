<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pledge_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('copies')->nullable();
            $table->string('copies_other')->nullable();
            $table->string('name');
            $table->string('lang');
            $table->string('org_name');
            $table->string('channel')->nullable();
            $table->string('channel_other')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->text('message');
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
        Schema::dropIfExists('pledges');
    }
}
