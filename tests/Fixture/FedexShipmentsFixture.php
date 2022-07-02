<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FedexShipmentsFixture
 */
class FedexShipmentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'tracking_id' => 1,
                'ship_date' => '2022-06-27',
                'ship_time' => '23:21:30',
                'arrival_date' => '2022-06-27',
                'arrival_time' => '23:21:30',
                'company' => 'Lorem ipsum dolor sit amet',
                'destination_address' => 'Lorem ipsum dolor sit amet',
                'destination_city' => 'Lorem ipsum dolor sit amet',
                'destination_zip' => 1,
                'contact_name' => 'Lorem ipsum dolor sit amet',
                'contact_name_phone' => 1,
                'contact_name_email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
