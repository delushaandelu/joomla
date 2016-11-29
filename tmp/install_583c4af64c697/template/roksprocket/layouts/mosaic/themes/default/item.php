<?php
/**
 * @version   $Id: item.php 18937 2014-02-21 22:54:29Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @var $item RokSprocket_Item
 */
?>
<li<?php echo strlen($item->custom_tags) ? ' class="'.$item->custom_tags.'"' : ''; ?> data-mosaic-item>
	<div class="sprocket-mosaic-item" data-mosaic-content>
		<?php echo $item->custom_ordering_items; ?>
		<div class="sprocket-padding">
			<?php if ($item->getPrimaryImage()) :?>
			<div class="sprocket-mosaic-image-container">
				<?php if ($item->getPrimaryLink()) : ?><a data-rokbox href="<?php echo $item->getPrimaryImage()->getSource(); ?>" data-rokbox-album="All"><?php endif; ?>
				<img src="<?php echo $item->getPrimaryImage()->getSource(); ?>" alt="" class="sprocket-mosaic-image" />
				<?php if ($item->getPrimaryLink()) : ?>
					<span class="sprocket-mosaic-hover"></span>
					<span class="sprocket-mosaic-hovercontent"><span><i class="uk-icon-eye"></i></span><h2 class="sprocket-mosaic-title">
					
						<?php echo $item->getTitle();?>
				</h2></span>
				</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>

		</div>
	</div>
</li>
