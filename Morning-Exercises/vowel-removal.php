<?php

	$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

	function removeVowels (&$vowels) {
		foreach ($vowels as $index => $vowel){
			if ($vowel == "a"|| $vowel == "e"|| $vowel == "i"|| $vowel == "o"|| $vowel == "u"){
				unset($vowels[$index]);
			}
		}
		return $vowels;
	}

	removeVowels($letters);
	print_r($letters);