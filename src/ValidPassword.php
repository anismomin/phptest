<?php 

class ValidPassword {

	const MIN_LENGTH = 6;
	const MAX_LENGTH = 20;


	public function validLength($password){
		$passLength = strlen($password);
		return $passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGTH;
	}


	public function validLength2($password){
		$passLength = strlen($password);
		return $passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGTH;
	}

	
}