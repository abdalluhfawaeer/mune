@include('layout.hedar-front')
<div>
  @if (session()->get('theme') == 1)
  @livewire('front-menu',['name'=>$name,'id'=>$id])
  @else
  @livewire('theme-two',['name'=>$name,'id'=>$id])
  @endif
</div>