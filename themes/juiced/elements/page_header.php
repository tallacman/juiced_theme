<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!doctype html>
<!--   page header code required by html and concrete5    -->

<html class="no-js" lang="<?php echo Localization::activeLanguage()?>">
<!--  no jus used by modernizr :: language defined by c5 settings     -->

<head>
<?php  Loader::element('header_required'); ?>
<!--  first element after head tag     -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--  sets the page for media calls for responsiveness     -->
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css>

<?php echo $html->css($view->getStylesheet('main.less'))?>
<!--   less file concatinates all the styles; compressible by c5     -->

<link rel="stylesheet" href="<?php echo $this->getThemePath()?>css/theme.css" />
<!--  this gets moved to the main.less file on publishing     -->

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>
