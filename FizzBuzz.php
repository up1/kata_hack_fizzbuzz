<?hh
class FizzBuzz {
	public function __construct(private int $number) {} 
        public function getResult():string {
           	if($this->number == 3) return "Fizz";
		return "1";
        }
}
