<template>
    <?php
//$mysqli =  mysqli_connect('localhost', 'root','','dailyshop') or die(mysqli_error(''));
//
//if(!$mysqli){
//   echo 'not connect';
//}
//include('./database/function.php');


// print_r($result);
// echo mysqli_num_rows($result);

?>




    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <form action="./database/connect.php" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" class="form-control" name="id" id="sub_id" >
                                <div class="form-group">
                                    <label for="category-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" name="sub_category_name" id="sub_category-name" value="">
                                </div>
                                {{--                            <select class="form-control" name="category_id" id="sel_category_id">--}}
                                {{--                                <option value="">Select Category</option>--}}
                                {{--                                <?php foreach(getCategory() as $cat){ ?>--}}
                                {{--                                    <option value="<?= $cat['category_id'] ?>"><?= $cat['category_name'] ?></option>--}}
                                {{--                                <?php } ?>--}}
                                {{--                            </select>--}}
                                {{--                            <select class="form-control"  name="sub_category_id" id="sub_category_id">--}}
                                {{--                                <option value="">Select Sub Category</option>--}}
                                {{--                                <?php foreach(getsubCategory() as $subcat){--}}
{{--                                    ?>--}}
                                {{--                                    <option value="<?= $subcat['id'] ?>"><?= $subcat['sub_category_name'] ?></option>--}}
                                {{--                                <?php } ?>--}}
                                {{--                            </select>--}}
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Image:</label>
                                    <a id="sub-category-update-output-image" href="" class="fancybox-button" data-rel="fancybox-button">
                                        <img class="img-responsive"
                                             id="sub-category-update-output"
                                             src=""
                                             alt="">
                                    </a>
                                    <input type="file" onchange="subCategoryUpdatLoadFile(event)" name="sub_category_image"  id="sub_category_update_image_upload" accept=".jpg, .png, .tif, .jpeg">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="update_sub_category"  class="btn blue">Save changes</button>
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="modal fade" id="delet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="./database/connect.php" method="post">
                            <div class="modal-body">
                                <input type="hidden" class="form-control" name="category_id" id="delet_category_id" >
                                Are You Sure Delete This Category???
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="delet_category" class="btn btn-danger">DELET</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->
            <!-- <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler">
                </div>
                <div class="toggler-close">
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span>
                            THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body"
                                data-original-title="Default">
                            </li>
                            <li class="color-darkblue tooltips" data-style="darkblue" data-container="body"
                                data-original-title="Dark Blue">
                            </li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body"
                                data-original-title="Blue">
                            </li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body"
                                data-original-title="Grey">
                            </li>
                            <li class="color-light tooltips" data-style="light" data-container="body"
                                data-original-title="Light">
                            </li>
                            <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true"
                                data-original-title="Light 2">
                            </li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span>
                            Theme Style </span>
                        <select class="layout-style-option form-control input-sm">
                            <option value="square" selected="selected">Square corners</option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Layout </span>
                        <select class="layout-option form-control input-sm">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Header </span>
                        <select class="page-header-option form-control input-sm">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Top Menu Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-sm">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Sidebar Mode</span>
                        <select class="sidebar-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-sm">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Sidebar Style </span>
                        <select class="sidebar-style-option form-control input-sm">
                            <option value="default" selected="selected">Default</option>
                            <option value="light">Light</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-sm">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Footer </span>
                        <select class="page-footer-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div> -->
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <!-- <h3 class="page-title">
                Products <small>product listing</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">eCommerce</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown"
                            data-hover="dropdown" data-delay="1000" data-close-others="true">
                            Actions <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">Action</a>
                            </li>
                            <li>
                                <a href="#">Another action</a>
                            </li>
                            <li>
                                <a href="#">Something else here</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="note note-success">
                        <p>
                            NOTE: The below datatable is not connected to a real database so the filter and sorting
                            is just simulated for demo purposes only.
                        </p>
                    </div> -->
                    <!-- Begin: life time stats -->
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Products
                            </div>
                            <!-- <div class="actions">
                                <div class="btn-group">
                                    <a class="btn default yellow-stripe dropdown-toggle" href="javascript:;"
                                        data-toggle="dropdown">
                                        <i class="fa fa-share"></i> Tools <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                Export to Excel </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                Export to CSV </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                Export to XML </a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                Print Invoices </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <div class="portlet-body">
                            <div class="table-container">
                                <table class="table table-striped table-bordered table-hover" id="datatable_products">
                                    <thead>
                                    <tr role="row" class="heading">
                                        <!-- <th width="1%">
                                            <input type="checkbox" class="group-checkable">
                                        </th> -->
                                        <th width="10%">
                                            ID
                                        </th>
                                        <th width="10%">
                                            Sub Category&nbsp;Name
                                        </th>
                                        <th width="10%">
                                            Category Name
                                        </th>
                                        <th width="10%">
                                            Parent Sub Category
                                        </th>
                                        <th width="3%">
                                            Sub Category Image
                                        </th>
                                        <!--  <th width="15%">
                                             Date&nbsp;Created
                                         </th>
                                         <th width="10%">
                                             Status
                                         </th>-->
                                        <th width="10%">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!--                                --><?php
//
//                                    $sql = "SELECT
//                                        third.*, pc.category_name,(
//                                            select  sc.`sub_category_name` from sub_category as sc  where third.`sub_category_id` = sc.`id`
//                                        ) third FROM `sub_category` as third JOIN `productcategories` as pc WHERE third.category_id = pc.`category_id`";
//                                    $result = mysqli_query($mysqli, $sql);
//                                    $sno = 0;
//                                    while($row = mysqli_fetch_assoc($result)){
//                                        // print_r($row);
//                                        $sno = $sno + 1;
//                                        echo '
//                                            <tr role="row">
                                    //                                                <td>'. $sno .'</td>
                                    //                                                <td>'. $row['sub_category_name'] .'</td>
                                    //                                                <td>'. $row['category_name'] .'</td>
                                    //                                                <td>'. $row['third'] .'</td>
                                    //                                                <td>
                                        //                                                    <a id="output-image" href="uploads/'. $row['sub_category_image'] .'"
                                        //                                                                        class="fancybox-button" data-rel="fancybox-button">
                                        //                                                        <img class="img-responsive" src="./uploads/'. $row['sub_category_image'] .'">
                                        //                                                    </a>
                                        //                                                </td>
                                    //                                                <td>
                                        //                                                    <button type="button" name="subcategory" id="'.$row["id"].'" class="edit btn btn-primary">EDIT</button>
                                        //                                                    <button type="button" id="d'.$row["id"].'" class="delet btn btn-danger">Delet</button>
                                        //                                                </td>
                                    //                                            </tr>
                                    //                                        ';
                                    //                                    };
                                    //
                                    //                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End: life time stats -->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->









    <!-- SELECT


    third.*,(
        select  sc.`sub_category_name` from sub_category as sc  where third.`sub_category_id` = sc.`id`
    ) FROM `sub_category` as third  -->

</template>
