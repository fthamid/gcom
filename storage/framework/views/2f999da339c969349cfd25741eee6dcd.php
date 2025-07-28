

<?php $__env->startSection('content'); ?>
<h1>Ajouter un produit</h1>
<!--
<form method="POST" action="<?php echo e(route('produits.store')); ?>">
    <?php echo csrf_field(); ?>
    <label>Nom:</label><input type="text" name="nom"><br>
    <label>Code:</label><input type="text" name="code"><br>
    <label>Prix de vente:</label><input type="number" step="0.01" name="prix_vente"><br>
    <label>Stock initial:</label><input type="number" name="stock"><br>
    <button type="submit">Créer</button>
</form>
-->
<form method="POST" action="<?php echo e(route('produits.store')); ?>">
    <?php echo csrf_field(); ?>
  <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nom" placeholder="Nom du produit">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="code" placeholder="Code produit">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="description" placeholder="Description">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Prix de Vente TTC</label>
    <div class="col-sm-10">
      <input type="number" step="0.01" class="form-control" name="prix_vente_ttc"  placeholder="Prix de vente">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Stock initial</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="stock"  placeholder="Stock initial">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
  </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamid/gcom/resources/views/produits/create.blade.php ENDPATH**/ ?>