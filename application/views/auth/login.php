<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="mx-4 mt-3"><?= $this->session->flashdata('message'); ?></div>
        <div class="card-body">
            <?= validation_errors(); ?>
            <?= form_open('auth'); ?>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email address" autofocus="autofocus" value="<?= set_value('email'); ?>">
                    <label for="inputEmail">Email address</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <label for="inputPassword">Password</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url(); ?>auth/registration">Register an Account</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>