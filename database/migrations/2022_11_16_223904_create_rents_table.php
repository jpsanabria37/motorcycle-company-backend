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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->dateTime("start_date");
            $table->dateTime("finish_date");
            $table->dateTime("rental_date");
            $table->integer("price");
            $table->string("payment_status");
            $table->string("state");
            $table->foreignId('motorcycle_id')
                ->constrained('motorcycles')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('agency_id')
                ->constrained('agencies')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('client_id')
                ->constrained('clients')
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
        Schema::dropIfExists('rents');
    }
};
