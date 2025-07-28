

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<div>
    <a href="#createModal" data-bs-toggle='modal' data-bs-target='#createModal'>
    <img src="<?php echo e(asset('images/gif/inserer.png')); ?>"    
    alt="Ajouter" title="Ajouter" width="30" height="30" 
    style="cursor: pointer; margin-right: 10px;">
    </a>
</div>
<div class="container">
<?php echo \Livewire\Livewire::mount($m_livewire); ?>

</div>

<table class="table table-striped">
    <caption>
        <?php echo e($title); ?> -
    </caption>
    <thead>
        <tr>
            <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th scope="col"><?php echo e($header); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <th scope="col" colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo e($row->$col); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td><a href="<?php echo e(route($m_edit, $row)); ?>">
            <img src="<?php echo e(asset('images/gif/edit.gif')); ?>" 
                    alt="Éditer" title="Éditer" width="20" height="20" style="cursor: pointer;">
            </a>
        </td>
        <td><a href="<?php echo e(route($m_show, $row)); ?>">
            <img src="<?php echo e(asset('images/gif/view.gif')); ?>" 
            alt="Visualiser" title="Visualiser" width="20" height="20" style="cursor: pointer;">
            </a>
        </td>
        <td>
            <a href="<?php echo e(route($m_destroy, $row)); ?>" 
                onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">
                <img src="<?php echo e(asset('images/gif/delete.gif')); ?>" 
                alt="Supprimer" title="Supprimer" width="20" height="20" style="cursor: pointer;">
            </a>
        </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    </tbody>
</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamid/gcom/resources/views/layouts/listing.blade.php ENDPATH**/ ?>