<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UrlShortened extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('url_shortened', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url')->unique()->comment('完整的URL链接');
			$table->string('shortened', 5)->comment('缩短后的代码，不包含域名');
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
		Schema::drop('url_shortened');
	}

}
