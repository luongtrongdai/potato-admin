<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batches', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->timestamp('date_receipt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('total_product')->default(0);
            $table->integer('total_price')->default(0);
            $table->integer('shipper_id')->unsigned();
			$table->timestamps();

            $table->foreign('shipper_id')
                ->references('id')->on('shippers')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batches');
	}

}
