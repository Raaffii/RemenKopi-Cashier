<body>
    <div class="container-scroller d-flex">
        <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <a href="<?= base_url('auth') ?>">
                                < kembali</a>
                                    <h4>New here?</h4>
                                    <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
                                    <form class="pt-3" method="post" action="<?= base_url('auth/register') ?>">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                                            <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                    <span class="input-group-text bg-transparent border-right-0">
                                                        <i class="mdi mdi-account-outline text-primary"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control form-control-lg border-left-0" placeholder="name" name="name">


                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                            <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                    <span class="input-group-text bg-transparent border-right-0">
                                                        <i class="mdi mdi-account-outline text-primary"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control form-control-lg border-left-0" placeholder="Username" name="username">


                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                            <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                    <span class="input-group-text bg-transparent border-right-0">
                                                        <i class="mdi mdi-email-outline text-primary"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control form-control-lg border-left-0" placeholder="Email" name="email">


                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                    <span class="input-group-text bg-transparent border-right-0">
                                                        <i class="mdi mdi-lock-outline text-primary"></i>
                                                    </span>
                                                </div>

                                                <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="password">


                                            </div>
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                            <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                    <span class="input-group-text bg-transparent border-right-0">
                                                        <i class="mdi mdi-lock-outline text-primary"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Confirm Password" name="password1">


                                            </div>
                                        </div>

                                        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Daftar</button>

                                    </form>
                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-none d-lg-flex flex-row">
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>