<?php

namespace TS\Web\UrlBuilder;


class InvalidUrlException extends \DomainException
{

	public function __construct($message = '')
	{
		parent::__construct($message);
	}

}

