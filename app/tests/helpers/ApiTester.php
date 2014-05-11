<?php

use Faker\Factory as Faker;

abstract class ApiTester extends TestCase {

    /**
     * @var Faker
     */
    protected $fake;

    /**
     * Initialise
     */
    public function __construct()
    {
        $this->fake = Faker::create();
    }

    /**
     * Set up datebase for each test
     */
    public function setup()
    {
        parent::setup();

        Artisan::call('migrate');
    }

    /**
     * Get JSON output from API
     * 
     * @param $uri
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    protected function getJson($uri, $method = 'GET', $parameters = [])
    {
        return json_decode($this->call($method, $uri, $parameters)->getContent());
    }

    /**
     * 
     */
    protected function assertObjectHasAttributes()
    {
        $args = func_get_args();
        $object = array_shift($args);

        foreach ($args as $attribute)
        {
            $this->assertObjectHasAttribute($attribute, $object);
        }
    }
}