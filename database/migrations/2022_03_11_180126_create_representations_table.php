<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('show_id');
            $table->unsignedBigInteger('location_id');

            $table->index('show_id');
            $table->index('location_id');
            $table->datetime('when');
            
            $table->foreign('show_id')->references('id')
                ->on('shows')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            $table->foreign('location_id')->references('id')
                ->on('locations')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representations');
    }
}
