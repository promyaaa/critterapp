<?php

class Follower extends Eloquent
{

	public static $timestamps = false;
	
	public funtion users(){
		return $this->has_many_and_belongs_to('User');
	}

}

?>