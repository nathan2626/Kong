{{--<link href="../../css/app.css" rel="stylesheet">--}}

<div class="max-w-lg mx-auto text-center lg:text-left lg:pr-12">
    <form method="post" class="mb-4" wire:submit.prevent="createPost">
        @csrf

        <div class="form-group border-indigo-400">
            <textarea name="body" id="body" cols="50" rows="5" class="form-control @error('body') is-invalid @enderror border-transparent focus:border-transparent focus:ring-0 focus:outline-none" wire:model="body"></textarea>
            @error('body')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"  class="bg-gray-100 hover:bg-blue-dark font-bold py-2 px-4 rounded">
            Envoyer
        </button>
    </form>
</div>


