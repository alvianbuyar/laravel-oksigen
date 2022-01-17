<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaselogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaselogs', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_number');
            $table->string('purchase_name');
            $table->string('purchase_address');
            $table->integer('purchase_callnumber');
            $table->string('purchase_payment')->nullable();
            $table->boolean('purchase_loan');
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
        Schema::dropIfExists('purchaselogs');
    }
}
