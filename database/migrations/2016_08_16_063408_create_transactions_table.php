<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cost', 5, 2);
            $table->string('title');
            $table->date('transaction_date');

            $table->integer('category_id')->unsigned();
            $table->integer('account_id')->unsigned();
            
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('account_id')->references('id')->on('accounts');
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
        //
    }
}
