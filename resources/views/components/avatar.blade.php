@props([
  'userOrAdmin',
])
<div>
  @if ($userOrAdmin->avatar)
    <img
      src="{{ asset($userOrAdmin->avatar) }}"
      alt="{{ $userOrAdmin->firstname }}"
      style="
        width: 3rem;
        height: 3rem;
        border-radius: 9999px;
        object-fit: cover;
        margin: 0 auto;
      "
    />
    <p class="text-center text-black text-sm font-semibold mt-2">{{ $userOrAdmin->filename }}</p>
  @else
    <img
      src="{{ asset('avatars/default-avatar.png') }}"
      alt="{{ 'Avatar' }}"
      style="
        width: 3rem;
        height: 3rem;
        border-radius: 9999px;
        object-fit: cover;
        margin: 0 auto;
      "
    />
    <p class="text-center text-black text-sm font-semibold mt-2">default</p>
  @endif
</div>
