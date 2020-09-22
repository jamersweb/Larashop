<template>
    <?php
//
//include('./database/function.php');
//
//?>
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
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->
            <div class="theme-panel hidden-xs hidden-sm">
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
                            <li class="color-light2 tooltips" data-style="light2" data-container="body"
                                data-html="true" data-original-title="Light 2">
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
            </div>
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                Product Edit <small>create & edit product</small>
            </h3>
            <!-- <div class="page-bar">
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
                        <a href="#">Product Edit</a>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle"
                            data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
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
                    <form class="form-horizontal form-row-seperated" enctype="multipart/form-data" method="POST" action="database/connect.php">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">

                                    <i class="fa fa-shopping-cart"></i>Sub Category
                                </div>
                                <div class="actions btn-set">
                                    <!-- <button type="button" name="back" class="btn default"><i
                                            class="fa fa-angle-left"></i> Back</button> -->
                                    <!-- <button class="btn default"><i class="fa fa-reply"></i> Reset</button> -->
                                    <button class="btn green" type="submit" name="sub_category_submit"><i class="fa fa-check"></i> Save</button>
                                    <!-- <button class="btn green"><i class="fa fa-check-circle"></i> Save & Continue -->
                                    Edit</button>
                                    <div class="btn-group">
                                        <a class="btn yellow dropdown-toggle" href="javascript:;"
                                           data-toggle="dropdown">
                                            <i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    Duplicate </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Delete </a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Print </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <a href="#tab_images" data-toggle="tab">
                                                General
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_images">
                                            <div class="alert alert-success margin-bottom-10">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true"></button>
                                                <i class="fa fa-warning fa-lg"></i> Image type and information need
                                                to be specified.
                                            </div>
                                            <div id="tab_images_uploader_container"
                                                 class="text-align-reverse margin-bottom-10">
                                                <a id="tab_images_uploader_pickfiles"  href="javascript:;"
                                                   class="btn yellow">
                                                    <i class="fa fa-plus"></i> Select Files
                                                </a>
                                                <a id="tab_images_uploader_uploadfiles" href="javascript:;"
                                                   class="btn green">
                                                    <i class="fa fa-share"></i> <input type="file" onchange="loadFile(event)" name="sub_category_image"  id="image_upload" accept=".jpg, .png, .tif, .jpeg">
                                                </a>
                                            </div>
                                            <div class="row">
                                                <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
                                                </div>
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr role="row" class="heading">
                                                    <th width="8%">
                                                        Sub Category Image
                                                    </th>
                                                    <th width="25%">
                                                        Sub Category Name
                                                    </th>
                                                    <th width="8%">
                                                        Select Category
                                                    </th>
                                                    <th width="10%">
                                                        Select Sub Category
                                                    </th>
                                                    <!-- <th width="10%">
                                                         Small Image
                                                     </th>
                                                     <th width="10%">
                                                         Thumbnail
                                                     </th>
                                                      <th width="10%">
                                                     </th> -->
                                                </tr>
                                                </thead>
                                                <tbody id="tbody">
                                                <tr>
                                                    <td>
                                                        <a id="output-image" href=""
                                                           class="fancybox-button" data-rel="fancybox-button">
                                                            <img class="img-responsive"
                                                                 id="output"
                                                                 src=""
                                                                 alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="text"  class="form-control"
                                                               name="sub_category_name"
                                                               value="">
                                                    </td>
                                                    <td>
                                                        {{--                                                                <select class="form-control" name="category_id" id="sel_category_id">--}}
                                                        {{--                                                                    <option value="">Select Category</option>--}}
                                                        {{--                                                                    <?php foreach(getCategory() as $cat){ ?>--}}
                                                        {{--                                                                        <option value="<?= $cat['category_id'] ?>"><?= $cat['category_name'] ?></option>--}}
                                                        {{--                                                                    <?php } ?>--}}
                                                        {{--                                                                </select>--}}
                                                        {{--                                                            </td>--}}
                                                    {{--                                                            <td>--}}
                                                    {{--                                                                <select class="form-control"  name="sub_category_id" id="sub_category_id">--}}
                                                        {{--                                                                    <option value="">Select Sub Category</option>--}}
                                                        {{--                                                                    <?php foreach(getsubCategory() as $subcat){--}}
{{--                                                                        print_r($subcat);--}}
{{--                                                                        ?>--}}
                                                        {{--                                                                        <option value="<?= $subcat['id'] ?>"><?= $subcat['sub_category_name'] ?></option>--}}
                                                        {{--                                                                    <?php } ?>--}}
                                                        {{--                                                                </select>--}}
                                                </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->

</template>
