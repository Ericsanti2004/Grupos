<div class="my-4 d-flex justify-content-center flex-column align-items-center">
    <div class="border border-2 mb-5 p-3">
        <h2 class="text-center">
            {{ $contador }}
        </h2>
    </div>
    <div class="mb-3">
        
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:click='incremento'>

      </div>
    
    <button class="btn btn-lg btn-primary mb-3" wire:click='incremento'>+</button>
    <button class="btn btn-lg btn-info" wire:click='reinicio'>Reiniciar cuenta</button>
</div>
