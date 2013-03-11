<?php

class Create_Followers_Table {    

	public function up()
    {
		Schema::create('followers', function($table) {
			$table->integer('user_id');
			$table->integer('following_id');
			$table->primary(array('user_id', 'following_id'));
	});

    }    

	public function down()
    {
		Schema::drop('followers');

    }

}