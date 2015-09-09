<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>

<?php if (Yii::$app->user->isGuest == 1) { ?>
    <body class="page-md login">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="menu-toggler sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
            
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <?= $content ?>


        </div>
    </body>
<?php } else { ?>
<body class="page-md page-quick-sidebar-over-content">

    <header class="page-header">
        <nav class="navbar" role="navigation">
            <div class="container-fluid">
                <div class="havbar-header">
                    <a id="index" class="navbar-brand" href="#">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout6/img/logo.png" alt="Logo">
                    </a>

                    <div class="topbar-actions">

                        <!-- BEGIN USER PROFILE -->
                        <div class="btn-group-img btn-group">
                            <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout5/img/avatar1.jpg" alt="">
                            </button>
                            <ul class="dropdown-menu-v2" role="menu">
                                <li class="active">
                                    <a href="profile.html">My Profile </a>
                                </li>
                                <li>
                                    <?= Html::a('Keluar', ['site/logout']) ?>
                                    
                                </li>
                            </ul>
                        </div>
                        <!-- END USER PROFILE -->
                    </div>
                    <!-- END TOPBAR ACTIONS -->
                </div>
            </div>
            <!--/container-->
        </nav>
    </header>
    <!-- HEADER END -->
    <!-- PAGE CONTENT BEGIN -->
    <div class="container-fluid">
        <div class="page-content page-content-popup">
            <?= $content ?>
        </div>
    </div>



    <!-- END MAIN LAYOUT -->
    <a href="#index" class="go2top"><i class="icon-arrow-up"></i></a>
</body>


<?php } ?>

<?php $this->endBody() ?>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout6/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout6/scripts/quick-sidebar.js" type="text/javascript"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/components-form-tools.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    //Index.init(); // init index page
    ComponentsFormTools.init();
    QuickSidebar.init(); // init quick sidebar
    Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>
</html>
<?php $this->endPage() ?>
