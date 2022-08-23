@include('layout.head')
    @if (auth()->user()->role == 'admin')
        @livewire('dashboard-admin')
    @elseif (auth()->user()->role == 'sales')
        @livewire('dashboard-sales')
    @else
        @livewire('dashboard-menu')
    @endif

@include('layout.footer')