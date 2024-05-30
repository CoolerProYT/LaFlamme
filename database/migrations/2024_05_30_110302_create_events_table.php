<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->text('description');
            $table->time('start');
            $table->time('end');
            $table->date('date');
            $table->double('vip_price');
            $table->double('sdj_price');
            $table->double('vvip_price');
            $table->double('svip_price');
            $table->double('svvip_price');
            $table->double('s_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
