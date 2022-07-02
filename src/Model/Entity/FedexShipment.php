<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FedexShipment Entity
 *
 * @property int $tracking_id
 * @property \Cake\I18n\FrozenDate $ship_date
 * @property \Cake\I18n\Time $ship_time
 * @property \Cake\I18n\FrozenDate $arrival_date
 * @property \Cake\I18n\Time $arrival_time
 * @property string $company
 * @property string $destination_address
 * @property string $destination_city
 * @property int $destination_zip
 * @property string $contact_name
 * @property int $contact_name_phone
 * @property string $contact_name_email
 */
class FedexShipment extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'ship_date' => true,
        'ship_time' => true,
        'arrival_date' => true,
        'arrival_time' => true,
        'company' => true,
        'destination_address' => true,
        'destination_city' => true,
        'destination_zip' => true,
        'contact_name' => true,
        'contact_name_phone' => true,
        'contact_name_email' => true,
    ];
}
