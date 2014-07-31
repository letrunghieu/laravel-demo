<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/johndoe');

		$this->assertTrue($this->client->getResponse()->isOk());
		
		$this->assertCount(1, $crawler->filter('code:contains("active")'));
	}

}
