<x-backend.layouts.master-login>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        ">
        <div class="auth-box bg-dark border-top border-secondary">
            <div>
                <div class="text-center pt-3 pb-3">
                    <span class="db"><img src="{{asset('ui/frontend/assets/images/logo.png')}}" alt="logo" /></span>
                </div>
                @if(session('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('error') }}</strong>
                    <button type=" button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- Form -->
                <form class="form-horizontal mt-3" action="{{ route('admin.registerprocess') }}" method="POST">
                    @csrf
                    <div class=" row pb-4">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i
                                            class="mdi mdi-account fs-4"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" value="{{old('name')}}"
                                    name="name" required />
                            </div>
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white h-100" id="basic-addon1"><i
                                            class="mdi mdi-email fs-4"></i></span>
                                </div>
                                <input type="email" class="form-control form-control-lg" placeholder="Email Address"
                                    aria-label="Username" aria-describedby="basic-addon1" value="{{old('email')}}"
                                    name="email" equired />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i
                                            class="mdi mdi-lock fs-4"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Password"
                                    aria-label="Password" name="password" aria-describedby="basic-addon1"
                                    value="{{old('name')}}" required />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white h-100" id="basic-addon2"><i
                                            class="mdi mdi-lock fs-4"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Confirm Password"
                                    aria-label="Password" aria-describedby="basic-addon1" name="confirm_password"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3 d-grid">
                                    <button class="btn btn-block btn-lg btn-info" type="submit">
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $(".preloader").fadeOut();
    </script>
</x-backend.layouts.master-login>