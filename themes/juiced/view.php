<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header_page.php');
$this->inc('elements/header_theme.php');
?>


<!--  basic page structure   -->

<div class="container">
    <div class="col-12">
        <?php print $innerContent; ?> 
    </div>
</div>




<?php
$this->inc('elements/footer_theme.php');
$this->inc('elements/footer_page.php');
?>
