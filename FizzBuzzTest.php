<?hh
include "FizzBuzz.php";

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
	function testOneShouldReturnOne(): void {
		$object = new FizzBuzz(1);
		$this->assertEquals("1", $object->getResult());
	}
	function testThreeShouldReturnFizz(): void {
        	$object = new FizzBuzz(3);
		$this->assertEquals("Fizz", $object->getResult());
	}
}
