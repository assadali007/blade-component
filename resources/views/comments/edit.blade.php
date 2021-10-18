
<x-layout>
    <x-section>
        <x-from
        method="PATCH"
        action="/comments/{{ $comment->id }}"
        {{-- class="bg-red-600" --}}
        >

          <div class="mb-6">
              <label for="block mb-2 uppercase font-bold text-xs
               text-gray-700" for="body">
                  Body
              </label>
              <textarea class="border border-gray-400 p-2 w-full"
               name="body"
               id="body" cols="30" rows="10">{{ $comment->body }}</textarea>

               @error('body')
                <p class="text-red-500 text-sx mt-2">{{ $message }}</p>
               @enderror

          </div>

               <div class="mb-6">
                   <button type="submit" class="bg-blue-400 text-white
                   rounded py-2 px-4 hover:bg-blue-500">
                       Submit
                   </button>

               </div>
        </x-from>
        <x-form-button method="DELETE" action="/comments/{{ $comment->id }}"
            class="bg-blue-400 text-white
            rounded py-2 px-4 hover:bg-blue-500">

            Delete

        </x-form-button>



    </x-section>
</x-layout>
