<?php 
use PHPUnit\Framework\TestCase;
include 'CheckFirstLetter.php';

/**
 * Class tests the methods in the CheckFirstLetter Class 
 * @author Bayode Aderinola
 */
class CheckFirstLetterTest extends TestCase {	
	
	function testNumberIsInvalidArgument(){
		$this->expectException(InvalidArgumentException::class);
		CheckFirstLetter::firstLetterIsUpperCaseAZ(123);			
	}
	
	function testBooleanIsInvalidArgument(){
		$this->expectException(InvalidArgumentException::class);
		CheckFirstLetter::firstLetterIsUpperCaseAZ(false);
		CheckFirstLetter::firstLetterIsUpperCaseAZ(true);		
	}
	
	function testNullOrMissingIsInvalidArgument(){
		$this->expectException(InvalidArgumentException::class);
		CheckFirstLetter::firstLetterIsUpperCaseAZ();		
	}
	
	function testSpaceIsNotAValidUpperCaseAZ(){
		$this->assertFalse(CheckFirstLetter::firstLetterIsUpperCaseAZ(" Lord"));
	}
	
	function testNumberIsNotAValidUpperCaseAZ(){
		$this->assertFalse(CheckFirstLetter::firstLetterIsUpperCaseAZ("1ETTER"));
	}
	
	function testBIsAValidUpperCaseAZ(){
		$this->assertTrue(CheckFirstLetter::firstLetterIsUpperCaseAZ("BozBie"));
	}
	
	function testSpecialCharIsNotAValidUpperCaseAZ(){
		$this->assertFalse(CheckFirstLetter::firstLetterIsUpperCaseAZ("@Gmail"));
	}
	
	function testEmptyIsNotAValidUpperCaseAZ(){
		$this->assertFalse(CheckFirstLetter::firstLetterIsUpperCaseAZ(""));
	}
}

?>