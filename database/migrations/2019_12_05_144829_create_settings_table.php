<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('skype_1');
            $table->string('skype_2');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('title');
            $table->text('history');
            $table->text('mission');
            $table->text('vision');
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
        Schema::dropIfExists('settings');
    }
}
