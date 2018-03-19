<?php
/**
 * Created by PhpStorm.
 * User: Galek
 * Date: 19.3.2018
 */
declare(strict_types=1);

namespace Galek\Utils\Calendar\Configuration;

use Galek\Utils\Calendar\Business\Shipper;


class Configurator
{
	private $group = [];

	/**
	 * @var Shippers[]
	 */
	private $shippers;

	/**
	 * @var Work[]
	 */
	private $work;

	public function __construct(array $configuration = [])
	{
		$this->startUp($configuration);
	}


	public function startUp(array $configuration): void
	{
		foreach ($configuration as $group => $conf) {
			$this->group[$group] = new Localization($conf['country']);
			$this->setShippers($group, $conf['shippers'], $this->group[$group]);
			$this->setWork($group, $conf['work'], $this->group[$group]);
		}
	}


	protected function setShippers(string $group, array $shippers, Localization $localization): void
	{
		$this->shippers[$group] = new Shippers($shippers, $localization);
	}


	public function getShipper(string $group, string $name): Shipper
	{
		return $this->shippers[$group]->getShipper($name);
	}


	protected function setWork(string $group, array $settings, Localization $localization): void
	{
		$this->work[$group] = new Work($settings, $localization);
	}


	public function getWork(string $group): Work
	{
		return $this->work[$group];
	}
}
