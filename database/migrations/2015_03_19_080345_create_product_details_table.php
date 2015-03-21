<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_details', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('color')->default('');
            $table->string('size')->default('');
            $table->integer('quantity')->default(1);
            $table->integer('batches_id')->unsigned();
            $table->integer('stock_id')->unsigned();
			$table->timestamps();

            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');

            $table->foreign('batches_id')
                ->references('id')->on('batches')
                ->onDelete('cascade');

            $table->foreign('stock_id')
                ->references('id')->on('stocks')
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
		Schema::drop('product_details');
	}

}
