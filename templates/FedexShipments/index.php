<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FedexShipment[]|\Cake\Collection\CollectionInterface $fedexShipments
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Fedex Shipment'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('tracking_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ship_date') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ship_time') ?></th>
        <th scope="col"><?= $this->Paginator->sort('arrival_date') ?></th>
        <th scope="col"><?= $this->Paginator->sort('arrival_time') ?></th>
        <th scope="col"><?= $this->Paginator->sort('company') ?></th>
        <th scope="col"><?= $this->Paginator->sort('destination_address') ?></th>
        <th scope="col"><?= $this->Paginator->sort('destination_city') ?></th>
        <th scope="col"><?= $this->Paginator->sort('destination_zip') ?></th>
        <th scope="col"><?= $this->Paginator->sort('contact_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('contact_name_phone') ?></th>
        <th scope="col"><?= $this->Paginator->sort('contact_name_email') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($fedexShipments as $fedexShipment) : ?>
        <tr>
            <td><?= $this->Number->format($fedexShipment->tracking_id) ?></td>
            <td><?= h($fedexShipment->ship_date) ?></td>
            <td><?= h($fedexShipment->ship_time) ?></td>
            <td><?= h($fedexShipment->arrival_date) ?></td>
            <td><?= h($fedexShipment->arrival_time) ?></td>
            <td><?= h($fedexShipment->company) ?></td>
            <td><?= h($fedexShipment->destination_address) ?></td>
            <td><?= h($fedexShipment->destination_city) ?></td>
            <td><?= $this->Number->format($fedexShipment->destination_zip) ?></td>
            <td><?= h($fedexShipment->contact_name) ?></td>
            <td><?= $this->Number->format($fedexShipment->contact_name_phone) ?></td>
            <td><?= h($fedexShipment->contact_name_email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $fedexShipment->tracking_id], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fedexShipment->tracking_id], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fedexShipment->tracking_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fedexShipment->tracking_id), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('«', ['label' => __('First')]) ?>
        <?= $this->Paginator->prev('‹', ['label' => __('Previous')]) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('›', ['label' => __('Next')]) ?>
        <?= $this->Paginator->last('»', ['label' => __('Last')]) ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
