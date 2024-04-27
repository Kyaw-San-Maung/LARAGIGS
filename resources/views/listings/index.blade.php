 <x-layout>
   @include('partials._hero')
   @include('partials._search')

   <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

     @unless(count($posts) == 0)

     @foreach ($posts as $post)
     <x-listing-card :post="$post" />
     @endforeach

     @else
     <p>No Posts Found</p>

     @endunless

   </div>
   <div class="mt p-4">
     {{$posts->links()}}
   </div>
 </x-layout>