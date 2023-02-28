<?php
declare(strict_types=1);

namespace UnitConvert;

class Length
{
	private float $m;

	/**
	 * From meters (m)
	 */
	public static function from_m(float $m): self
	{
		return new static ($m);
	}

	/**
	 * From kilometers (km)
	 */
	public static function from_km(float $km): self
	{
		return new static ($km * 1000);
	}

	public function __construct(float $m)
	{
		$this->m = $m;
	}

	/**
	 * To meters (m)
	 */
	public function to_m(): float
	{
		return $this->m;
	}

	/**
	 * To kilometers (km)
	 */
	public function to_km(): float
	{
		return $this->m / 1000;
	}

	/**
	 * To inches (")
	 */
	public function to_inch(): float
	{
		return $this->m * 39.37007874;
	}

	/**
	 * To feet (ft)
	 */
	public function to_ft(): float
	{
		return $this->m * 3.280839895;
	}

	/**
	 * To miles (mi)
	 */
	public function to_mi(): float
	{
		return $this->m * 0.000621371192;
	}
}
