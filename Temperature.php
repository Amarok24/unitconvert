<?php
declare(strict_types=1);

namespace UnitConvert;

class Temperature
{
	private float $celsius;

	public static function from_celsius(float $celsius): self
	{
		return new static ($celsius);
	}

	public static function from_kelvin(float $k): self
	{
		// C = K - 273.15
		return new static ($k - 273.15);
	}

	public static function from_fahrenheit(float $f): self
	{
		// C = 5/9 * (F - 32)
		return new static (5 / 9 * ($f - 32));
	}

	public function __construct(float $celsius)
	{
		$this->celsius = $celsius;
	}

	public function to_celsius(): float
	{
		return $this->celsius;
	}

	public function to_fahrenheit(): float
	{
		// F = C * 9/5 + 32 = C * 1.8 + 32
		return $this->celsius * 1.8 + 32;
	}

	public function to_kelvin(): float
	{
		return $this->celsius + 273.15;
	}
}
