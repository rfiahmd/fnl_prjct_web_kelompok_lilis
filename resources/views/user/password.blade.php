<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

    <body>
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('password.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="old_password" />
            </div>
            <div class="mb-3">
                <label>New Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password" />
            </div>
            <div class="mb-3">
                <label>New Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password_confirmation" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Change</button>
                <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
            </div>
        </form>
    </div>
</div>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<script src="../../js/jquery.cookie.js" type="text/javascript"></script>
<!-- inject:js -->
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>

</body>
</html>