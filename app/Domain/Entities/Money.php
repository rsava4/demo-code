<?php
namespace App\Domain\Entities;

final class Money{
	private $amount;
	/**
	 * Summary of currency
	 * @var string
	 */
	private $currency;
	/**
	 * Summary of __construct
	 * @param mixed $amount
	 * @param mixed $currency
	 */
	public function __construct(float $amount, string $currency)
	{
		$this->$amount = $amount;
		$this->currency = $currency;
	}
}