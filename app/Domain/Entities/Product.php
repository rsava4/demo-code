<?php
namespace App\Domain\Entities;

use App\Domain\Entities\Money;

final class Product{
	private $id;
	public $name;
	public $price;
	/**
	 * Summary of __construct
	 * @param int $id
	 * @param string $name
	 * @param Money $price
	 */
	public function __construct(int $id, string $name, Money $price)
	{
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}
}