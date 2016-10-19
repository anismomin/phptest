<?php

class ValidatePassword extends PHPUnit_Framework_TestCase {

	public function testValidLength(){
		$valPass = new ValidPassword();
		$this->assertFalse($valPass->validLength('12345'));
	}
}