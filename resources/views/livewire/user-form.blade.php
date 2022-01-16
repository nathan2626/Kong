<div>
    <form action="" wire:submit.prevent="save">
        <div wire:loading>Chargement</div>
        <div class="field">
            <label for="name" class="label">Name</label>
            <div class="control">
                <input type="text" name="" id="" wire:model.defer="user.name" class="input">
            </div>
            @error('user.name')
                <span class="help is-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="buttons">
            <button class="button is-primary" type="submit">Sauvegarder</button>
        </div>
    </form>
    <form action="" wire:submit.prevent="save">
        <div wire:loading>Chargement</div>
        <div class="field">
            <label for="email" class="label">Email</label>
            <div class="control">
                <input type="text" name="" id="" wire:model.defer="user.email" class="input">
            </div>
            @error('user.email')
                <span class="help is-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="buttons">
            <button class="button is-primary" type="submit">Sauvegarder</button>
        </div>
    </form>
</div>
