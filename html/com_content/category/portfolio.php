<?php
 /**
 *------------------------------------------------------------------------------
 * @package Purity III Template - JoomlArt
 * @version 1.0 Feb 1, 2014
 * @author JoomlArt http://www.joomlart.com
 * @copyright Copyright (c) 2004 - 2014 JoomlArt.com
 * @license GNU General Public License version 2 or later;
 *------------------------------------------------------------------------------
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
use Joomla\CMS\Categories\Categories;
use Joomla\CMS\Categories\CategoryNode;
/*$categories = Categories::getInstance("content");
$rootNode = $categories->get();   
$categoryNodes = $rootNode->getChildren(1);*/

$cols = $this->params->get('num_columns', 3);
$key = 0;
$items = $this->items;
$categorias = array();
$array_size = 0;
?>



<div class="porfolio<?php if ($this->params->get('pageclass_sfx')) echo ' ' . $this->params->get('pageclass_sfx'); ?>" itemscope itemtype="http://schema.org/Blog">

	<?php if ($this->params->get('show_page_heading', 1)) : ?>
	<div class="page-header">
		<h1> <?php echo $this->escape($this->params->get('page_heading')); ?></h1>
	</div>
	<?php endif; ?>

	<?php //JAHelper::loadModules('inline') ?>
	<!-- Item list -->
	<div class="porfolio-items">

	<?php foreach ($items as $item):?>
		<?php if (array_key_exists($item->category_title, $categorias)) :
			array_push($categorias[$item->category_title], $item);
		else :
			$categorias[$item->category_title] = array($item);
		endif;?>
	<?php endforeach; ?>
	<?php foreach ($categorias as $categoria):?>
		<?php if (count($categoria) >= 4) :
			$span = floor(12.0 / floatval(count($categoria)));
		else :
			$span = floor(12.0 / count($categoria));
		endif;?>
		<h1 class=> <?php echo (array_keys($categorias)[$array_size]) ?> </h1>
		<?php if (count($categoria) <= $cols) :
			$colunas_max = count($categoria);
		else :
			$colunas_max = $cols;
		endif; ?>

		<?php foreach ($categoria as $item):?>

		<?php if ($key % $colunas_max == 0) : ?>
			<!-- Row -->
			<div class="row row-porfolio">
		<?php endif ?>

			<div class="col-md-<?php echo $span ?>">
				<?php
				// Load category_item.php by default
				$this->item = $item;
				echo $this->loadTemplate('item');
				?>
			</div>

			<?php if ((($key+1) % $colunas_max == 0) || $key+1 == count($this->items)) : ?>
			</div>
			<!-- // Row -->
		<?php endif ?>
			<?php
			$key++;
		endforeach; ?>
		<?php $array_size++;endforeach; ?>

	</div>
	<!-- // Item list -->

	<!-- Pagination -->
	<?php
	if ($this->pagination->getPagesLinks()): ?>
		<div class="pagination-wrap">
			<?php echo $this->pagination->getPagesLinks(); ?>
			<p class="counter pagination-counter">
				<?php echo $this->pagination->getPagesCounter(); ?>
			</p>
		</div>
	<?php endif; ?>
	<!-- //Pagination -->

</div>
