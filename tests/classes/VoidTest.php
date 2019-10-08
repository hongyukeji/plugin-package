<?php

class VoidTest extends PHPUnit_Framework_TestCase
{
	public function testForge()
	{
		$this->assertInstanceOf('Hongyukeji\Package\Void', \Hongyukeji\Package\Void::forge());
	}
}