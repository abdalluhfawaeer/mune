<div>
    <div class="footer animate__animated animate__backInUp">
        <b>{{ $menu->name }}</b>
        <br>
        <br>
        <div class="link">
            @if (!empty($addition->faecbook))
                <a href="{{ $addition->faecbook }}" class="icon_footer"><i class="fa-brands fa-facebook"></i></a>
            @endif
            @if (!empty($addition->twitter))
                <a href="{{ $addition->twitter }}" class="icon_footer"><i class="fa-brands fa-twitter"></i></a>
            @endif
            @if (!empty($addition->instagram))
                <a href="{{ $addition->instagram }}" class="icon_footer"><i class="fa-brands fa-square-instagram"></i></a>
            @endif
            @if (!empty($addition->youtube))
                <a href="{{ $addition->youtube }}" class="icon_footer"><i class="fa-brands fa-youtube"></i></a>
            @endif   
            @if (!empty($addition->snapchat))
                <a href="{{ $addition->snapchat }}" class="icon_footer"><i class="fa-brands fa-square-snapchat"></i></a>
            @endif   
            @if (!empty($addition->whatapp))
                <a href="{{ $addition->whatapp }}" class="icon_footer"><i class="fa-brands fa-square-whatsapp"></i></a>
            @endif
            @if (!empty($addition->tiktok))
                <a href="{{ $addition->tiktok }}" class="icon_footer"><i class="fa-brands fa-tiktok"></i></a>
            @endif
        </div>
        <br>
        @if ($theme == 'Dark')
            <a href="/{{ $menu->name }}/{{ $menu->id }}/contact-us" style="text-decoration: none;color: white;">{{ __('text.Contactus') }}</a>
        @else
            <a href="/{{ $menu->name }}/{{ $menu->id }}/contact-us" style="text-decoration: none;color: black;">{{ __('text.Contactus') }}</a>
        @endif
        <br>
        <br>
        <a href="" class="endtext">powered by <span>menuface.com</span></a>
    </div>
</div>
