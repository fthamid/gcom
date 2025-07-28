<?php $__env->startSection('title', 'Tests'); ?>


<?php $__env->startSection('content'); ?>

<h1>This is the TestPage</h1>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('produit-table', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-791571460-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamid/gcom/resources/views/pages/page.blade.php ENDPATH**/ ?>