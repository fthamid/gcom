


 
<?php echo $__env->make('layouts.listing',
[   'title'     => 'Liste des clients',
    'headers'   => ['Nom', 'Email', 'Téléphone', 'Adresse'],
    'fields'    => ['nom', 'email', 'telephone', 'adresse'],
    'table'     => $clients,  
    'm_create'  => 'clients.create' ,
    'm_edit'    => 'clients.edit' , 
    'm_show'    => 'clients.show',
    'm_destroy' => 'clients.destroy',
    'm_livewire' => 'cr-test'
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamid/gcom/resources/views/clients/index.blade.php ENDPATH**/ ?>