@props([
  'artworks',
])

<div class="text-teal-900 text-center font-bold text-3xl mt-5 mx-auto">
  Recent Artworks
</div>
<section class="px-4 py-6">
  <div class="container lg:container m-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ($artworks as $artwork)
        <x-artwork-card :artwork="$artwork" artworkWidth="w-[300px]" />
      @endforeach
    </div>
  </div>
</section>
