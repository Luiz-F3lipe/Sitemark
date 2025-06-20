<footer class="bg-background-secondary border-border-primary rounded-full py-2 px-4 flex gap-6">
    <x-button-foot active="{{ request()->routeIs('dashboard') ? 'true' : 'false' }}" >
      <x-icons.list class="w-10 h-8" />
    </x-button-foot>
    <x-button-foot active="{{ request()->routeIs('profile') ? 'true' : 'false' }}">
        <x-icons.user class="w-10 h-8 text-white" />
    </x-button-foot>
    <x-button-foot onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <x-icons.exit class="w-10 h-8" />
    </x-button-foot>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
      @csrf
    </form>
</footer>
