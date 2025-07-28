
    <div>
        <h1>Hello World  {{ $name }}</h1>
        <button wire:click="$refresh">Refresh</button> {{ now()}}
        <button wire:click="refreshChildren">Refresh Children</button> {{ now()}}
        @foreach($clients as $client)
            @livewire('say-hi', ['client'=>$client])
            <br>
        @endforeach
        
    
    </div>

