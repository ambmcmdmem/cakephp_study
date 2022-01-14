<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductLedger[]|\Cake\Collection\CollectionInterface $productLedgers
 */
?>
<?= $this->Html->link(__('払い出し新規登録'), 
    ['action' => 'add'],
    ['class' => 'btn btn-primary']
); ?>
<table>
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('product_code') ?></th>
            <th><?= $this->Paginator->sort('in_out') ?></th>
            <th><?= $this->Paginator->sort('quantity') ?></th>
            <th><?= $this->Paginator->sort('amount') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productLedgers as $productLedger): ?>
        <tr>
            <td><?= date('Y年m月d日', strtotime(h($productLedger->date))); ?></td>
            <td><?= h($productLedger->product_code) ?></td>
            <td><?= h($productLedger->in_out) ?></td>
            <td><?= $this->Number->format($productLedger->quantity) ?></td>
            <td><?= $this->Number->format($productLedger->amount) ?></td>
            <td><?= h($productLedger->created) ?></td>
            <td><?= h($productLedger->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $productLedger->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productLedger->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productLedger->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productLedger->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>