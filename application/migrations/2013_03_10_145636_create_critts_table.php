<?php

class Create_Critts_Table {    

	public function up()
    {
		Schema::create('critts', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->text('critts');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('critts');

    }

}