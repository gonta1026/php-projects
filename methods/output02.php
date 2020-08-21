<?php

interface iFilter
{
	public function addWhereCondition(): array;
}


class nameFilter implements iFilter
{
	private $value;
	public function __construct(string $value)
	{
		$this->value = $value;
	}
	public function addWhereCondition(): array
	{
		return ['NAME', '=', $this->$value];
	}
}


class FilterFactory
{
	public function build($key, $value): ?iFilter
	{
		$filter = null;
		switch ($key) {
			case 'NAME':
				$filter = new nameFilter($value);
			case 'MONTH':
				$filter = new monthFilter($value);
			case 'SOMETHING':
				$filter = new somethingFilter($value);
			default:
				$filter = null;
		}
		return $filter;
	}
}
