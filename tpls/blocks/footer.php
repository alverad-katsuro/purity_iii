<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- BACK TOP TOP BUTTON -->
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
  <button class="btn btn-primary" title="<?php echo JText::_('TPL_PURITY_III_BACKTOTOP'); ?>"><i class="fa fa-caret-up"></i></button>
</div>
<script type="text/javascript">
(function($) {
	// Back to top
	$('#back-to-top').on('click', function(){
		$("html, body").animate({scrollTop: 0}, 500);
		return false;
	});
    $(window).load(function(){
        // hide button to top if the document height not greater than window height*2;using window load for more accurate calculate.    
        if ((parseInt($(window).height())*2)>(parseInt($(document).height()))) {
            $('#back-to-top').hide();
        } 
    });
})(jQuery);
</script>
<!-- BACK TO TOP BUTTON -->

