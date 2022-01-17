<div class="block p-4 bg-white border border-gray-100 shadow-sm rounded-xl">

  <a href="/user-info/{{ $post->user->id }}" class="text-xs font-medium text-gray-500">{{ $post->user->firstname }}</a>

 <h5 class="mt-1 text-xl font-bold text-gray-900">
     {{ mb_strimwidth($post->body, 0, 35, "..."); }}
 </h5>
 <dl class="flex items-center mt-4 space-x-8">
     <div class="flex items-center">
   <span class="p-2 text-white bg-green-600 rounded-full">
     <svg
         class="w-4 h-4"
         fill="currentColor"
         viewBox="0 0 20 20"
         xmlns="http://www.w3.org/2000/svg"
     >
       <path
           d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
       ></path>
     </svg>
   </span>

         <span
             class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
         >
     <dt>{{ $post->likes }} {{ $post->likes > 1 ? 'likes' : 'like' }}</dt>
     <dd class="sr-only">Employment type</dd>
   </span>
     </div>

     <div class="flex items-center">
   <span class="p-2 text-white bg-green-600 rounded-full">
     <svg
         class="w-4 h-4"
         fill="currentColor"
         viewBox="0 0 20 20"
         xmlns="http://www.w3.org/2000/svg"
     >
       <path
           d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
       ></path>
     </svg>
   </span>

         <span
             class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
            >
            {{-- <dt>{{ $post->comments > 1 ? 'comments' : 'comment' }}</dt>
            <dd class="order-first">{{ $post->comments }} </dd> --}}
              @foreach ($comments as $comment)
                <p>{{ $comment->body }}</p>
              @endforeach
        </span>
     </div>
                <div class="max-w-lg mx-auto text-center lg:text-left lg:pr-12">
                  <form method="post" class="mb-4" wire:submit.prevent="createComment">
                      @csrf
              
                      <div class="form-group">
                          <textarea name="comment" id="comment" cols="30" rows="3" class="form-control @error('comment') is-invalid @enderror" wire:model="comment"></textarea>
                          @error('comment')
                          <span class="invalid-feedback">{{ $message }}</span>
                          @enderror
                      </div>
                      <button type="submit"  class="bg-gray-100 hover:bg-blue-dark font-bold py-2 px-4 rounded">
                          Commenter
                      </button>
                  </form>
                </div>
 </dl>
</div>