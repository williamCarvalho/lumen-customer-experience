<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->smallInteger('note');
            $table->unsignedBigInteger('id_transaction');
            $table->timestamps();
        });

        Schema::table('evaluation', function (Blueprint $table) {
            $table->foreign('id_transaction')->references('id')->on('transaction')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluation', function (Blueprint $table) {
            $table->dropForeign('evaluation_id_transaction_foreign');
            $table->dropIndex('evaluation_id_transaction_index');
            $table->dropColumn('id_transaction');
            $table->drop('evaluation');
        });
    }
}
