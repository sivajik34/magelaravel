<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id')->unsigned();
                        $table->integer('store_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
                        $table->string('name');
                        $table->string('sku');
                        $table->string('type_id');
                        $table->string('price');
                        $table->string('url');
                        $table->text('description');
			$table->string('meta_title');                       
			$table->text('meta_keywords');
		        $table->text('meta_description');
                        $table->string('special_price');
			$table->string('coupon');
                        $table->string('image');
			$table->string('thumbnail_image');
			$table->string('small_image');
                        $table->integer('qty');
                        $table->boolean('status');
		        $table->boolean('stock_status');
                        $table->tinyInteger('publish')->unsigned();
                        $table->tinyInteger('visibility')->unsigned();
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
		Schema::drop('items');
	}

}
