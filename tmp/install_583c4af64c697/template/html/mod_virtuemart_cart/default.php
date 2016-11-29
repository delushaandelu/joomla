<?php // no direct access
defined('_JEXEC') or die('Restricted access');

//dump ($cart,'mod cart');
// Ajax is displayed in vm_cart_products
// ALL THE DISPLAY IS Done by Ajax using "hiddencontainer" 

?>

<!-- Virtuemart 2 Ajax Card -->
<div class="vmCartModule <?php echo $params->get('moduleclass_sfx'); ?>" id="vmCartModule">
	<?php
	if ($show_product_list) { ?>

		<div id="hiddencontainer" style=" display: none; ">
			
			<div class="vmcontainer ajax-cart-container cart-container-inner">

				<div class="product_row list-cart">
					<span class="quantity"></span>&nbsp;x&nbsp;<span class="product_name"></span>

				<?php if ($show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
					<div class="subtotal_with_tax pull-right" style="float: right;"></div>
				<?php } ?>
				<div class="customProductData"></div><br>
				</div>
			</div>
		</div>

		<div class="vm_cart_products cart-container">
			<div class="cart-container-inner">
				<?php 
					$has_product = ((int) $data->totalProductTxt > 0) ? 'has-product' : '' ; 
					$total_price = str_replace('total', '', strtolower($data->billTotal));
				?>
				<div class="icon top-cart <?php echo $has_product;?>">
					<i class="icon fa fa-shopping-cart"></i>
					 <span class="total-product"><?php echo $data->totalProduct ?></span>
				</div>

				<div class="list-cart">
					<i class="icon ecom-icon-ecommerce-cart"></i>
					<span class="total_product"><?php echo (int) $data->totalProductTxt ?> <?php echo JText::_('ITEMS') ?> </span>
				</div>

			</div>	

			<ul class="dropdown-menu sp-vm-cart-container">
				<li class="vm_cart_products">
				<?php foreach ($data->products as $product){ ?>
						<div class="sp-vm-cart-item-wrapper">
							<span class="quantity"><?php echo  $product['quantity'] ?></span>&nbsp;x&nbsp;<span class="product_name"><?php echo  $product['product_name'] ?></span>
						<?php if ($show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
						  <div class="subtotal_with_tax pull-right"><?php echo $product['subtotal_with_tax'] ?></div>
						<?php } ?>
						<?php if ( !empty($product['customProductData']) ) { ?>
						<div class="customProductData"><?php echo $product['customProductData'] ?></div>
						<?php } ?>
					</div>
				<?php } ?>
				</li>
				<?php if ( $product['product_name'] ) { ?>
				<?php } else { ?>
						<?php echo JText::_('MOD_VIRTUEMART_CART') ?>
						

					<?php } ?>
				<?php if ($data->totalProduct and $show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
				<li class="total"><?php  echo  $data->billTotal; ?></li>
				<?php } ?>
				<?php if ($data->totalProduct) { ?>
                <li class="sppb-btn sppb-btn-primary btn-transparent sp-cart-show"><?php  echo  $data->cart_show; ?></li>
                <?php } ?>
			</ul>
		</div>
	<?php } ?>

	<div style="clear:both;"></div>
	<div class="payments-signin-button" ></div>
	<noscript>
	<?php echo vmText::_('MOD_VIRTUEMART_CART_AJAX_CART_PLZ_JAVASCRIPT') ?>
	</noscript>
</div>

