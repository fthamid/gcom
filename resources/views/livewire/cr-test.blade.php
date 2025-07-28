
<div class="container">  
<div class='modal fade' id='createModal' tabindex='-1' aria-labelledby='createModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='createModalLabel'>Nouveau Client</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <form wire:submit="saveIt"> 
      @csrf
      <div class='modal-body'>
        <p>.</p>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" wire:model="nom"  name="nom" placeholder="Nom du client" value ="{{old('nom')}}">
            @if($errors->has('nom'))
                <span>{{ $errors->first('nom') }}</span>
            @endif
            </div>
            <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" wire:model="email"  name="email" placeholder="Email" value="{{old('email')}}">
            @if($errors->has('email'))
                <span>{{ $errors->first('email') }}</span>
            @endif
            </div>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" wire:model="telephone" name="telephone" placeholder="Téléphone" value ="{{old('telephone')}}">
            @if($errors->has('telephone'))
                <span>{{ $errors->first('telephone') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="adresse">Addresse</label>
            <input type="text" class="form-control" wire:model="adresse" name="adresse" placeholder="Rue ou Avenu NR " value ="{{old('adresse')}}">
            @if($errors->has('adresse'))
                <span>{{ $errors->first('adresse') }}</span>
            @endif
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


