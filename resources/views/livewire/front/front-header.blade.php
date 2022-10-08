<div>
    <div class="top-container animate__animated animate__backInDown">
        <div class="l">
            @if ($type == 'order')
                <a href="/{{ $menu->name }}/{{ $menu->id }}" class="link"><i
                        class="fa-solid fa-cart-shopping"></a></i>
            @else
                <a href="#" class="link"><i class="fa-solid fa-house"></a></i>
            @endif
        </div>
        <center>
            @if(file_exists('storage/' . $menu->logo)) 
                <img class="logo" src="{{ asset('storage/' . $menu->logo) }}" alt="">
            @else
                <img class="logo" src="{{ asset('empty.png') }}" alt="">
            @endif
            <p class="desc">{{ $menu->name }}</p>
            @if (app()->getLocale() == 'en')
                <p class="desc" style="opacity: 0.6;">{{ $menu->desc }}</p>
            @else
                <p class="desc" style="opacity: 0.6;">{{ $menu->desc_en }}</p>
            @endif
        </center>
        <div class="r">
            @if (app()->getLocale() == 'en')
                <a href="/lang/ar" class="link">AR</a>
            @else
                <a href="/lang/en" class="link">EN</a>
            @endif
        </div>
    </div>
    <div id="navopen">
        <div class="topnav" id="myTopnav" style="display: none;z-index:9">
            <a href="#home"><img class="logo2" src="{{ asset('storage/' . $menu->logo) }}" alt=""></a>
            <a href="/{{ $menu->name }}/{{ $menu->id }}/contact-us">{{ __('text.Contactus') }}</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
                <i class="fa fa-bars"></i>
            </a>
            @if ($type == 'order')
                <a href="/{{ $menu->name }}/{{ $menu->id }}/checkout" class="icon" style="right: 54px;">
                    <i class="fa fa-shopping-cart"></i>
                </a>
            @endif
        </div>
    </div>
    <script src="{{ url('front/navopen.js') }}"></script>
</div>
