<?php
defined('_JEXEC') or die('Restricted acccess');

/**
 * Script file of HeartCare component
 */
class Com_HeartcareInstallerScript
{
	/**
	 * method to install the component
	 * create devices folder
	 * @return void
	 */
	function install($parent)
	{
		$path = JPATH_SITE . '/images/devices';

		if (!JFolder::exists($path)) {
			JFolder::create($path, 0777);
		}
	}
}