
<div class="container">  
<div class='modal fade' id='createModal' tabindex='-1' aria-labelledby='createModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='createModalLabel'>Nouveau Client</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <form wire:submit="saveIt"> 
      <?php echo csrf_field(); ?>
      <div class='modal-body'>
        <p>.</p>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" wire:model="nom"  name="nom" placeholder="Nom du client" value ="<?php echo e(old('nom')); ?>">
            <!--[if BLOCK]><![endif]--><?php if($errors->has('nom')): ?>
                <span><?php echo e($errors->first('nom')); ?></span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" wire:model="email"  name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
            <!--[if BLOCK]><![endif]--><?php if($errors->has('email')): ?>
                <span><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" wire:model="telephone" name="telephone" placeholder="Téléphone" value ="<?php echo e(old('telephone')); ?>">
            <!--[if BLOCK]><![endif]--><?php if($errors->has('telephone')): ?>
                <span><?php echo e($errors->first('telephone')); ?></span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div class="form-group">
            <label for="adresse">Addresse</label>
            <input type="text" class="form-control" wire:model="adresse" name="adresse" placeholder="Rue ou Avenu NR " value ="<?php echo e(old('adresse')); ?>">
            <!--[if BLOCK]><![endif]--><?php if($errors->has('adresse')): ?>
                <span><?php echo e($errors->first('adresse')); ?></span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>          
      </div>
      <div class='modal-footer'>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <span wire:loading>Enregistrement en cours.....</span> 
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fermer</button>
      </div>
    </div>
    </form>
  </div>

</div>
</div>


<?php /**PATH /home/hamid/gcom/resources/views/livewire/cr-test.blade.php ENDPATH**/ ?>