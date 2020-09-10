<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <h2 class="text-muted text-uppercase">add new user</h2>
        <p class="text-muted">Create a brand new user and add them to this site.</p>
        <form class="my-5" method="POST" action="{{url ('/add-new')}}">

            @csrf
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Username <i> (required) </i></b> </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="uname" name="uname" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Email <i> (required) </i> </b></label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="useremail" name="useremail" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> First Name </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="fname" name="fname" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Last Name </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lname"  name="lname" value="" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Password </b></label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="pasword" id="pasword">
                </div>
            </div>
            {{--<div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Send User Notification </b></label>
                <div class="col-sm-6">
                    <input type="checkbox" class="form-control"><span>Send the new user an email about their
                        account.</span>
                </div>
            </div>--}}
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Role </b></label>
                <div class="col-sm-2">
                    <select class="custom-select mr-sm-2" id="userrol" name="userroll">
                        <option value="Customer" selected>Customer</option>
                        <option value="ShopManager">Shop Manager</option>
                        <option value="Subscriber">Subscriber</option>
                        <option value="Contributor">Contributor</option>
                        <option value="Author">Author</option>
                        <option value="Editor">Editor</option>
                        <option value="Administrator">Administrator</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">
                    <button type="submit" class="btn btn-primary" name="adduser" id="adduser">Add New User</button>
                </label>
            </div>
        </form>
    </div>
</div>
<!-- END CONTAINER -->
