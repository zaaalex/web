<?php

function getConfigurationOption(string $name, string $defaultValue = null)
{
	/**
	 * @var array $config ;
	 */
	static $config = null;

	if ($config === null)
	{
		require ROOT . "/config.php";
	}

	if (array_key_exists($name, $config))
	{
		return $config[$name];
	}

	if ($defaultValue !== null)
	{
		return $defaultValue;
	}

	throw new \RuntimeException("Configuration option $name not found!");
}