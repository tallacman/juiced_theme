<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!--   page header code required by html and concrete5    -->


<body>
<div class="<?php echo $c->getPageWrapperClass()?>">
<div class="slicknav-container">

</div>
<div class="container">
    <div class="col-12">
        <?php
        	$a = new GlobalArea('Header Site Title');
        	$a->display();
        ?>

    </div>
</div>

<div class="container">
    <div class="col-12">
        <?php
          $bt = BlockType::getByHandle('autonav');
          $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
          $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
          $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'
          $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
          $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
          $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
          $bt->render('templates/slicknav'); // for template 'templates/template_name';
        ?>
    </div>
</div>
