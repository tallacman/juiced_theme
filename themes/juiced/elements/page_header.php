<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!--   page header code required by html and concrete5    -->
<!doctype html>
<html class="no-js" lang="<?php echo Localization::activeLanguage()?>">
<head>
<?php  Loader::element('header_required'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css>

<?php echo $html->css($view->getStylesheet('main.less'))?>

<!--  this gets moved to the main.less file on publishing     -->
<link rel="stylesheet" href="<?php echo $this->getThemePath()?>css/theme.css" />


<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>
