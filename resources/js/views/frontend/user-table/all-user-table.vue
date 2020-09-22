<template>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-6">
                    <span class="text-muted text-uppercase user-heading">Users</span>
                    <a href="your-profile.php"><button type="button" class="btn btn-primary mb-3 rounded">Add
                        New</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 py-4">
                    <ul class="submenu">
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
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-light justify-content-end m-0">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary my-2 my-sm-0 rounded" type="submit">Search Users</button>
                        </form>
                    </nav>
                </div>
                <div class="col-md-6 py-3">
                    <form class="form-inline">
                        <select class="form-control rounded">
                            <option>Bulk Action</option>
                            <option>Delete</option>
                        </select>
                    </form>
                    <button type="button" class="btn btn-primary mb-2 rounded">Apply</button>

                    <form class="form-inline">
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
                    <button type="button" class="btn btn-primary mb-2 rounded">Change</button>
                </div>
                <div class="col-md-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link " href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"><input type="checkbox"></th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Post</th>
                            <th scope="col">2FA Status</th>
                            <th scope="col">Last Login</th>
                            <th scope="col">Active subscriber?</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTAINER -->
</template>
