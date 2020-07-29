<!doctype html>
<html class="no-js " lang="en">
<head>
  <script src="https://use.fontawesome.com/0a4e4e649d.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="csrf-param" content="_token" />

  <title><?php echo e(config('app.name')); ?> - Login</title>
  <!-- Favicon-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- Custom Css -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

  <div class="authentication">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <form method="POST" action="<?php echo e(route('login')); ?>" class="card auth_form">
            <?php echo csrf_field(); ?>
            <div class="header">
              <img class="logo" src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="">
              <h5>Log in</h5>
            </div>
            <div class="body">
              <div class="input-group mb-3">
                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email" autofocus>

                <div class="input-group-append">
                  <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                </div>

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="input-group mb-3">
                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">

                <div class="input-group-append">
                  <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                </div>

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="checkbox">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label class="form-check-label" for="remember">
                  <?php echo e(__('Remember Me')); ?>

                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                <?php echo e(__('SIGN IN')); ?>

              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-8 col-sm-12">
          <div class="card">
            <img src="<?php echo e(asset('assets/images/signin.svg')); ?>" alt="Sign In"/>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jquery Core Js -->
  <script src="assets/bundles/libscripts.bundle.js"></script>
  <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
</body>
</html><?php /**PATH /var/www/html/cigondewah.site/resources/views/auth/login.blade.php ENDPATH**/ ?>