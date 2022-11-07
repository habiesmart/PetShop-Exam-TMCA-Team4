<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Reset Passord</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    {{-- date picker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/Stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/Stisla/assets/css/components.css') }}">
    @yield('style')
</head>

<body style="overflow-x: hidden;">
    <section class="section">
        <div class="section-header bg-primary">
            <div class="mx-auto">
                <img src="{{ asset('/img/logo.png') }}" height="35">
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                        <div id="error" style="display: none;" class="alert-box alert bg-danger"><i class="fa fa-lg fa-exclamation-circle"></i><span id="error-info"></span></div>
                        @foreach ($errors->all() as $error)
                            <div class="alert-box alert bg-danger"><i class="fa fa-lg fa-exclamation-circle"></i>{{ $error }}</div>
                        @endforeach
                        <h2 class="text-center"><b>Reset Password</b></h2>
                        <div class="card" style="background-color:#c6d0d9">
                            <form action="{{ route('Resetting-Password') }}" autocomplete="off" method="post" onsubmit="return false;">
                            @csrf
                            <div class="card-body" style="padding-bottom: 0;">

                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" id="name" name="name" class="form-control purchase-code" autocomplete="off" aria-autocomplete="none" placeholder="Input Username. Example: habiesmart">
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-success float-right"><i class="fas fa-search"></i> Cari User</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="after-checking-user" style="display: none;">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="password" class="form-control pwstrength" autocomplete="new-password"
                                                data-indicator="pwindicator">
                                        </div>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="captcha">Captcha</label>
                                        <span id="captcha-span"><img
                                                src="data:image/png;base64,{!! base64_encode(captcha()->getContent()) !!}"></span>
                                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <label for="captcha">Enter Captcha</label>
                                        <input id="captcha" type="text" class="form-control" autocomplete="off"
                                            placeholder="Enter Captcha" name="captcha">
                                    </div>
    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6 text-center">
                                                {{-- <a href="" class="text-danger" style="text-decoration: underline">Forgot Password</a> --}}
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="form-control btn-outline-danger" onclick="this.form.submit();">Reset Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <div class="card-footer text-muted" style="padding: 0 20px">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
                                            <hr style="margin: 0">
                                            <p class="text-dark">Already have Account?</p>
                                            <a href="{{route('Login')}}"><button type="button" class="btn btn-outline-primary form-control">Login</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            <div class="col-4"></div>
        </div>
        </div>
    </section>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('/Stisla/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    {{-- date picker --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Template JS File -->
    <script src="{{ asset('/Stisla/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('/Stisla/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    @yield('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on("keydown", "form", function(event) { 
                return event.key != "Enter";
            });

            $('#reload').click(function() {
                $.ajax({
                    type: 'GET',
                    url: 'reload-captcha',
                    success: function(data) {
                        $("#captcha-span").html(data.captcha);
                    }
                });
            });
            $('#name').change(function(){
                $.ajax({
                    type: 'POST',
                    url: 'checking-existing-user',
                    dataType: 'json',
                    data: {_token: "{{ csrf_token() }}",
                            name: $(this).val()},
                    success: function(data) {
                        if(data != undefined){
                            if(data.status == false){
                                $("#error-info").text(data.message)
                                $("#error").show();
                                $("#after-checking-user").hide();
                            }else{
                                $("#error-info").val("");
                                $("#error").hide();
                                $("#after-checking-user").show();
                            }
                        }
                    }
                })
            });
        });
    </script>
</body>

</html>
