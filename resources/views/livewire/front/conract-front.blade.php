<div>
    @livewire('front.front-header',['id'=>$menu->id , 'type' => $type])
    <div class="wrapper animate__animated animate__backInLeft" wire:ignore>
		<div class="project">
			<div class="shops">
                <center>
                <div class="input">
                    <div>
                        <i class="fa-solid fa-envelope"></i> <br>
                        <span>{{ $addition->contact_email }}</span>
                    </div>
                    <br>
                    <div>
                        <i class="fa-solid fa-clock"></i> <br>
                        <span> {{ $addition->timework }}</span>
                    </div>
                    <br>
                    <div class="input">
                    <div>
                        <i class="fa-solid fa-location-pin"></i>
                                                <br><br>
                        <span>{{ $addition->address }}</span>
                        <br>
                        <br>
                        <a href="{{ $addition->maps }}" target="_balnk">Go To Google Maps</a>
                    </div>
                    <br>
                    <div>
                        <i class="fa-solid fa-phone-volume"></i>
                        <br><br>
                        @if(!empty($addition->phone_number))
                            @foreach ($addition->phone_number as $phone_number)
                                @if(!empty($phone_number))
                                    <span> {{ $phone_number }}</span><br><br>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <br>
                </div>
                </center>
			</div>
		</div>
        <p id="demo"></p>
	</div>
    <div class="check" style="display: none" wire:ignore>
        <img src="{{ url('check.png') }}" alt="" width="100%">
        <center>
			<h3>{{ __('text.check_send') }}</h3>
			<br>
		</center>
		<div class="right-bar" style="height: 50px">
			<a href="/{{ $menu->name }}/{{ $menu->id }}"><i class="fa fa-shopping-cart"></i>{{ __('text.back') }}</a>
		</div>
    </div>
	@livewire('front.front-footer',['id'=>$menu->id , 'type' => $type ,'theme' => $theme])
    @push('scripts')
    <script src="{{ url('front/navopen.js') }}"></script>
    @endpush
</div>
