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
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string("registration_number")->unique();
            $table->string("chassis_number")->unique();
            $table->string("color");
            $table->string("model");
            $table->string("brand");
            $table->dateTime("date_of_entry");
            $table->string("state");
            $table->dateTime("departure_date")->nullable();
            $table->foreignId('garage_id')
                ->constrained('garages')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('agency_id')
                ->constrained('agencies')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('motorcycles');
    }
};
