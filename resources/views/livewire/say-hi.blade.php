
<div > 
    {{-- Do your work, then step back. --}}
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
        <button wire:click="$refresh">Refresh</button> {{ now()}}
    </form>
    <h4>{{ $greeting }} {{ $client['nom'] }} @if($loud) !!!! @endif</h4>
</div>
ls

