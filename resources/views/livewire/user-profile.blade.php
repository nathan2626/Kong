<div>

    {{-- <div class="bg-white p-3 shadow-sm rounded-sm">
        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
        <span clas="text-green-500">
            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </span>
            <span class="tracking-wide">About</span>
        </div>
        <div class="text-gray-700">
            <div class="grid md:grid-cols-2 text-sm">
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Nom</div>
                    <div class="px-4 py-2">{{ $user->name }}</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">ID</div>
                    <div class="px-4 py-2">{{ $user->id }}</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Email</div>
                    <div class="px-4 py-2">
                        <a class="text-blue-800" href="mailto:jane@example.com">{{ $user->email }}</a>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Membre depuis</div>
                    <div class="px-4 py-2">{{ $user->created_at->diffForHumans() }}</div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="my-4">
        <button class="button" wire:click="startEdit({{ $user->id }})">Editer</button>
    
        @if ($editId === $user->id)
            <livewire:user-form :user="$user" :key="$user->id"/>
        @endif
    </div>
</div>
