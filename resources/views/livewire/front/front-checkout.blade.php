<div>
    @livewire('front.front-header',['id'=>$menu->id , 'type' => $type])
    <div class="wrapper animate__animated animate__backInLeft" style="display: none">
		<div class="project">
			<div class="shop">
				<div class="box">

				</div>
			</div>
			<div class="right-bar">
				<p><span>{{ __('text.total') }}</span> <span id="total">0 JD</span></p>
				<a href="/{{ $menu->name }}/{{ $menu->id }}/send"><i class="fa-solid fa-check"></i>{{ __('text.Checkout') }}</a>
				<br>
				<a href="/{{ $menu->name }}/{{ $menu->id }}"><i class="fa fa-shopping-cart"></i>{{ __('text.back') }}</a>
			</div>
		</div>
	</div>
	<div class="empty">
		<img src="{{ url('emp1t.png') }}" alt="" width="100%">
		<center>
			<h3>{{ __('text.sorry') }}</h3>
			<br>
		</center>
		<div class="right-bar" style="height: 50px">
			<a href="/{{ $menu->name }}/{{ $menu->id }}"><i class="fa fa-shopping-cart"></i>{{ __('text.back') }}</a>
		</div>
	</div>
	@livewire('front.front-footer',['id'=>$menu->id , 'type' => $type ,'theme' => $theme])
	<script>
		function fetchCart() {
			const cart = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
			var acc ;
			var acc_name = '';
			var inc = 1;
			var dec = 0;
			var total = 0;
			$(".box").remove();
			for (var i = 0; i < cart.length; i++){
				if (cart[i].acc.length > 0) {
					acc = cart[i].acc;
					for (var j = 0; j < cart[i].acc.length; j++){
						acc_name += acc[j].title + ' ' + acc[j].v_price + 'JD' + ' ,';
					}
				}
				$('.shop').append(
					'<div class="box">'+
					'<img src="/storage/'+cart[i].item_img+'">'+
					'<div class="content">'+
						'<h3>'+cart[i].item_title+'</h3>'+
						'<p>'+acc_name+'</p>'+
						'<br>'+
						'<p class="unit"><button type="submit" class="qty" value="inc" onclick="updateProduct('+cart[i].random+','+inc+')">+</button><input id="'+cart[i].random+'" value="'+cart[i].qty+'" readonly \/><button class="qty" onclick="updateProduct('+cart[i].random+','+dec+')" value="dec">-</button></p>'+
						'<p onclick="removeProduct('+cart[i].random+')" class="btn-area" style="background-color: red;color:white;padding:5px"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2"></span><b>'+cart[i].item_price+' JD</b></p>'+
					'</div>'+
				'</div>'
				);
				acc_name = '';
				total += cart[i].item_price;
			}
			$('#total').text(total+' JD');
		}

		function updateProduct(random,oppreition){
			let cart = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
			var qty = parseInt($('#'+random).val());
			if (oppreition == 1) {
				qty++;
			} else {
				if (qty > 1) {
					qty--;
				}
			}
			for (var i = 0; i < cart.length; i++){
				if (random == cart[i].random) {
					if (oppreition == 1) { 
						cart[i].item_price = cart[i].price * qty;
					} else {
						if (qty == 1) {
							cart[i].item_price = cart[i].price;
						} else {
							cart[i].item_price = cart[i].price * qty;
						}
					}
					cart[i].qty = qty;
				}
			}
			localStorage.setItem('products_'+{{ $menu->id }}, JSON.stringify(cart));
			fetchCart();
		}

		function removeProduct(random){
			let storageProducts = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
			if (storageProducts != null) {
				let products = storageProducts.filter(product => product.random !== random );
				localStorage.setItem('products_'+{{ $menu->id }}, JSON.stringify(products));
			}
			fetchCart();
			checkCart();
		}

		fetchCart();
		checkCart();

		function checkCart() {
			const cart = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
            if (cart != null) {
				if (cart.length == 0) {
					$('.wrapper').css('display','none');
					$('.empty').css('display','block');
				} else {
					$('.wrapper').css('display','block');
					$('.empty').css('display','none');
				}
			} else {
				$('.wrapper').css('display','none');
				$('.empty').css('display','block');
			}
		}
	</script>
	<script src="{{ url('front/navopen.js') }}"></script>
</div>
