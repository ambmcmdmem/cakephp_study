<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductLedger $productLedger
 */
?>
<?= $this->Form->create($productLedger) ?>
<fieldset>
    <legend><?= __('Add Product Ledger') ?></legend>
    <?php
        echo $this->Form->control('date', [
            'class' => 'form-control',
            'label' => __('取引日')
        ]);
        echo $this->Form->control('product_code', [
            'options' => $products
        ]);
        echo $this->Form->control('in_out');
        echo $this->Form->control('quantity');
        echo $this->Form->control('amount');
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>