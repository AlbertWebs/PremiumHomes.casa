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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->string('property_description');
            $table->string('slung');
            $table->string('property_id');
            $table->string('sqft');
            $table->string('price');

            $table->string('type');
            $table->string('status')->default('0');
            $table->string('Bath');
            $table->string('garages');
            $table->string('bedrooms');
            $table->string('yom');
            $table->string('rooms');
            // Amenities
            $table->string('ac');
            $table->string('gym');
            $table->string('alarm');
            $table->string('balcony');
            $table->string('internet');
            $table->string('cable');
            $table->string('pool');
            $table->string('parking');
            $table->string('dishwasher');
            $table->string('bar');

            $table->string('floor_plan');
            $table->string('video');
            $table->string('iframe');
            $table->string('featured_image');

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
        Schema::dropIfExists('properties');
    }
};
