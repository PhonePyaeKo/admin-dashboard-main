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
        Schema::create('banner_sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('sort');
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->string('button_text');
            $table->string('button_color');
            $table->string('bottom_card_one_title');
            $table->text('bottom_card_one_description');
            $table->string('bottom_card_two_title');
            $table->text('bottom_card_two_description');
            $table->text('bottom_card_three_title');
            $table->text('bottom_card_three_description');
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_sliders');
    }
};
