<div class="container p-3 mt-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="products_action/register_model.php" method="post">
                <div class="form-group">
                    <input type="text" name="firstName" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <input type="hidden" name="role" class="form-control" value="user">
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Register now </button>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>