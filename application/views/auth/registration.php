<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <?= validation_errors(); ?>
            <?= form_open('auth/registration'); ?>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" autofocus="autofocus" value="<?= set_value('firstname'); ?>">
                            <label for="firstName">First name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" value="<?= set_value('lastname'); ?>">
                            <label for="lastName">Last name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email address" value="<?= set_value('email'); ?>">
                    <label for="inputEmail">Email address</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm password">
                            <label for="confirmPassword">Confirm password</label>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url(); ?>auth">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>