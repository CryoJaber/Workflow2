<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FedexShipments Controller
 *
 * @property \App\Model\Table\FedexShipmentsTable $FedexShipments
 * @method \App\Model\Entity\FedexShipment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FedexShipmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $fedexShipments = $this->paginate($this->FedexShipments);

        $this->set(compact('fedexShipments'));
    }

    /**
     * View method
     *
     * @param string|null $id Fedex Shipment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fedexShipment = $this->FedexShipments->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('fedexShipment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fedexShipment = $this->FedexShipments->newEmptyEntity();
        if ($this->request->is('post')) {
            $fedexShipment = $this->FedexShipments->patchEntity($fedexShipment, $this->request->getData());
            if ($this->FedexShipments->save($fedexShipment)) {
                $this->Flash->success(__('The fedex shipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fedex shipment could not be saved. Please, try again.'));
        }
        $this->set(compact('fedexShipment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fedex Shipment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fedexShipment = $this->FedexShipments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fedexShipment = $this->FedexShipments->patchEntity($fedexShipment, $this->request->getData());
            if ($this->FedexShipments->save($fedexShipment)) {
                $this->Flash->success(__('The fedex shipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fedex shipment could not be saved. Please, try again.'));
        }
        $this->set(compact('fedexShipment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fedex Shipment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fedexShipment = $this->FedexShipments->get($id);
        if ($this->FedexShipments->delete($fedexShipment)) {
            $this->Flash->success(__('The fedex shipment has been deleted.'));
        } else {
            $this->Flash->error(__('The fedex shipment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
