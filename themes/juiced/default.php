<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/page_header.php');
$this->inc('elements/theme_header.php');
?>


<!--  basic page structure   -->

<div class="container">
    <div class="col-12">
        <?php
    	$a = new Area('Main');
    	$a->display($c);
        ?>
    </div>
</div>




<?php
$this->inc('elements/theme_footer.php');
$this->inc('elements/page_footer.php');
?>
