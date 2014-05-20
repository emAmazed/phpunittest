<?php
class Currency
{
	private static $currencies = array (
		'AMD' => array(
			'display_name' => 'Armenian Dram',
			'numeric_code' => 51,
			'default_fraction_digits' =>2,
			'sub_unit' => 100
			)
		);

	private $currencyCode;

	public function __construct($currencyCode)
	{
		if (!isset(self::$currencies[$currencyCode])) {
		   throw new InvalidArgumentException(
			'$currencyCode must be an ISO 4217 currency code'
			);
			}
		$this->currencyCode = $currencyCode;
	}

	public function getCurrencyCode()
	{
		return self::$currencies[$this->currencyCode]['default_fraction_digits'];
	}

	public function __toString()
	{
		return $this->currencyCode;
	}


}
?>
