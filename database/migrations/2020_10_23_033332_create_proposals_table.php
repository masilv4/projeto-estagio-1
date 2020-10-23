<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['created', 'sended', 'approved', 'rejected', 'canceled'])
                ->default('created');
            $table->text('notes');
            $table->decimal('price', 6, 2);
            $table->integer('discount');
            $table->integer('validity');

            $table->unsignedBigInteger('garage_id');
            $table->foreign('garage_id')
                ->references('id')
                ->on('garages')
                ->onDelete('cascade');
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
        Schema::dropIfExists('proposals');
    }
}
