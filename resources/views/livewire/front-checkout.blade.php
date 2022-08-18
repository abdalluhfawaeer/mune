<div>
    <style>
        .right-bar a ,.btn-area{
            background-color: {{ $menu->color }};
            color: {{ $menu->text }};        
        }
        .qty {
            padding :5px;
            border: none;
            background-color: {{ $menu->color }};
            color: {{ $menu->text }};
        }
        .btn-area i {
            margin-right :unset
        }
    </style>
    <div class="top-container">
        <center>
            <img class="logo" src="{{ asset('storage/' . $menu->logo) }}" alt="">
            <p class="desc">{{ $menu->name }}</p>
            <p class="desc" style="opacity: 0.6;">{{ $menu->desc }}</p>
        </center>
    </div>
    <div class="wrapper">
		<div class="project">
			<div class="shop">
				<div class="box">
					<img src="{{ asset('storage/' . $menu->logo) }}">
					<div class="content">
						<h3>Women Lipsticks</h3>
                        <p>asdsa , asdad ,asdsadsa ,asdasdsa</p>
                        <br>
						<p class="unit"><button class="qty">+</button><input name="" value="2" readonly><button class="qty">+</button></p>
						<p class="btn-area" style="background-color: red;color:white;padding:5px"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2"></span><b>5550 jd</b></p>
					</div>
				</div>
				<div class="box">
					<img src="{{ asset('storage/' . $menu->logo) }}">
					<div class="content">
						<h4>Man's Watches Man's Watches Man's Watche s Man's Watche s</h4>
						<p class="unit"><button class="qty">+</button><input name="" value="2" readonly><button class="qty">+</button></p>
						<p class="btn-area" style="background-color: red;color:white;padding:5px"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2"></span><b>5550 jd</b></p>
					</div>
				</div>
				<div class="box">
					<img src="{{ asset('storage/' . $menu->logo) }}">
					<div class="content">
						<h3>Samsung Mobile</h3>
						<p class="unit"><button class="qty">+</button><input name="" value="2" readonly><button class="qty">+</button></p>
						<p class="btn-area" style="background-color: red;color:white;padding:5px"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2"></span><b>5550 jd</b></p>
					</div>
				</div>
			</div>
			<div class="right-bar">
				<p><span>Subtotal</span> <span>$120</span></p>
				<hr>
				<p><span>Tax (5%)</span> <span>$6</span></p>
				<hr>
				<p><span>Shipping</span> <span>$15</span></p>
				<hr>
				<p><span>Total</span> <span>$141</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
		</div>
	</div>
	<script src="{{ url('front/checkout.js') }}"></script>
</div>
