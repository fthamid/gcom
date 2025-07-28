<div>
    <input type="text" wire:model="todo" placeholder="Todo..."> 
    <button x-on:click="$wire.todo = ''">Clear</button>
    Todo character length: <h2 x-text="$wire.todo.length"></h2>

 
    <button wire:click="add">Add Todo</button>
    <button wire:click="todoReset">Reset</button>
 
    <ul>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($todo); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </ul>
    <h4>Pull Todos </h4>
    <ul>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pultodos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($todo); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </ul>
</div><?php /**PATH /home/hamid/gcom/resources/views/livewire/todo-list.blade.php ENDPATH**/ ?>