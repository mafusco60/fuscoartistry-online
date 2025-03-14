<x-layout>
  <div
    class="bg-white rounded lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
  >
    <h2 class="text-2xl text-center font-bold mb-4">Register</h2>
    <form method="POST" action="{{ route('register.store') }}">
      @csrf
      {{-- <x-inputs.text id="name" name="name" placeholder="Full name" /> --}}
      <x-inputs.text
        id="email"
        name="email"
        placeholder="Email address"
        type="email"
      />
      <x-inputs.text id="firstname" name="firstname" placeholder="First name" />
      <x-inputs.text id="lastname" name="lastname" placeholder="Last name" />

      <x-inputs.text id="phone" name="phone" placeholder="Phone" />

      <x-inputs.text
        id="password"
        name="password"
        placeholder="Password"
        type="password"
      />
      <x-inputs.text
        id="password_confirmation"
        name="password_confirmation"
        placeholder="Confirm password"
        type="password"
      />
      <button
        type="submit"
        class="w-full bg-teal-900 hover:bg-teal-800 text-white mt-4 px-4 py-2 rounded focus:outline-none"
      >
        Register
      </button>
      <p class="mt-4 text-teal-900">
        Already have an account?
        <a class="text-teal-900" href="{{ route('login') }}">Login</a>
      </p>
    </form>
  </div>
</x-layout>
