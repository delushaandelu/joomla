<?php
/**
 * @version   $Id: item.php 23394 2014-10-09 15:22:10Z james $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @var $item RokSprocket_Item
 */
?>
<li>
	<span class="sprocket-headlines-item<?php echo (!$index) ? ' active' : ''; ?>" data-headlines-item>
		<?php if ( $item->getPrimaryImage()) :?>
		<img src="<?php echo $item->getPrimaryImage()->getSource(); ?>" class="sprocket-headlines-image" alt="<?php echo $item->getPrimaryImage()->getAlttext(); ?>"/>
		<?php endif; ?>
		<?php if ($item->getPrimaryLink()) : ?>
		<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>" class="sprocket-headlines-text">
		<?php else : ?>
		<span class="sprocket-headlines-text">
		<?php endif; ?>
			<?php echo $item->getText(); ?>
		<?php if ($item->getPrimaryLink()) : ?>
		</a>
		<?php else : ?>
		</span>
		<?php endif; ?>
	</span>
</li>
