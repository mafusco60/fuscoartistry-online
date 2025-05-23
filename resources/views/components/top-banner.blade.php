@props([
  'heading' => 'Enjoy exploring my collection.',
  'subheading' => 'Find just the right piece to enhance your space!',
])
<section class="bg-indigo-900 text-white py-6 text-center">
  <div class="container mx-auto">
    <h2 class="text-3xl font-semibold">
      {{ $heading }}
    </h2>
    <p class="text-lg mt-2">
      {{ $subheading }}
    </p>
  </div>
</section>
