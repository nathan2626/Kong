<div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
    @foreach ($posts as $post)

    <livewire:post :post="$post" :key="$post->id"/>

    
    @endforeach
</div>