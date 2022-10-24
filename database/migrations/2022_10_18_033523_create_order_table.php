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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->text('type');
            $table->integer('qty');
            $table->text('dateUse');
            $table->text('name');
            $table->text('email');
            $table->text('phone');
            $table->boolean('status_pay')->default(1);
            $table->text('numberCard')->nullable();
            $table->text('nameCard')->nullable();
            $table->text('dateEndCard')->nullable();
            $table->text('DateTimeout');
            $table->text('codeCard')->nullable();
            $table->text('total')->nullable();
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
        Schema::dropIfExists('order');
    }
};
