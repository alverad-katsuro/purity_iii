<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2017 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */

$responsive = $this->getParam('responsive', 1);
$resClass = "";
if ($responsive==0){
	$resClass = "no-responsive";
}

defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" /> <?php echo $resClass ?>'>

<head>
	<jdoc:include type="head" />
	<?php $this->loadBlock('head') ?>
	<?php $this->addCss('layouts/porfolio') ?>
</head>

<body>

<div class="t3-wrapper porfolio"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->
	
	<?php $this->loadBlock('header') ?>

	<?php $this->loadBlock('mainbody') ?>

	<?php $this->loadBlock('footer') ?>

</div>


</body>
</html>