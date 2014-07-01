<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStringleysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stringleys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tag', 32);
			$table->string('name', 64);
			$table->integer('category')->default(1);
			$table->text('content');
			$table->timestamps();

			$table->unique('tag');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if (Schema::hasTable('stringleys'))
		{
			Schema::drop('stringleys');
		}
	}

}
