<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FedexShipment $fedexShipment
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Fedex Shipment'), ['action' => 'edit', $fedexShipment->tracking_id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Fedex Shipment'), ['action' => 'delete', $fedexShipment->tracking_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fedexShipment->tracking_id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Fedex Shipments'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Fedex Shipment'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="fedexShipments view large-9 medium-8 columns content">
    <h3><?= h($fedexShipment->tracking_id) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Company') ?></th>
                <td><?= h($fedexShipment->company) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Destination Address') ?></th>
                <td><?= h($fedexShipment->destination_address) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Destination City') ?></th>
                <td><?= h($fedexShipment->destination_city) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Contact Name') ?></th>
                <td><?= h($fedexShipment->contact_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Contact Name Email') ?></th>
                <td><?= h($fedexShipment->contact_name_email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tracking Id') ?></th>
                <td><?= $this->Number->format($fedexShipment->tracking_id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Destination Zip') ?></th>
                <td><?= $this->Number->format($fedexShipment->destination_zip) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Contact Name Phone') ?></th>
                <td><?= $this->Number->format($fedexShipment->contact_name_phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ship Date') ?></th>
                <td><?= h($fedexShipment->ship_date) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ship Time') ?></th>
                <td><?= h($fedexShipment->ship_time) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Arrival Date') ?></th>
                <td><?= h($fedexShipment->arrival_date) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Arrival Time') ?></th>
                <td><?= h($fedexShipment->arrival_time) ?></td>
            </tr>
        </table>
    </div>
</div>
