<?php

namespace project\BuzzFizz;

class BuzzFizz
{
	public array $result = [];	

	public function __construct($range = null)
	{
		if (!empty($range)) {
			foreach ($range as $num) {
				if ((($num % 3) == 0 && ($num % 5) != 0) && ($num > 0)) {
					$this->result[] = "Buzz";
				} elseif ((($num % 5) == 0 && ($num % 3) != 0) && ($num > 0)) {
					$this->result[] = "Fizz";
				} elseif((($num % 5) == 0 && ($num % 3) == 0) && ($num > 0)) {
					$this->result[] = "BuzzFizz";
				} else {
					$this->result[] = $num;
				}
				
			}
		}
	}
}