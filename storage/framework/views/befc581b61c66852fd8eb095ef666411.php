 
<!DOCTYPE html> 
<html lang="fr-FR">
<head>
    <title>Unimtatel GCOM</title>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php $__env->startSection('head'); ?>
        <?php echo $__env->make('includes.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
</head>

<body>
   
    <header>
        <?php $__env->startSection('header'); ?>
            <?php echo $__env->make('includes.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
        <?php echo $__env->yieldSection(); ?>
    </header>
    
    <div class="container.container-fluid" style="display:flex; flex-direction:column; height:100vh;">
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
   
    <footer>
        <?php $__env->startSection('footer'); ?>
            <?php echo $__env->make('includes.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldSection(); ?>
    </footer>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH /home/hamid/gcom/resources/views/layouts/main.blade.php ENDPATH**/ ?>