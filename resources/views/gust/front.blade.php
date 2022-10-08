@include('layout.hedar-front')
<div>
  @if (session()->get('theme') == 1)
  @livewire('front.theme-two',['name'=>$name,'id'=>$id])
  @else
  @livewire('front.theme-two',['name'=>$name,'id'=>$id])
  @endif
  @stack('scripts')
</div>