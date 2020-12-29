<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginmodal"> Launch demo modal </button> -->
<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginmodalLabel">LogIn Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="handlelogin.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="loginemail" name="loginemail" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="loginpassword" id="exampleInputPassword1">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
