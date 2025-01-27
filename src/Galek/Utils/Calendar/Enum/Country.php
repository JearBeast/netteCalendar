<?php
/**
 * Created by PhpStorm.
 * User: Galek
 * Date: 9.3.2018
 */
declare(strict_types = 1);

namespace Galek\Utils\Calendar\Enum;


class Country
{
	const CZ = 'CzechRepublic',
		  SK = 'Slovakia',
		  PL = 'Poland',
		  DE = 'Germany',
		  AT = 'Austria',
		  RO = 'Romania',
		  HU = 'Hungary';

	public static $list = [
		self::CZ,
		self::SK,
		self::PL,
		self::DE,
		self::AT,
		self::RO,
		self::HU,
	];
}
