<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header_page.php');
$this->inc('elements/header_theme.php');
?>


<!--  basic page structure   -->

<main class="container gutters">
    <div class="col-12">
        <?php
    	$a = new Area('Main');
    	$a->display($c);
        ?>
    </div>
</main>




<?php
$this->inc('elements/footer_theme.php');
$this->inc('elements/footer_page.php');
?>
