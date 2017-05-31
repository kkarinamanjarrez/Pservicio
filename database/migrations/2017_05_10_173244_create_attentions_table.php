<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attentions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('cases_id')->unsigned();
            $table->integer('means_id')->unsigned();
            $table->integer('officials_id')->unsigned();

            $table->foreign('cases_id')
                ->references('id')
                ->on('cases');

            $table->foreign('means_id')
                ->references('id')
                ->on('means');

            $table->foreign('officials_id')
                ->references('id')
                ->on('officials');
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
        Schema::dropIfExists('attentions');
    }
}
