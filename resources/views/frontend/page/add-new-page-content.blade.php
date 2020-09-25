<!-- BEGIN CONTENT -->
<div class="page-content-wrapper add-page">
    <div class="page-content">
{{--        @if(session()->has('success'))--}}
{{--            <div class="alert success">--}}
{{--                {{session()->get('success')}}--}}
{{--            </div>--}}
{{--        @endif--}}
        <form action="{{ route('page.store') }}" method="POST">
            @csrf

            <div class="row py-2">
                <div class="col-sm-12">
                    <h2>Add Page</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="row py-1">
                        <div class="col-sm-12">
                            <div class="input-group titlewrap">
                                <input type="text" name="author_id" value="{{old('author_id')}}" class="form-control rounded" placeholder="AUTHOR ID" aria-label="Title" aria-describedby="basic-addon2">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group titlewrap">
                                <input type="text" name="title" value="{{old('title')}}" class="form-control rounded" placeholder="Title" aria-label="Title" aria-describedby="basic-addon2">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group titlewrap">
                                <input type="text" name="slug" value="{{old('slug')}}" class="form-control rounded" placeholder="Title" aria-label="Title" aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-sm-12">
                            <form action="#" class="form-horizontal form-bordered">
                                <div class="form-body">
                                    <div class="form-group last">
                                        <div class="col-md-12">
                                            <textarea class="ckeditor form-control" name="description" value="{{old('description')}} rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row postbox-container py-1">
                        <div class="col-sm-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box grey">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Custom Fields
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Add Custom Fields </p>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Value
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <select class="custom-select rounded ">
                                                    <option selected>no parent</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Enter new</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">
                                                    <button type="button" class="btn btn-outline-primary rounded">Add Custom Field</button>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="major-publishing-actions">
                                    <p>Custom fields can be used to add extra metadata to a post that you can
                                        <a href="#"> use in your theme</a>
                                    </p>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>


                    <div class="row postbox-container py-1">
                        <div class="col-sm-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box grey">
                                <div class="portlet-title">
                                    <div class="caption">
                                        SEO Tool
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> Title</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded" name="meta_title" value="{{old('meta_title')}}" placeholder="About us" aria-label="About us" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group seo-limit py-1">
                                                <input type="text" class="form-control rounded" aria-label="" aria-describedby="basic-addon1">
                                                <span> characters. Most search engines use a maximum of 60 chars for the title.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> Description</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                            <div class="input-group seo-limit py-1">
                                                <input type="text" class="form-control rounded" aria-label="" aria-describedby="basic-addon1">
                                                <span> characters. Most search engines use a maximum of 160 chars for the title.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> Custom Canonical URL</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded" placeholder="About us" aria-label="About us" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> NOINDEX this page/post</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> NOFOLLOW this page/post</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> Exclude From Sitemap</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> Sitemap Priority</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> Sitemap Frequency</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-sm-4">
                                            <p><i class="fas fa-key"></i> Exclude From Sitemap</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="row ">
                        <div class="col-sm-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box grey">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Publish
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <input type="hidden" name="publishedAt" value="{{old('publishedAt')}}">
                                    <span>
                                    <a href="">
                                        <button type="submit" class="save-action btn btn-outline-primary rounded">Save Draft</button>
                                    </a>
                                </span>
                                    <span>
                                    <a href="">
                                        <button type="button" class="preview-action btn btn-outline-primary rounded">Preview</button>
                                    </a>
                                </span>
                                    <div class="py-1">
                                        <i class="fas fa-key"></i> Status:
                                        <span>Draft</san>
                                            <a href="#">Edit</a>
                                    </div>
                                    <div class="py-1">
                                        <i class="far fa-eye"></i> Visibility:
                                        <span>Public</span>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div class="py-1">
                                        <i class="fas fa-calendar-minus"></i> Publish Immediately
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>
                                        <select class="custom-select rounded " name="status" value="{{old('status')}}">
                                            <option selected>no status</option>
                                            <option value="1">enabled</option>
                                            <option value="2">disalbed</option>
                                        </select>
                                    </div>
                                    <a href="">
                                        <button type="submit" class="publish btn btn-primary rounded">Publish</button>
                                    </a>
                                </div>

                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <div class="row" id="pageparentdiv">
                        <div class="col-sm-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box grey">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Page Attributes
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="py-1">
                                        Parent <br>
                                        <select class="custom-select rounded" name="category_id" value="{{old('category_id')}}">
                                            <option selected>no parent</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="py-1">
                                        Template <br>
                                        <select class="custom-select rounded">
                                            <option selected>Default Template</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="py-1">
                                        Order <br>
                                        <div class="input-group ">
                                            <input type="number" class="form-control rounded" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        </select>
                                    </div>
                                    <p class="post-attributes-help-text">
                                        Need help? Use the Help tab above the screen title.
                                    </p>


                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <div class="row" id="postimagediv">
                        <div class="col-sm-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box grey">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Featured image
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="">
                                        <a href="#">Set featured image</a>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="img" value="{{old('img')}}" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
<!-- END CONTAINER -->


<!-- <style>
        .page_edit {
    padding: 0;
    display:none;
}

     tr:hover .page_edit{
    display:block;
}
td.page_spec {
    width: 500px;
    /* line-height:0.5; */
}
table.table.table-striped .publish-date p {
    margin: 0;
}
.page_edit a {
    border-right: 1px solid #357ebd;
    padding-right: 2px;
}
.table-striped > tbody > :nth-child(odd) {
    background-color: #f9f9f9 !important;
}
    </style>
  -->
