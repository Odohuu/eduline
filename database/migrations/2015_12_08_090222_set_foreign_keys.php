<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function(Blueprint $table){
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('countries_user_id_foreign');
        });
	}

}
