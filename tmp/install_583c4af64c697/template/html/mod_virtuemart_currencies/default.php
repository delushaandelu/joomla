<?php // no direct access
defined('_JEXEC') or die('Restricted access');
vmJsApi::jQuery();
vmJsApi::chosenDropDowns();
?>

<!-- Currency Selector Module -->
<?php echo $text_before ?>

<form action="<?php echo vmURI::getCleanUrl() ?>" method="post">
     <button class="btn btn-secodary" type="submit" name="submit" data-toggle="tooltip" title="<?php echo vmText::_('MOD_VIRTUEMART_CURRENCIES_CHANGE_CURRENCIES') ?>"><i class="fa fa-exchange"></i></button>
	<br />
	<br />
	
	<?php echo JHTML::_('select.genericlist', $currencies, 'virtuemart_currency_id', 'class="inputbox vm-chzn-select"', 'virtuemart_currency_id', 'currency_txt', $virtuemart_currency_id) ; ?>
	
</form>


