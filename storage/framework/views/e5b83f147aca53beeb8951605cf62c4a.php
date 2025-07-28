

<?php $__env->startSection('content'); ?>
<h1>Éditer le client</h1>
<form method="POST" action="<?php echo e(route('clients.update', $client)); ?>">  
  <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" name="nom" placeholder="Nom du client" value="<?php echo e($client->nom); ?>"/>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e($client->email); ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="telephone">Téléphone</label>
    <input type="text" class="form-control" name="telephone" placeholder="Téléphone" value="<?php echo e($client->telephone); ?>">
  </div>
  <div class="form-group">
    <label for="adresse">Addresse</label>
    <textarea name="adresse" id="adresse" class="form-control" placeholder="Adresse du client"  rows="3" cols="50"><?php echo e($client->adresse); ?></textarea>
  </div>
  
  <button type="submit" class="btn btn-warning">Mettre à jour</button>
    <a href="<?php echo e(route('clients.index')); ?>">Retour</a>
    <a href="<?php echo e(route('clients.show', $client->id)); ?>">Visualiser</a>
    <a href="<?php echo e(route('clients.destroy', $client->id)); ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce client ?')">Supprimer</a>  
    <a href="<?php echo e(route('clients.create')); ?>">Créer un client</a>
</form>

<!--
<form method="POST" action="<?php echo e(route('clients.update', $client)); ?>">
    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
    <label>Nom:</label><input type="text" name="nom" value="<?php echo e($client->nom); ?>"><br>
    <label>Email:</label><input type="email" name="email" value="<?php echo e($client->email); ?>"><br>
    <label>Téléphone:</label><input type="text" name="telephone" value="<?php echo e($client->telephone); ?>"><br>  
    <label>Adresse:</label><input type="text" name="adresse" value="<?php echo e($client->adresse); ?>"><br>    
    <button type="submit">Mettre à jour</button>
    <a href="<?php echo e(route('clients.index')); ?>">Retour</a>
    <a href="<?php echo e(route('clients.show', $client->id)); ?>">Visualiser</a>
    <a href="<?php echo e(route('clients.destroy', $client->id)); ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce client ?')">Supprimer</a>  
    <a href="<?php echo e(route('clients.create')); ?>">Créer un client</a>
</form>
-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamid/gcom/resources/views/clients/edit.blade.php ENDPATH**/ ?>