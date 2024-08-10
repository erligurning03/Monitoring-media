<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for the form -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5 custom-card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Register User</h1>
                                </div>
                                <form class="user" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" value="{{old('name')}}" class="form-control form-control-user" id="name" name="name" placeholder="input nama anda...">
                                        @error('name')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" value="{{old('email')}}" class="form-control form-control-user" id="email" name="email" placeholder="Input email anda...">
                                        @error('email')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="exampleInputNIDN">NIDN</label>
                                        <input type="text" class="form-control form-control-user" id="exampleInputNIDN" name="nidn" placeholder="input NIDN anda..." required>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="foto">foto</label>
                                        <input type="file" value="{{old('foto')}}" class="form-control form-control-user center-file-input" id="foto" name="foto" accept="image/*">
                                        @error('foto')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" value="{{old('password')}}" class="form-control form-control-user" id="password" name="password" placeholder="input password anda...">
                                        @error('password')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block custom-save-button">
                                        <i class="fas fa-save"></i> Save
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
