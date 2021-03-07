<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('value', 8, 2);
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_store');
            $table->unsignedBigInteger('id_collaborator');
            $table->timestamps();
        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->foreign('id_client')->references('id')->on('client')->onDelete('cascade');
            $table->foreign('id_store')->references('id')->on('store')->onDelete('cascade');
            $table->foreign('id_collaborator')->references('id')->on('collaborator')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->dropForeign('transaction_id_client_foreign');
            $table->dropIndex('transaction_id_client_index');
            $table->dropColumn('id_client');
            $table->dropForeign('transaction_id_store_foreign');
            $table->dropIndex('transaction_id_store_index');
            $table->dropColumn('id_store');
            $table->dropForeign('transaction_id_collaborator_foreign');
            $table->dropIndex('transaction_id_collaborator_index');
            $table->dropColumn('id_collaborator');
            $table->drop('transaction');
        });
    }
}
