   {{-- <x-layout> --}}
       {{-- i pass the type props ,you can access it as a variable in the component --}}

       {{-- we over ride on it --}}
       {{-- <x-flash type="warning">

           Whoops, sorry about that

       </x-flash> --}}


       {{-- attribute that you passed in that not declare in props for this
     you need to declare $attribute  variables --}}

       {{-- <x-flash class="mt-10" data-flash="foobar">
           Great Job
       </x-flash>


   </x-layout> --}}
{{--
<x-layout>
       <x-model title="Deactivate Account?"
          submit-label="deactive">
           <x-slot name="trigger">
               <button @click="on = true">Show Modal</button>
           </x-slot>
           Are you sure you want to deactivate your account? All of your data will be removed.

       </x-model>

 </x-layout> --}}


 {{-- <x-layout>
     <x-section>
         <x-dropdown>
             <x-slot name="trigger">
                 <button>Click Me</button>
             </x-slot>

             <x-dropdown-link href="/">One</x-dropdown-link>
             <x-dropdown-link href="/">Two</x-dropdown-link>
             <x-dropdown-link href="/">Three</x-dropdown-link>




         </x-dropdown>


         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Qui ipsa nesciunt sequi? Facilis modi tempore nam at sunt?
            Eligendi aut expedita at ut. Neque quos architecto quae
            veniam perferendis esse!</p>

     </x-section>
 </x-layout> --}}

 <x-layout>
    <x-section>
        <p>
            Hello World
        </p>
    </x-section>
</x-layout>
