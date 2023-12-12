<!-- Background Overlay -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;">
</div>

@extends('layout.layout_user')

@section('container')
    <div id="container-fluid mt-5">
        <div class="container-fluid mt-5">

            <link rel="stylesheet" type="text/css"
                href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.1.5/css/iziToast.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.1.5/js/iziToast.min.js"></script>
            <script>
                iziToast.({
                    title: "",
                    message: "",
                });
            </script>

            <div class="container-fluid mt-5">
                <div class="justify-content-center" style="display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px">
                    <div class="col-md-7 col-xs-12 col-sm-12" style="margin-top:50px">
                        <div class="card" style="border-radius:5px">
                            <div class="card-header" style="background-color:#0b56a7;color:#fff;">Login</div>

                            <div class="card-body">
                                <form method="POST" action="https://booking.kai.id/auth/login" data-toggle="validator"
                                    autocomplete="on" novalidate="true">
                                    <input type="hidden" name="_token" value="3XnJlAsSPEZQj4AqODiRluH9woUDRGGVj1f7a8wC">
                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                        <div class="col-md-6">

                                            <div class="input-group">
                                                <input id="username" type="username" class="form-control " name="username"
                                                    value="" placeholder="Email atau Nomor HP" required=""
                                                    data-error="Username wajib diisi.">
                                            </div>
                                            <div class="help-block with-errors text-danger"></div>

                                        </div>
                                    </div>

                                    <!-- password -->
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input id="password" type="password" class="form-control pass "
                                                    name="password" placeholder="Password" required=""
                                                    data-error="Password wajib diisi.">
                                                <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                                            </div>
                                            <div class="help-block with-errors text-danger"></div>
                                        </div>
                                    </div>



                                    <!-- Login -->
                                    <div class="form-group row">
                                        <div class="col-md-8 offset-md-6">
                                            <button id="btnLogin" type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of content-wrapper -->
    </div>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
