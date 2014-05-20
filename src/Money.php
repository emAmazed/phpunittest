<?php
class Money
{
	private $amount;

	private $currency;

	public function __contruct($amount) //, Currency $currency)
	{
		$this->amount = $amount;
		//$this->currency = $currency
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function negate()
	{
		#		return $this->newMoney(-1 * $this->amount);
		return new Money(-1 * $this->amount);
	}

//	private function newMoney($amount)
//	{
//		return new static($amount, $this->currency);
//	}
}
