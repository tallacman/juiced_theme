<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!--   nessessary code for theme and concrete5    -->



<!--  theme javascripts     -->
<script src="<?php echo $this->getThemePath()?>/js/slicknav.js"> </script>

<script type="text/javascript">
    $(document).ready(function(){
    	$('#menu').slicknav();
    });
</script>



<!--  page_footer gets put here     -->
