 <div class="sub-cate">
	<div class=" top-nav rsidebar span_1_of_left">
		<h3 class="cate">Categorias</h3>
		<ul class="menu">
			
			<!--
			<li class="item1"><a href="#">Curabitur sapien<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
				<ul class="cute">
					<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
					<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
					<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
				</ul>
			</li>
			-->
			
			<?php foreach($categorias as $item ): ?>
				<li ><a href="<?php echo $this->Html->url(array('controller'=>'catalogo', 'action'=>'galeria', $item['Categoria']['id'])); ?>"> <?php echo $item['Categoria']['descripcion'];?> </a></li>			
			<?php endforeach; ?>
			
		</ul>
	</div>
				<!--initiate accordion
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>-->
					<div class=" chain-grid menu-chain">
	   		     		<a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6><a href="single.html">Lorem ipsum dolor</a></h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>