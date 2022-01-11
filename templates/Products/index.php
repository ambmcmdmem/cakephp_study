<table class="table">
    <thead>
        <tr>
            <th scope="col"><?= __('商品ID'); ?></th>
            <th scope="col"><?= __('商品名'); ?></th>
            <th scope="col"><?= __('価格'); ?></th>
            <th scope="col"><?= __('更新日'); ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($products as $product): ?>
        <tr>
            <td><?= h($product->product_code); ?></td>
            <td><?= h($product->name); ?></td>
            <td><?= number_format(h($product->price)); ?></td>
            <td><?= date('Y年m月d日', strtotime(h($product->modified))); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>