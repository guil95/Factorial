<?php
class Math{
		
	public static function factorial(int $number): array
	{
		if($number > 20){
			throw new InvalidArgumentException('Value must be less than 20');
		}
		
		return self::generateFactorial($number, [
			'numbers' => null,
			'total' => 1
		]);		
	}
  
	private static function generateFactorial(int $number, array $factorial): array
	{
		if($number <= 1){
			$factorial['numbers'] .= '1';
			return $factorial;
		}
		
		$factorial['numbers'] .= $number. ' x ';
		$factorial['total'] *= $number;
		
		return self::generateFactorial($number - 1, $factorial);
	}
}
print_r(Math::factorial(20));
