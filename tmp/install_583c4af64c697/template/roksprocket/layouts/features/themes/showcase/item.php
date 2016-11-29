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

<li class="sprocket-features-index-<?php echo $index;?><?php echo (!($index - 1)) ? ' active' : '';?>" data-showcase-pane>
	<div class="sprocket-features-container">
		<?php
		if ($item->getPrimaryImage()) :
		?>
		<div class="sprocket-features-img-container">
			<?php if ($item->getPrimaryLink()) : ?>
				<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><img src="<?php echo $item->getPrimaryImage()->getSource(); ?>" alt="<?php echo $item->getPrimaryImage()->getAlttext(); ?>" style="max-width: 100%; height: auto;" /></a>
			<?php else: ?>
				<img src="<?php echo $item->getPrimaryImage()->getSource(); ?>" alt="<?php echo $item->getPrimaryImage()->getAlttext(); ?>" />
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="sprocket-features-content">
			<?php if ($parameters->get('features_show_title') && $item->getTitle()) : ?>
				<h2 class="sprocket-features-title">
					<?php if ($item->getPrimaryLink()) : ?>
						<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><?php echo $item->getTitle(); ?></a>
					<?php else: ?>
						<?php echo $item->getTitle(); ?>
					<?php endif; ?>
				</h2>
			<?php endif; ?>
			<?php if ($parameters->get('features_show_article_text') && ($item->getText() || $item->getPrimaryLink())) : ?>
				<div class="sprocket-features-desc">
					<?php echo $item->getText(); ?>
					<?php if ($item->getPrimaryLink()) : ?>
					<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>" class="readon btn btn-primary"> <span><?php rc_e('READ_MORE'); ?></span> <i class="uk-icon-sign-in"></i></a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</li>
