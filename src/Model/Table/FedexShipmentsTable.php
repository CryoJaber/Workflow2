<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FedexShipments Model
 *
 * @method \App\Model\Entity\FedexShipment newEmptyEntity()
 * @method \App\Model\Entity\FedexShipment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FedexShipment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FedexShipment get($primaryKey, $options = [])
 * @method \App\Model\Entity\FedexShipment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FedexShipment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FedexShipment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FedexShipment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FedexShipment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FedexShipment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FedexShipment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FedexShipment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FedexShipment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FedexShipmentsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('fedex_shipments');
        $this->setDisplayField('tracking_id');
        $this->setPrimaryKey('tracking_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->date('ship_date')
            ->requirePresence('ship_date', 'create')
            ->notEmptyDate('ship_date');

        $validator
            ->time('ship_time')
            ->requirePresence('ship_time', 'create')
            ->notEmptyTime('ship_time');

        $validator
            ->date('arrival_date')
            ->requirePresence('arrival_date', 'create')
            ->notEmptyDate('arrival_date');

        $validator
            ->time('arrival_time')
            ->requirePresence('arrival_time', 'create')
            ->notEmptyTime('arrival_time');

        $validator
            ->scalar('company')
            ->maxLength('company', 50)
            ->requirePresence('company', 'create')
            ->notEmptyString('company');

        $validator
            ->scalar('destination_address')
            ->maxLength('destination_address', 50)
            ->requirePresence('destination_address', 'create')
            ->notEmptyString('destination_address');

        $validator
            ->scalar('destination_city')
            ->maxLength('destination_city', 50)
            ->requirePresence('destination_city', 'create')
            ->notEmptyString('destination_city');

        $validator
            ->integer('destination_zip')
            ->requirePresence('destination_zip', 'create')
            ->notEmptyString('destination_zip');

        $validator
            ->scalar('contact_name')
            ->maxLength('contact_name', 50)
            ->requirePresence('contact_name', 'create')
            ->notEmptyString('contact_name');

        $validator
            ->integer('contact_name_phone')
            ->requirePresence('contact_name_phone', 'create')
            ->notEmptyString('contact_name_phone');

        $validator
            ->scalar('contact_name_email')
            ->maxLength('contact_name_email', 50)
            ->requirePresence('contact_name_email', 'create')
            ->notEmptyString('contact_name_email');

        return $validator;
    }
}
