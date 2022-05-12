<?php

namespace customer;

use MyApp\customer\Customer;
use PHPUnit\Framework\TestCase;

/** @test */
class CustomerTest extends TestCase
{
    /**
     * @dataProvider getNameDataProvider
     * @return void
     */
    public function testGetName($params, $expected)
    {
        $customer = new Customer();
        $customer->setName($params);
        $result = $customer->getName();

        $this->assertEquals($expected, $result);
    }
    public function getNameDataProvider(): array
    {
        return array(
            array ("nick", "nick"),
            array ("mike", "mike"),
        );
    }

    /**
     * @dataProvider getAgeDataProvider
     * @return void
     */
    public function testGetAge($params, $expected)
    {
        $customer = new Customer();
        $customer->setAge($params);
        $result = $customer->getAge();

        $this->assertEquals($expected, $result);
    }
    public function getAgeDataProvider(): array
    {
        return array(
            array ("15", "15"),
            array ("40", "40"),
        );
    }

    /**
     * @dataProvider getAddressDataProvider
     * @return void
     */
    public function testGetAddress($params, $expected)
    {
        $customer = new Customer();
        $customer->setAddress($params);
        $result = $customer->getAddress();

        $this->assertEquals($expected, $result);
    }
    public function getAddressDataProvider(): array
    {
        return array(
            array ("Lam Dong province", "Lam Dong province"),
            array ("Ho Chi Minh city", "Ho Chi Minh city"),
        );
    }
}
