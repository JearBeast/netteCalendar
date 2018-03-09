<?php
/**
 * Created by PhpStorm.
 * User: Galek
 * Date: 9.3.2018
 */
declare(strict_types=1);

namespace Galek\Utils\Calendar\Validators;

use Galek\Utils\Calendar\Enum\Country;


class CountryValidator implements IValidator
{
	public static function validate($value): bool
	{
		return \in_array($value, Country::$list, false);
	}

}
