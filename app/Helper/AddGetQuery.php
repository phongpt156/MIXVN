<?php

namespace App\Helper;

class AddGetQuery
{
	private $query;

	function __construct($query)
	{
		$this->query = $query->get();
	}

	function GetQuery()
	{
		return $this->query;
	}
}
