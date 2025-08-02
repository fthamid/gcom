

<?php $__env->startSection('content'); ?>
<div class="container"> 
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
        <div class="col-md-4 ">
            <input type="text" class="form-control" wire:model.debounce.500ms="search" placeholder="Rechercher">
        </div>
        <div>
        <table class="table table-striped">
            <caption>
                <?php echo e($title); ?> -
            </caption>
            <thead>
                <tr>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th scope="col"><?php echo e($header); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($row->$col); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        
            </tbody>
            
        </table>
        <table class="table table-striped">
                <tr>
                    <td colspan="3">
                        <div class="row">
                            
                            <div class="col-md-4">
                                <select class="form-control" wire:model.live="perPage">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select wire:model="sortDirection">
                                    <option value="asc">Ascendant</option>
                                    <option value="desc">Descendant</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <select class="form-control" wire:model.live="sortBy">
                            <option value="nom">Nom</option>
                            <option value="email">Email</option>
                            <option value="telephone">Téléphone</option>
                            <option value="adresse">Adresse</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" wire:model.debounce.500ms="search" placeholder="Rechercher">
                    </td>
                    <td></td>
                    <td></td>
                    <td colspan="<?php echo e(count($headers) + 3); ?>">  <?php echo e($table->links()); ?>  </td>  
                </tr>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamid/gcom/resources/views/layouts/listing.blade.php ENDPATH**/ ?>