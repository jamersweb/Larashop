<!-- BEGIN CONTENT -->
<div class="page-content-wrapper all-page">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 pb-3">
                <span class="text-muted text-uppercase user-heading">Pages</span>
                <a href="{{url('/add-page')}}"><button type="button" class="btn btn-outline-primary rounded">Add
                        New</button></a>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <table>
                    <thead>
                        <tr>
                            <td>
                            <ul class="submenu subsubsub">
                                <li class="all"><a href="users.php">All <span class="count text-muted">(0)</span></a> |</li>
                                <li class="administrator"><a href="users.php?role=administrator">Administrator <span
                                            class="count text-muted">(0)</span></a> |</li>
                                <li class="customer"><a href="users.php?role=customer">Customer <span class="count text-muted">(0)</span></a>
                                    |
                                </li>
                                <li class="wfls-active"><a href="users.php?wf2fa=active">2FA Active <span
                                            class="count text-muted">(0)</span></a> |
                                </li>
                                <li class="wfls-inactive"><a href="users.php?wf2fa=inactive">2FA Inactive <span
                                            class="count text-muted">(0)</span></a></li>
                            </ul>
                            </td>
                            <td class="search-tb-data">
                            <nav class="navbar navbar-light justify-content-end m-0">
                                <form class="form-inline">
                                    <input class="form-control rounded" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-primary rounded" type="submit">Search Users</button>
                                </form>
                            </nav>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table>
                <thead class="tablenav top">
                        <tr>
                            <th>
                            <form class="form-inline">
                                <select class="form-control rounded">
                                    <option>Bulk Action</option>
                                    <option>Delete</option>
                                </select>
                            </form>
                            <button type="button" class="btn btn-outline-primary rounded">Apply</button>
                            </th>
                            <th>
                            <form class="form-inline rounded">
                                <select class="form-control rounded">
                                    <option>Change Role to...</option>
                                    <option>Shop Manager</option>
                                    <option>Customer</option>
                                    <option>Subscriber</option>
                                    <option>Contributor</option>
                                    <option>Author</option>
                                    <option>Editor</option>
                                    <option>Administrator</option>
                                </select>
                            </form>
                            <button type="button" class="btn btn-outline-primary rounded">Change</button>
                            </th>
                            <th colspan="6" class="addnewsss">
                            <nav aria-label="Page navigation example" class="data-table-pagination">
                                <ul class="pagination d-flex justify-content-end m-0">
                                    <li class="page-item">
                                        <a class="page-link rounded" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link rounded" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link rounded" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link rounded" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            </th>
                            <!-- <th></th>
                            <th></th>
                            <th></th> -->
                        </tr>
                    </thead>
                </table>
                <table class="table table-striped">

                <thead>
                    <tr>
                    <th scope="col">
                        <input type="checkbox" aria-label="Checkbox for following text input">
                    </th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Stats</th>
                    <th scope="col">msg</th>
                    <th scope="col">Date</th>
                    <th scope="col">SEO Title</th>
                    <th scope="col">SEO Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pgs as $pages)
                    <tr>
                        <th scope="row" class="checkbox-stripe">
                            <input class="rounded" type="checkbox" aria-label="Checkbox for following text input">
                        </th>
                        <td class="page_spec"><a  class="page_title my-4">{{$pages->title}}</a>
                            <div class="page_edit">
{{--                                {{url('edit-page')}}--}}
{{--                                {{url('/edit-page/').'/'. $pages->id}}--}}
                                <a href="{{url('edit-page',$pages->id)}}">Edit</a>
                                <a href="#">Quick Edit</a>
                                <a href="page_trash/{{$pages->id}}">Trash</a>
                                <a href="#">Duplicate Page</a>
                            </div>
                        </td>
                        <td>{{$pages->author_id}}</td>
                        <td><i class="fas fa-signal"></i></td>
                        <td>__</td>
                        <td class="publish-date">
                            <p>Publish</p>
                            <p>{{$pages->page_publishedAt}}</p>
                        </td>
                        <td>No value</td>
                        <td>No value</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->


<style>
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
