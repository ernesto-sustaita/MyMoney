<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('quantity');

            $table->unsignedBigInteger('account_id');

            $table->foreign('account_id')
                ->references('id')
                ->on('accounts');

            $table->unsignedBigInteger('budget_id');

            $table->foreign('budget_id')
                ->references('id')
                ->on('budgets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
