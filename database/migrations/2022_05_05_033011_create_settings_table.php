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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id');
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('company',150)->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('email')->nullable();
            $table->string('smtpserver')->nullable();
            $table->string('smtpemail')->nullable();
            $table->string('smtppassword')->nullable();
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('icon')->nullable();
            $table->string('status',5)->nullable()->default('False');
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
};
