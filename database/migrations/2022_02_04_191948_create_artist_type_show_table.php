<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistTypeShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_type_show', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artist_type_id');
            $table->unsignedBigInteger('show_id');

            $table->index('artist_type_id');
            $table->index('show_id');

            $table->foreign('artist_type_id')->references('id')
                ->on('artist_type')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            $table->foreign('show_id')->references('id')
                ->on('shows')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_type_show');
    }
}
