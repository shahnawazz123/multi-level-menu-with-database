<!--============================
=            Shop              =
=============================-->


<div class="wrap t3-breadcrumbs ">
<div class="container">
	<div class="col-sm-12 tp-breadcrumb-title">
		<h1>Shop the product</h1>
	</div>
<div class="col-sm-12">
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo base_url();?>welcome/shop">Home</a>
		</li>
			<li class="active"><span>shop</span></li>
	</ul>
</div>
</div>
</div>

<div id="t3-mainbody" class="container t3-mainbody">
<div class="row">

<div id="t3-content" class="t3-content col-xs-12">
<div id="system-message-container">
</div>
<div id="akeeba-renderjoomla">
<div id="main-j2store-product-list" class="j2store-product-list bs3 grid-layout">
<div class="row">
<div class="j2store-sidebar-filters-container col-sm-3">
<div id="j2store-product-loading" style="display:none;"></div>
<div class="j2store-product-filters category-filters">
	<h4 class="product-filter-heading">Categories</h4>

<div id="j2store_category" style="display:block;">
	<?php foreach ($category as $categorys) { ?>
<ul id="j2store_categories_mod" class="nav nav-list nav-stacked">
	<li class="active">
		<a href="<?php echo '?cat_id='.$categorys->category_id ?>"><?php echo $categorys->category_name ?></a>
	</li>

</ul>
<?php  } ?>
</div>
</div>

<script type="text/javascript">
/**
 * Method to Submit the form when search Btn clicked
 */
jQuery("#filterProductsBtn").on('click',function(){
	jQuery("#j2store-product-loading").show();
	jQuery("#productsideFilters").submit();
}) ;

jQuery('document').ready(function (){
	});
</script>



</div>
<div class="col-sm-9">
<div class="top-bar-filters-container row">
<div class="grid-list col-sm-3" >
<div class="gl-layout">
<ul>
<li><a id="list" onclick="products1();" class="gl gl-icon gl-icon-list">List</a></li>
<li><a id="grid" onclick="products2();" class="gl gl-icon gl-icon-grid">Grid</a></li>
</ul>
</div>

</div>
<script type="text/javascript">
function resetJ2storeFilter(){
	jQuery(".j2store-product-search-input").val("");
	jQuery("#productFilters").submit();
}
</script>
</div>

<div class="j2store-products-row row">
	<?php foreach ($product as $products) { ?>
	<div class="col-md-4">
		<div class="j2store-single-product multiple j2store-single-product-18 product-18 pcolumn-1">
	<div class="image-quick-view">
				<div class="j2store-product-images">
			<div class="j2store-thumbnail-image">
				<a href="<?php echo base_url();?>welcome/product/<?php echo $products->product_id;?>">
					<img alt="" title="<?php echo $products->name;?>" class=" j2store-product-thumb-image-18" src="<?php echo $this->config->config['file_url'].'image/TIFFIN/'.$products->image;?>" width="250" height="250">
				</a>
			</div>
		</div>
	</div>
		<div class="title-price-block">
			<h2 class="product-title">
				<a  href="<?php echo base_url();?>welcome/product/<?php echo $products->product_id;?>" title=""><?php echo $products->name;?></a>
			</h2>
		<div class="product-short-description">
			<p>
				Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
			</p>
		</div>
		<div  class="product-price-container">
				<div class="sale-price">$40 </div>
		</div>
			<a href="<?php echo base_url();?>welcome/product/<?php echo $products->product_id;?>" class="btn btn-success">
								View details
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>

		</div><!-----title-price-block------>
	</div><!-----j2store-single-product------>
</div><!-----col-md-6------>
<?php } ?>
</div><!-----row-end------>
<!-----pagination------>
</div>
</div> 
</div> 
<script>
  function products1(){
		 var gridlistview = document.getElementById("main-j2store-product-list").classList;
		 if (gridlistview.contains("grid-layout")) {
			gridlistview.remove("grid-layout");
			gridlistview.add("list-layout");
		 }
		 (function($){
			var classarray = {".col-md-4":".col-sm-12"};

			var productgrid = $('.j2store-products-row');
			$.each(classarray,function( key,value ) {
				var new_class = productgrid.find(key);
				//console.log(new_class);
				$( new_class ).each(function( index ) {
					$(this).attr('class',value.slice(1));
				});
			});
		})(jQuery);
  }
  function products2(){
		var gridlistview = document.getElementById("main-j2store-product-list").classList;
		 if (gridlistview.contains("list-layout")) {
			gridlistview.remove("list-layout");
			gridlistview.add("grid-layout");
		 }
		(function($){
			var classarray = {".col-md-4":".col-sm-12"};
			var productgrid = $('.j2store-products-row');
			$.each(classarray,function( key,value ) {
				var old_class = productgrid.find(value);
				//console.log(old_class);
				$( old_class ).each(function( index ) {
					$(this).attr('class',key.slice(1));
				});
			});
		})(jQuery);
	 }
</script>
</div>
</div>

</div>
</div>
