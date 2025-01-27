<?php
/**
 * Created by PhpStorm.
 * User: Galek
 * Date: 9.3.2018
 */
declare(strict_types = 1);

namespace Galek\Utils\Calendar\Enum;


class Localization
{
	const CZ = 'cs',
		  SK = 'sk',
		  PL = 'en',
		  EN = 'en',
		  DE = 'en',
		  RO = 'ro',
		  HU = 'hu';

	public static $list = [
		self::CZ,
		self::SK,
		self::PL,
		self::EN,
		self::DE,
		self::RO,
		self::HU,
	];
}
