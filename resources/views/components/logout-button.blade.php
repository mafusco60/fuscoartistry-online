<form action="{{ route('logout') }}" method="POST">
  @csrf
  <button
    type="submit"
    class="w-full py-2 px-4 text-start bg-teal-900 text-white hover:bg-teal-700 focus:outline-none"
  >
    <i class="fa fa-sign-out inline"></i>

    Logout
  </button>
</form>
