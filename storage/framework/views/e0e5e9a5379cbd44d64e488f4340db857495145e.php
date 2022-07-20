

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Register'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Free Register</h5>
                                            <p>Get your free Mucial World account now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="<?php echo e(URL::asset('/assets/images/profile-img.png')); ?>" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <a href="index">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo e(URL::asset('/assets/images/logo.svg')); ?>" alt=""
                                                    class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                </div>
                                <form class="needs-validation" novalidate>
                                    <div class="some-class">
                                        <label for="y">User</label>
                                        <input type="radio" class="radio" name="status" value="1" id="y"
                                            onclick="change_form(1)" />
                                        <label for="z">Company</label>
                                        <input type="radio" class="radio" name="status" value="2" id="z"
                                            onclick="change_form(2)" />
                                    </div>

                                    <div class="user" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">First
                                                        name</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="First name" value="Mark" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Last
                                                        name</label>
                                                    <input type="text" class="form-control" id="validationCustom02"
                                                        placeholder="Last name" value="Otto" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">State</label>
                                                    <select class="form-select" id="validationCustom03" required>
                                                        <option selected disabled value="">Choose...
                                                        </option>
                                                        <option>...</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a valid state.
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="validationCustom04"
                                                        placeholder="City" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Zip</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="Zip" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>Already have an account ? <a href="<?php echo e(route('login')); ?>" class="fw-medium text-primary">
                                    Login</a> </p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Musical World<i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <!-- validation init -->
        <script src="<?php echo e(URL::asset('/assets/js/pages/validation.init.js')); ?>"></script>

        <script src="<?php echo e(URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>

        <script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>
        <script>
            function change_form(val) {
                if (val == 1) {
                    alert('user');
                    $(".user").show();
                    $(".user").removeAttr('hidden');
                } else {
                    $(".user").hide();
                    alert('company');
                }
            }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\musicworld\resources\views/auth/register.blade.php ENDPATH**/ ?>