<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FedexShipment $fedexShipment
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fedexShipment->tracking_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fedexShipment->tracking_id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Fedex Shipments'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="fedexShipments form content">
    <?= $this->Form->create($fedexShipment) ?>
    <fieldset>
        <legend><?= __('Edit Fedex Shipment') ?></legend>
        <?php
            echo $this->Form->control('ship_date');
            echo $this->Form->control('ship_time');
            echo $this->Form->control('arrival_date');
            echo $this->Form->control('arrival_time');
            echo $this->Form->control('company');
            echo $this->Form->control('destination_address');
            echo $this->Form->control('destination_city');
            echo $this->Form->control('destination_zip');
            echo $this->Form->control('contact_name');
            echo $this->Form->control('contact_name_phone');
            echo $this->Form->control('contact_name_email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
