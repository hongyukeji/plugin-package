<?php

class VoidTest extends PHPUnit_Framework_TestCase
{
	public function testForge()
	{
		$this->assertInstanceOf('Hongyukeji\PluginPackage\Invalid', \Hongyukeji\PluginPackage\Invalid::forge());
	}
}