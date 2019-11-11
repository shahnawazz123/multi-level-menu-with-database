
<!--===============================
=            Home page            =
================================-->

<div class="wrap t3-home-banner ">
<div class="banner">
<div class="custom">
<div class="container">
<div class="home-1banner">
<div class="home-padding">
<div class="row">
<div class="col-sm-8">
<div class="banner-content">
<div class="content-center">
<h3>Great Deal with <br>Welkin</h3>
<h2 class="discount">Get FLAT 30% Off For All New Arrivals</h2>
<div class="buy-button"><a href="#" class="buy-product">Buy Now <i class="fa fa-long-arrow-right"></i> </a></div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="banner-text"><img src="<?php echo $this->config->config['file_url'];?>image/2.png" alt="1" /></div>
</div>
</div>
</div>
</div>
</div></div>
</div>
</div>

<div class="home">


<div class="container t3-sl t3-sl-2 banner-padding">

<div class="t3-spotlight t3-spotlight-2  row">
<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="t3-module module collections " id="Mod154">
	<div class="module-inner">
		<h3 class="module-title ">
			<span>New collections</span>
		</h3>
		<div class="module-ct">
<script>
	if(typeof(j2store) == 'undefined') {
		var j2store = {};
	}
	if(typeof(j2store.jQuery) == 'undefined') {
		j2store.jQuery = jQuery.noConflict();
	}

	if(typeof(j2storeURL) == 'undefined') {
		var j2storeURL = '';
	}
	(function($) {
		window.onresize = setcarousel154;
		$(document).ready(function() {
			setcarousel154();
		});

	})(j2store.jQuery);
	function setcarousel154(){
		var screenWidth = window.screen.width;
		//var screenHeight = window.screen.height;
		var pro_items = 0;
		if(screenWidth >= 1200){
			pro_items = '4';
		}else if(screenWidth >= 992){
			pro_items = '4';
		}else if(screenWidth >= 768){
			pro_items = '3';
		}else if(screenWidth >= 480){
			pro_items = '2';
		}else if(screenWidth >= 320){
			pro_items = '1';
		}
		if(pro_items <= 0){
			pro_items =  '4';
		}
		(function ($) {
			//console.log(pro_items);
			var syncedSecondary = true;
			$("#jowl-slider-154").owlCarousel('destroy');
			$("#jowl-slider-154").owlCarousel({
				items : pro_items,
				slideSpeed : 200,
				interval : 10,
				nav: false,
				autoplay: true,
				dots: true,
				loop: false,
				responsiveRefreshRate : 200,
				navText: ["<i class='fa fa-caret-left icon-chevron-left icon-white'></i>",
					"<i class='fa fa-caret-right icon-chevron-right icon-white'></i>"]
			}).on('changed.owl.carousel', syncPosition);
		})(j2store.jQuery);
	}
	function syncPosition(el) {
		(function ($) {
			//if you set loop to false, you have to restore this next line
			//var current = el.item.index;

			//if you disable loop you have to comment this block
			var count = el.item.count-1;
			var current = Math.round(el.item.index - (el.item.count/2) - .5);

			if(current < 0) {
				current = count;
			}
			if(current > count) {
				current = 0;
			}
			//console.log(current);
			//$("#jowl-slider-154").data('owl.carousel').to(number, 300, true);
		})(j2store.jQuery);
	}



</script>
<div class="jowl-module-product-slide-154"> 
<div  id="jowl-slider-154" class="j2store-product-module j2store-product-module-list owl-carousel">
<!-------------image1 -------------->

<?php foreach ($collection as $nc) {  ?>
	

<div  class="j2store product-13 j2store-module-product ">
<div class="j2store-product-image  col-md-12 ">
<a href="" title="<?php echo $nc->name;  ?>">
<img  alt="White full hand t-shirt" class=" j2store-product-image-13" src="<?php echo $this->config->config['file_url'].'image/TIFFIN/'.$nc->image;?>" width="150" height="200" />
</a>
</div>
<div class="product-cart-section ">
<div class="product-cart-left-block  span12 ">

<div  class="product-price-container">
</div>
<div class="product_cart_block">
<a href="" class="btn btn-success">View details</a>
</div>
</div>

</div> 
</div>
<?php } ?>






</div>
</div>
</div></div></div>
</div>

<div class=" col-lg-5 col-md-5 col-sm-5 col-xs-12">&nbsp;</div>
</div>

</div>



<div class="wrap t3-sl t3-sl-2 ">
<div class="container">
<div class="t3-module module " id="Mod135"><div class="module-inner"><h3 class="module-title "><span>OUR POWERFULL STRENGTH</span></h3><div class="module-ct">
<div class="custom">
<div class="feature">
<div class="container">
<div class="row">
<div class="feature-detail">
<div class="col-sm-6 feature-colum">
<div class="feature-icon"><i class="fa fa-file-text-o"></i></div>
<h4>VISION</h4>
	<p>
		TO CREATE A WORLD CLASS COMPANY WITH ITS UNIQUE CULTURE, TO TRANSFORM CUSTOMERS SUPPLIES EMPLOYEES INTO A FAMILY
	</p>
</div>
<div class="col-sm-6 feature-colum">
<div class="feature-icon"><i class="fa fa-twitch"></i></div>
<h4>MISSION</h4>
	<p>	
		TO OPERATE AS A GLOBAL MANUFACTURER OF STAINLESS STEEL PRODUCTS & SEEK TO EXPAND ITS OPERATIONS AND MANUFACTURING AT PAN INDIA LEVEL.
	</p>
</div>

</div>
</div>
</div>
</div></div>
</div></div></div>
</div>
</div>


<div class="wrap t3-sl t3-sl-3 ">
<div class="container">
<div class="t3-module module product-list new-arrivals " id="Mod112">
	<div class="module-inner">
		<h3 class="module-title ">
			<span>New Arrivals</span>
		</h3>
		<div class="module-ct">
			<div  class="j2store-product-module j2store-product-module-list row">

<div class="j2store-module-product-row row-0 row">
<!------NEW ARRIVALS------>

<?php foreach ($collection as $nc) {  ?>
<div class="col-sm-3">
<div class="j2store product-13 j2store-module-product">

<div class="j2store-product-image  col-md-12  ">
	<a href="<?php echo base_url();?>welcome/product/<?php echo $nc->product_id;?>" title="<?php echo $nc->name;  ?>">
		<img  alt="<?php echo $nc->name;  ?>" class=" j2store-product-image-13" src="<?php echo $this->config->config['file_url'].'image/TIFFIN/'.$nc->image;?>" width="250" height="250" />
	</a>
</div>

<h4 class="product-title">
	<a  href="<?php echo base_url();?>welcome/product/<?php echo $nc->product_id;?>" title="<?php echo $nc->name;?>"><?php echo $nc->name;?> </a>
</h4>

<div class="product-cart-section col-sm-12 ">

<div class="product-cart-left-block  col-sm-12 ">

<div  class="product-price-container">
<div class="sale-price">$30 </div>
<div class="tax-text"></div>
</div>



<div class="product_cart_block">
<a href="<?php echo base_url();?>welcome/product/<?php echo $nc->product_id;?>" class="btn btn-primary">View details</a>
</div>
</div>

</div> 


</div> 
</div> 
<?php } ?>
<!-------------end for loop----------->





</div>

</div>
</div></div></div>
</div>
</div>

</div>





