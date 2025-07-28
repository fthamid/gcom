
<div > 
    
    <h1>Say Hi</h1>
    <form action ='#' wire:submit.prevent="$set('name', 'submited_name')">
        <input type="text" wire:model.lazy="name">   
        <input type="checkbox" wire:model.live="loud">
        <select wire:model.live="greeting">
            <option value="Hello">Hello</option>
            <option value="Hi">Hi</option>
            <option value="Hey">Hey</option>
        </select>
        <label for="nom">Nom</label><input type="text" name='nom' wire:model.live="client.nom">    
        <button type="submit">Reset</button>
        <button wire:click="$refresh">Refresh</button> <?php echo e(now()); ?>

    </form>
    <h4><?php echo e($greeting); ?> <?php echo e($client['nom']); ?> <!--[if BLOCK]><![endif]--><?php if($loud): ?> !!!! <?php endif; ?><!--[if ENDBLOCK]><![endif]--></h4>
</div>
ls

<?php /**PATH /home/hamid/gcom/resources/views/livewire/say-hi.blade.php ENDPATH**/ ?>