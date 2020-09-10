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
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal form-row-seperated" enctype="multipart/form-data" method="POST" action="database/connect.php">
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-shopping-cart"></i>Test Product
                                    </div>
                                    <div class="actions btn-set">
                                        <!-- <button type="button" name="back" class="btn default"><i
                                                class="fa fa-angle-left"></i> Back</button> -->
                                        <!-- <button class="btn default"><i class="fa fa-reply"></i> Reset</button> -->
                                        <button class="btn green" type="submit" name="product_submit"><i class="fa fa-check"></i> Save</button>
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
                                            <li class="active">
                                                <a href="#tab_general" data-toggle="tab">
                                                    General </a>
                                            </li>
                                            <!-- <li>
                                                <a href="#tab_meta" data-toggle="tab">
                                                    Meta </a>
                                            </li> -->
                                            <li>
                                                <a href="#tab_images" data-toggle="tab">
                                                    Images </a>
                                            </li>
                                            <!-- <li>
                                                <a href="#tab_reviews" data-toggle="tab">
                                                    Reviews <span class="badge badge-success">
                                                        3 </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab_history" data-toggle="tab">
                                                    History </a>
                                            </li> -->
                                        </ul>
                                        <div class="tab-content no-space">
                                            <div class="tab-pane active" id="tab_general">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Name: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="product_name"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Description: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control"
                                                                name="product_longdesc"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Short Description: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control"
                                                                name="product_shortdesc"></textarea>
                                                            <span class="help-block">
                                                                shown in product listing </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Categories: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <div class="form-control height-auto">
                                                                <div class="scroller" style="height:275px;"
                                                                    data-always-visible="1">
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <label><input type="checkbox"
                                                                                    name="product_categoryid"
                                                                                    value="1">Mens</label>
                                                                            <ul class="list-unstyled">
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Footwear</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Clothing</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Accessories</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Fashion
                                                                                        Outlet</label>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox"
                                                                                    name="product_categoryid"
                                                                                    value="1">Football Shirts</label>
                                                                            <ul class="list-unstyled">
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Premier
                                                                                        League</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Football
                                                                                        League</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Serie A</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Bundesliga</label>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox"
                                                                                    name="product_categoryid"
                                                                                    value="1">Brands</label>
                                                                            <ul class="list-unstyled">
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Adidas</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Nike</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Airwalk</label>
                                                                                </li>
                                                                                <li>
                                                                                    <label><input type="checkbox"
                                                                                            name="product_sub_categoriesid"
                                                                                            value="1">Kangol</label>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <span class="help-block">
                                                                select one or more categories </span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label class="col-md-2 control-label">Available Date: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <div class="input-group input-large date-picker input-daterange"
                                                                data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                                <input type="text" class="form-control"
                                                                    name="product[available_from]">
                                                                <span class="input-group-addon">
                                                                    to </span>
                                                                <input type="text" class="form-control"
                                                                    name="product[available_to]">
                                                            </div>
                                                            <span class="help-block">
                                                                availability daterange. </span>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">SKU: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="product_sku"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Price: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                name="product_price" placeholder="">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label class="col-md-2 control-label">Tax Class: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <select
                                                                class="table-group-action-input form-control input-medium"
                                                                name="product[tax_class]">
                                                                <option value="">Select...</option>
                                                                <option value="1">None</option>
                                                                <option value="0">Taxable Goods</option>
                                                                <option value="0">Shipping</option>
                                                                <option value="0">USA</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Status: <span
                                                                class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <select
                                                                class="table-group-action-input form-control input-medium"
                                                                name="product_status">
                                                                <option value="">Select...</option>
                                                                <option value="1">Published</option>
                                                                <option value="0">Not Published</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="tab-pane" id="tab_meta">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Meta Title:</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control maxlength-handler"
                                                                name="product[meta_title]" maxlength="100"
                                                                placeholder="">
                                                            <span class="help-block">
                                                                max 100 chars </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Meta Keywords:</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control maxlength-handler" rows="8"
                                                                name="product[meta_keywords]"
                                                                maxlength="1000"></textarea>
                                                            <span class="help-block">
                                                                max 1000 chars </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Meta Description:</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control maxlength-handler" rows="8"
                                                                name="product[meta_description]"
                                                                maxlength="255"></textarea>
                                                            <span class="help-block">
                                                                max 255 chars </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="tab-pane" id="tab_images">
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
                                                        <i class="fa fa-share"></i> <input type="file" onchange="loadFile(event)" name="product_image"  id="image_upload" accept=".jpg, .png, .tif, .jpeg">
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
                                                                Image
                                                            </th>
                                                            <th width="25%">
                                                                Label
                                                            </th>
                                                            <!-- <th width="8%">
                                                                Sort Order
                                                            </th>
                                                            <th width="10%">
                                                                Base Image
                                                            </th>
                                                            <th width="10%">
                                                                Small Image
                                                            </th>
                                                            <th width="10%">
                                                                Thumbnail
                                                            </th> -->
                                                            <th width="10%">
                                                            </th>
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
                                                                    name="product_thumb"
                                                                    value="">
                                                            </td> 
                                                            <!-- <td>
                                                                <input type="text" class="form-control"
                                                                    name="product[images][1][sort_order]" value="1">
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][1][image_type]" value="1">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][1][image_type]" value="2">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][1][image_type]" value="3"
                                                                        checked>
                                                                </label>
                                                            </td>-->
                                                            <!-- <td>
                                                                <a href="javascript:;" class="btn default btn-sm">
                                                                    <i class="fa fa-times"></i> Remove </a>
                                                            </td> -->
                                                        </tr>
                                                        <!-- <tr>
                                                            <td>
                                                                <a href="./assets/admin/pages/media/works/img2.jpg"
                                                                    class="fancybox-button" data-rel="fancybox-button">
                                                                    <img class="img-responsive"
                                                                        src="./assets/admin/pages/media/works/img2.jpg"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    name="product[images][2][label]"
                                                                    value="Product image #1">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    name="product[images][2][sort_order]" value="1">
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][2][image_type]" value="1">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][2][image_type]" value="2"
                                                                        checked>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][2][image_type]" value="3">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:;" class="btn default btn-sm">
                                                                    <i class="fa fa-times"></i> Remove </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="./assets/admin/pages/media/works/img3.jpg"
                                                                    class="fancybox-button" data-rel="fancybox-button">
                                                                    <img class="img-responsive"
                                                                        src="./assets/admin/pages/media/works/img3.jpg"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    name="product[images][3][label]"
                                                                    value="Product image #2">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    name="product[images][3][sort_order]" value="1">
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][3][image_type]" value="1"
                                                                        checked>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][3][image_type]" value="2">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="radio"
                                                                        name="product[images][3][image_type]" value="3">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:;" class="btn default btn-sm">
                                                                    <i class="fa fa-times"></i> Remove </a>
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <div class="tab-pane" id="tab_reviews">
                                                <div class="table-container">
                                                    <table class="table table-striped table-bordered table-hover"
                                                        id="datatable_reviews">
                                                        <thead>
                                                            <tr role="row" class="heading">
                                                                <th width="5%">
                                                                    Review&nbsp;#
                                                                </th>
                                                                <th width="10%">
                                                                    Review&nbsp;Date
                                                                </th>
                                                                <th width="10%">
                                                                    Customer
                                                                </th>
                                                                <th width="20%">
                                                                    Review&nbsp;Content
                                                                </th>
                                                                <th width="10%">
                                                                    Status
                                                                </th>
                                                                <th width="10%">
                                                                    Actions
                                                                </th>
                                                            </tr>
                                                            <tr role="row" class="filter">
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control form-filter input-sm"
                                                                        name="product_review_no">
                                                                </td>
                                                                <td>
                                                                    <div class="input-group date date-picker margin-bottom-5"
                                                                        data-date-format="dd/mm/yyyy">
                                                                        <input type="text"
                                                                            class="form-control form-filter input-sm"
                                                                            readonly name="product_review_date_from"
                                                                            placeholder="From">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-sm default"
                                                                                type="button"><i
                                                                                    class="fa fa-calendar"></i></button>
                                                                        </span>
                                                                    </div>
                                                                    <div class="input-group date date-picker"
                                                                        data-date-format="dd/mm/yyyy">
                                                                        <input type="text"
                                                                            class="form-control form-filter input-sm"
                                                                            readonly name="product_review_date_to"
                                                                            placeholder="To">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-sm default"
                                                                                type="button"><i
                                                                                    class="fa fa-calendar"></i></button>
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control form-filter input-sm"
                                                                        name="product_review_customer">
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control form-filter input-sm"
                                                                        name="product_review_content">
                                                                </td>
                                                                <td>
                                                                    <select name="product_review_status"
                                                                        class="form-control form-filter input-sm">
                                                                        <option value="">Select...</option>
                                                                        <option value="pending">Pending</option>
                                                                        <option value="approved">Approved</option>
                                                                        <option value="rejected">Rejected</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="margin-bottom-5">
                                                                        <button
                                                                            class="btn btn-sm yellow filter-submit margin-bottom"><i
                                                                                class="fa fa-search"></i>
                                                                            Search</button>
                                                                    </div>
                                                                    <button class="btn btn-sm red filter-cancel"><i
                                                                            class="fa fa-times"></i> Reset</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> -->
                                            <!-- <div class="tab-pane" id="tab_history">
                                                <div class="table-container">
                                                    <table class="table table-striped table-bordered table-hover"
                                                        id="datatable_history">
                                                        <thead>
                                                            <tr role="row" class="heading">
                                                                <th width="25%">
                                                                    Datetime
                                                                </th>
                                                                <th width="55%">
                                                                    Description
                                                                </th>
                                                                <th width="10%">
                                                                    Notification
                                                                </th>
                                                                <th width="10%">
                                                                    Actions
                                                                </th>
                                                            </tr>
                                                            <tr role="row" class="filter">
                                                                <td>
                                                                    <div class="input-group date datetime-picker margin-bottom-5"
                                                                        data-date-format="dd/mm/yyyy hh:ii">
                                                                        <input type="text"
                                                                            class="form-control form-filter input-sm"
                                                                            readonly name="product_history_date_from"
                                                                            placeholder="From">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-sm default date-set"
                                                                                type="button"><i
                                                                                    class="fa fa-calendar"></i></button>
                                                                        </span>
                                                                    </div>
                                                                    <div class="input-group date datetime-picker"
                                                                        data-date-format="dd/mm/yyyy hh:ii">
                                                                        <input type="text"
                                                                            class="form-control form-filter input-sm"
                                                                            readonly name="product_history_date_to"
                                                                            placeholder="To">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-sm default date-set"
                                                                                type="button"><i
                                                                                    class="fa fa-calendar"></i></button>
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control form-filter input-sm"
                                                                        name="product_history_desc" placeholder="To" />
                                                                </td>
                                                                <td>
                                                                    <select name="product_history_notification"
                                                                        class="form-control form-filter input-sm">
                                                                        <option value="">Select...</option>
                                                                        <option value="pending">Pending</option>
                                                                        <option value="notified">Notified</option>
                                                                        <option value="failed">Failed</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="margin-bottom-5">
                                                                        <button
                                                                            class="btn btn-sm yellow filter-submit margin-bottom"><i
                                                                                class="fa fa-search"></i>
                                                                            Search</button>
                                                                    </div>
                                                                    <button class="btn btn-sm red filter-cancel"><i
                                                                            class="fa fa-times"></i> Reset</button>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> -->
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
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
            <div class="page-quick-sidebar-wrapper">
                <div class="page-quick-sidebar">
                    <div class="nav-justified">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#quick_sidebar_tab_1" data-toggle="tab">
                                    Users <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_2" data-toggle="tab">
                                    Alerts <span class="badge badge-success">7</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                    More<i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-bell"></i> Alerts </a>
                                    </li>
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-info"></i> Notifications </a>
                                    </li>
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-speech"></i> Activities </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                            <i class="icon-settings"></i> Settings </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd"
                                    data-wrapper-class="page-quick-sidebar-list">
                                    <h3 class="list-heading">Staff</h3>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">8</span>
                                            </div>
                                            <img class="media-object" src="./assets/admin/layout/img/avatar3.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Bob Nilson</h4>
                                                <div class="media-heading-sub">
                                                    Project Manager
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="./assets/admin/layout/img/avatar1.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Nick Larson</h4>
                                                <div class="media-heading-sub">
                                                    Art Director
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">3</span>
                                            </div>
                                            <img class="media-object" src="./assets/admin/layout/img/avatar4.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Deon Hubert</h4>
                                                <div class="media-heading-sub">
                                                    CTO
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="./assets/admin/layout/img/avatar2.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Ella Wong</h4>
                                                <div class="media-heading-sub">
                                                    CEO
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">Customers</h3>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">2</span>
                                            </div>
                                            <img class="media-object" src="./assets/admin/layout/img/avatar6.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Lara Kunis</h4>
                                                <div class="media-heading-sub">
                                                    CEO, Loop Inc
                                                </div>
                                                <div class="media-heading-small">
                                                    Last seen 03:10 AM
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="label label-sm label-success">new</span>
                                            </div>
                                            <img class="media-object" src="./assets/admin/layout/img/avatar7.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Ernie Kyllonen</h4>
                                                <div class="media-heading-sub">
                                                    Project Manager,<br> SmartBizz PTL
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="./assets/admin/layout/img/avatar8.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Lisa Stone</h4>
                                                <div class="media-heading-sub">
                                                    CTO, Keort Inc
                                                </div>
                                                <div class="media-heading-small">
                                                    Last seen 13:10 PM
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">7</span>
                                            </div>
                                            <img class="media-object" src="./assets/admin/layout/img/avatar9.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Deon Portalatin</h4>
                                                <div class="media-heading-sub">
                                                    CFO, H&D LTD
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="media-object" src="./assets/admin/layout/img/avatar10.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Irina Savikova</h4>
                                                <div class="media-heading-sub">
                                                    CEO, Tizda Motors Inc
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">4</span>
                                            </div>
                                            <img class="media-object" src="./assets/admin/layout/img/avatar11.jpg"
                                                alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading">Maria Gomez</h4>
                                                <div class="media-heading-sub">
                                                    Manager, Infomatic Inc
                                                </div>
                                                <div class="media-heading-small">
                                                    Last seen 03:10 AM
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="page-quick-sidebar-item">
                                    <div class="page-quick-sidebar-chat-user">
                                        <div class="page-quick-sidebar-nav">
                                            <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i
                                                    class="icon-arrow-left"></i>Back</a>
                                        </div>
                                        <div class="page-quick-sidebar-chat-user-messages">
                                            <div class="post out">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body">
                                                        When could you send me the report ? </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Ella Wong</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body">
                                                        Its almost done. I will be sending it shortly </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:15</span>
                                                    <span class="body">
                                                        Alright. Thanks! :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Ella Wong</a>
                                                    <span class="datetime">20:16</span>
                                                    <span class="body">
                                                        You are most welcome. Sorry for the delay. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body">
                                                        No probs. Just take your time :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Ella Wong</a>
                                                    <span class="datetime">20:40</span>
                                                    <span class="body">
                                                        Alright. I just emailed it to you. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body">
                                                        Great! Thanks. Will check it right away. </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Ella Wong</a>
                                                    <span class="datetime">20:40</span>
                                                    <span class="body">
                                                        Please let me know if you have any comment. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt=""
                                                    src="./assets/admin/layout/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                                    <span class="datetime">20:17</span>
                                                    <span class="body">
                                                        Sure. I will check and buzz you if anything needs to be
                                                        corrected. </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-quick-sidebar-chat-user-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Type a message here...">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn blue"><i
                                                            class="icon-paper-clip"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                <div class="page-quick-sidebar-alerts-list">
                                    <h3 class="list-heading">General</h3>
                                    <ul class="feeds list-items">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 4 pending tasks. <span
                                                                class="label label-sm label-warning ">
                                                                Take action <i class="fa fa-share"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    Just now
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Finance Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received with <span
                                                                class="label label-sm label-success">
                                                                Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    30 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Web server hardware needs to be upgraded. <span
                                                                class="label label-sm label-warning">
                                                                Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    2 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                IPO Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">System</h3>
                                    <ul class="feeds list-items">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 4 pending tasks. <span
                                                                class="label label-sm label-warning ">
                                                                Take action <i class="fa fa-share"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    Just now
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Finance Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received with <span
                                                                class="label label-sm label-success">
                                                                Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    30 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 5 pending membership that requires a quick review.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Web server hardware needs to be upgraded. <span
                                                                class="label label-sm label-default ">
                                                                Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    2 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                IPO Report for year 2013 has been released.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                <div class="page-quick-sidebar-settings-list">
                                    <h3 class="list-heading">General Settings</h3>
                                    <ul class="list-items borderless">
                                        <li>
                                            Enable Notifications <input type="checkbox" class="make-switch" checked
                                                data-size="small" data-on-color="success" data-on-text="ON"
                                                data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Allow Tracking <input type="checkbox" class="make-switch" data-size="small"
                                                data-on-color="info" data-on-text="ON" data-off-color="default"
                                                data-off-text="OFF">
                                        </li>
                                        <li>
                                            Log Errors <input type="checkbox" class="make-switch" checked
                                                data-size="small" data-on-color="danger" data-on-text="ON"
                                                data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Auto Sumbit Issues <input type="checkbox" class="make-switch"
                                                data-size="small" data-on-color="warning" data-on-text="ON"
                                                data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Enable SMS Alerts <input type="checkbox" class="make-switch" checked
                                                data-size="small" data-on-color="success" data-on-text="ON"
                                                data-off-color="default" data-off-text="OFF">
                                        </li>
                                    </ul>
                                    <h3 class="list-heading">System Settings</h3>
                                    <ul class="list-items borderless">
                                        <li>
                                            Security Level
                                            <select class="form-control input-inline input-sm input-small">
                                                <option value="1">Normal</option>
                                                <option value="2" selected>Medium</option>
                                                <option value="e">High</option>
                                            </select>
                                        </li>
                                        <li>
                                            Failed Email Attempts <input
                                                class="form-control input-inline input-sm input-small" value="5" />
                                        </li>
                                        <li>
                                            Secondary SMTP Port <input
                                                class="form-control input-inline input-sm input-small" value="3560" />
                                        </li>
                                        <li>
                                            Notify On System Error <input type="checkbox" class="make-switch" checked
                                                data-size="small" data-on-color="danger" data-on-text="ON"
                                                data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>
                                            Notify On SMTP Error <input type="checkbox" class="make-switch" checked
                                                data-size="small" data-on-color="warning" data-on-text="ON"
                                                data-off-color="default" data-off-text="OFF">
                                        </li>
                                    </ul>
                                    <div class="inner-content">
                                        <button class="btn btn-success"><i class="icon-settings"></i> Save
                                            Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->