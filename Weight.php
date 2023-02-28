<?php
declare(strict_types=1);

namespace UnitConvert;

class Weight
{
	private float $kg;

	/**
	 * From kilograms (kg)
	 */
	public static function from_kg(float $kg): self
	{
		return new static ($kg);
	}

	/**
	 * From grams (g)
	 */
	public static function from_g(float $g): self
	{
		return new static ($g / 1000);
	}

	public function __construct(float $kg)
	{
		$this->kg = $kg;
	}

	/**
	 * To kilograms (kg)
	 */
	public function to_kg(): float
	{
		return $this->kg;
	}

	/**
	 * To grams (g)
	 */
	public function to_g(): float
	{
		return $this->kg / 1000;
	}

	/**
	 * To pounds (lb)
	 */
	public function to_lb(): float
	{
		return $this->kg * 2.204623;
	}

	/**
	 * To stones (st)
	 */
	public function to_st(): float
	{
		return $this->kg * 0.157473;
	}

	/**
	 * To ounces (oz)
	 */
	public function to_oz(): float
	{
		return $this->kg * 35.27396;
	}
}
