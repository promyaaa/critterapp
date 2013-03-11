<?php

class User extends Eloquents
{

	public function critts(){
		return $this->has_many('Critt');
	}

	public function followers(){
		return $this->has_many_and_belongs_to('Follower');
	}

}

?>