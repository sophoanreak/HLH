<?php
//password = 12341;
//passafeadfasdfeadf = 999;
class hash{
	public static function make($string, $salt = ""){
		return hash('sha256', $string . $salt);
	}

	public static function salt($lenght){
		return mcrypt_create_iv($lenght);

	}

	public static function unique(){
		return self::make(uniqid());
	}
}