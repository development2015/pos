<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = 'POS';
$this->params['breadcrumbs'][] = $this->title;
?>
            <!-- BEGIN PAGE CONTENT FIXED -->
            <div class="page-content-fixed-header">
                <ul class="page-breadcrumb">
                    <li>Applications</li>
                </ul>

            </div>

            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

                        <li class="active">
                            <a href="<?php echo Yii::$app->request->baseUrl; ?>">
                            <i class="icon-list"></i>
                            <span class="title">Dashboard</span>
                            </a>
                        </li>


                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->

            <div class="page-fixed-main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class="portlet light bordered">

                            <div class="portlet-body">
                                <div class="table-scrollable table-scrollable-borderless boxPajax">

                                    <table class="table table-hover table-light">
                                    <thead>
                                    <tr class="uppercase">

                                        <th>
                                             Items
                                        </th>
                                        <th>
                                             Quantity
                                        </th>
                                        <th>
                                             Price / Unit (RM)
                                        </th>
                                        <th>
                                             Price (RM)
                                        </th>
                                    </tr>
                                    </thead>
                                    <?php 
                                     $sum = $sum_quantity = 0; 

                                    foreach ($goods as $key => $value) {  ?>
                                        <tr>
                                   
                        
                                            <td><?php echo $value['items']; ?></td>
                                            <td>

                                            <div  class="spinner3">
                                                <div class="input-group" style="width:150px;">
                                                    <input type="text" class="spinner-input form-control valueq"  value="<?php echo $q = $value['quantity']; $sum_quantity+= $q;?>" maxlength="3" readonly>
                                                    <input type="hidden" class="valuer" value="<?php echo $value['id']; ?>" >
                                                    <div class="spinner-buttons input-group-btn">
                                                        <button type="button" class="btn spinner-up default plus">
                                                        <i class="fa fa-angle-up"></i>
                                                        </button>
                                                        <button type="button" class="btn spinner-down default minus">
                                                        <i class="fa fa-angle-down"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                                
                    

                                            </td>
                                            <td><?php echo $value['price']; ?></td>
                                            <td><?php echo $total =  $q * $value['price']; $sum+= $total; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tfoot>
                                        <tr>
                                          <td colspan="2"><b>Jumlah</b></td>
                                          <td><b></b></td>
                                          <td><b><?php echo $sum; ?></b></td>
                              

                                        </tr>
                                    </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class="portlet light bordered">

                            <div class="portlet-body">
                                
                                <input type="text" class="form-control input-lg numpad" id="numpad" readonly="readonly">

                                <br>

                                <style type="text/css">

                                #size {
                                    width: 50px;
                                    height: 50px;
                                }

                                #size0 {
                                    width: 108px;
                                    height: 50px;
                                }

                                </style>
                                <div id="btn">
                                    <button type="button" id="size" value="7" class="btn btn-default num7">7</button>
                                    <button type="button" id="size" value="8" class="btn btn-default num8">8</button>
                                    <button type="button" id="size" value="9" class="btn btn-default num9">9</button>
                                    <button type="button" id="size" class="btn btn-default clear">C</button>
                                    <br><br>
                                    <button type="button" id="size" value="4" class="btn btn-default num4">4</button>
                                    <button type="button" id="size" value="5" class="btn btn-default num5">5</button>
                                    <button type="button" id="size" value="6" class="btn btn-default num6">6</button>
                                    <button type="button" id="size" value="." class="btn btn-default numPoint">.</button>
                                    <br><br>
                                    <button type="button" id="size" value="1" class="btn btn-default num1">1</button>
                                    <button type="button" id="size" value="2" class="btn btn-default num2">2</button>
                                    <button type="button" id="size" value="3" class="btn btn-default num3">3</button>

                                    <br><br>
                                    <button type="button" id="size" value="0" class="btn btn-default num0">0</button>
                                    <button type="button" id="size0" class="btn btn-default enter">Enter</button>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                    <div class="col-md-8">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class="portlet light bordered">

                            <div class="portlet-body">

                                <div class="well">


                                    <div class="row static-info">
                                        <div class="col-md-8 name">
                                            Kuantiti : 
                                        </div>
                                        <div class="col-md-3 name">
                                            <?php echo $sum_quantity; ?>
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-8 name">
                                            Jumlah : 
                                        </div>
                                        <div class="col-md-3 name">
                                            RM <?php echo $sum; ?>
                                            <input type="hidden" name="sum" class="sum" value="<?php echo $sum; ?>">
                                        </div>
                                    </div>   
                                    <div class="row static-info">
                                        <div class="col-md-8 name">
                                            Tunai : 
                                        </div>
                                        <div class="col-md-3 name">
                                             RM <span class="cash"></span>
                                        </div>
                                    </div>  
                                    <div class="row static-info">
                                        <div class="col-md-8 name">
                                            Baki : 
                                        </div>
                                        <div class="col-md-3 value">
                                            RM <span class="total"></span>
                                        </div>
                                    </div>



                                </div>
                                <br>
                                <style type="text/css">

                                #sizelg {
                                    width: 204px;
                                    height: 100px;
                                }


                                </style>
                                <button type="button" id="sizelg" class="btn default btn-lg">Etc</button>
                                <button type="button" id="sizelg" class="btn default btn-lg pay">Bayar</button>
                                <button type="button" id="sizelg" class="btn default btn-lg">Print</button>
                               
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>




            </div>
            <!-- END PAGE CONTENT FIXED -->

            <!-- Copyright BEGIN -->
            <p class="copyright-v2">2015 © Metronic by keenthemes. 
                
            </p>
            <!-- Copyright END -->

                          



   
                            

              