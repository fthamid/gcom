
    <div>
        <h1>Hello World  <?php echo e($name); ?></h1>
        <button wire:click="$refresh">Refresh</button> <?php echo e(now()); ?>

        <button wire:click="refreshChildren">Refresh Children</button> <?php echo e(now()); ?>

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('say-hi', ['client'=>$client]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3191247453-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        
    
    </div>

<?php /**PATH /home/hamid/gcom/resources/views/livewire/hello-world.blade.php ENDPATH**/ ?>