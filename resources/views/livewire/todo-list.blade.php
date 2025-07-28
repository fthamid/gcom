<div>
    <input type="text" wire:model="todo" placeholder="Todo..."> 
    <button x-on:click="$wire.todo = ''">Clear</button>
    Todo character length: <h2 x-text="$wire.todo.length"></h2>

 
    <button wire:click="add">Add Todo</button>
    <button wire:click="todoReset">Reset</button>
 
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
    <h4>Pull Todos </h4>
    <ul>
        @foreach ($pultodos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>