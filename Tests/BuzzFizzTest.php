<?php 
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Project\BuzzFizz\BuzzFizz;

final class BuzzFizzTest extends TestCase
{
	/** 
	 * Verify instance of class
	*/
	public function testInstance()
	{
		$buzzFizz = new BuzzFizz();
		$this->assertInstanceOf('project\BuzzFizz\BuzzFizz', $buzzFizz);
	}

	/**
	 * Verify first cenario
	 * This test validates the sending of numbers not divisible by 3 or 5 and expects to receive the same values ​​in the return;
	 */
	public function testFirstCenario()
	{
		$given = [0, 1];
		$expected = [0, 1];

		$buzzFizz = new BuzzFizz($given);
		$result = $buzzFizz->result;

		$this->assertEquals($expected, $result);
	}

	/**
	 * Verify second cenario
	 * This test validates the sending of numbers not divisible by 3 or 5 and numbers divisible by 3 it expects to receive the number that are not divisible by 3 or 5 and Buzz in cases divisible by 3;
	 */
	public function testSecondCenario()
	{
		$given = [0, 1, 3];
		$expected = [0, 1, "Buzz"];

		$buzzFizz = new BuzzFizz($given);
		$result = $buzzFizz->result;
		

		$this->assertEquals($expected, $result);
	}

	/**
	 * Verify third cenario
	 * This test validates the sending of numbers not divisible by 3 or 5, numbers divisible by 3 and numbers divisible by 5 it expects to receive the number that are not divisible by 3 or 5, Buzz in cases divisible by 3 and Fizz in numbers divisible by 5;
	 */
	public function testThirdCenario()
	{
		$given = [0, 1, 3, 5];
		$expected = [0, 1, "Buzz", "Fizz"];

		$buzzFizz = new BuzzFizz($given);
		$result = $buzzFizz->result;
		

		$this->assertEquals($expected, $result);
	}

	/**
	 * Verify fourth cenario
	 * This test validates the sending of numbers: 
	 * Not divisible by 3 or 5, numbers divisible by 3, numbers divisible by 5 and numbers divisible by 3 and 5; 
	 * It expects to receive:
	 * The number that are not divisible by 3 or 5, Buzz in cases divisible by 3, Fizz in numbers divisible by 5 and BuzzFizz in cases divisible by 3 and 5;
	 */
	public function testFourthCenario()
	{
		$given = [0, 1, 3, 5, 15];
		$expected = [0, 1, "Buzz", "Fizz", "BuzzFizz"];

		$buzzFizz = new BuzzFizz($given);
		$result = $buzzFizz->result;
		

		$this->assertEquals($expected, $result);
	}
}