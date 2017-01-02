<?php 

/**
 * Class with method for checking if first letter of passed string is uppercase A-Z
 * @author Bayode Aderinola
 */
class CheckFirstLetter {
	
	/**
	 * Determines if the string starts with uppercase letter A-Z or not
	 * @param string $word string to check
	 * @return boolean true if first letter is uppercase A-Z, false otherwise
	 */
	static function firstLetterIsUpperCaseAZ($word = null) {
		// First things first...was a string entered?
		if (!is_string($word)) {
			$type = gettype($word);
			throw new InvalidArgumentException("Bad argument: string expected, $type supplied.");				
		}
		
		// Now check the first character of the string, based on current locale...
		// ...checking $word as boolean to ensure empty string returns false as it should 
		return ($word && ctype_upper($word[0])); 
	}	
	
}


?>