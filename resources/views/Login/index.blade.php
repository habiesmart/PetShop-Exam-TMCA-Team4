<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

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
        <div class="section-header">
            <h1>Tugas Oleh Muhammad Nurul Habie Budiman | <i>NIM: 2301955402</i> &nbsp;</h1>
            <em>Kunjungi website saya: <a href="https://habiesmart.com">Habiesmart.com</a></em>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    @foreach ($errors->all() as $error)
                        <div class="alert-box alert bg-danger"><i class="fa fa-lg fa-exclamation-circle"></i>{{ $error }}</div>
                    @endforeach
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                        <h2 class="text-center"><b>Login</b></h2>
                        <div class="card" style="background-color:#c6d0d9">
                            <form action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="card-body" style="padding-bottom: 0;">

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="name" class="form-control purchase-code"
                                        placeholder="Input Username. Example: habiesmart">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" name="password" class="form-control pwstrength"
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
                                    <input id="captcha" type="text" class="form-control"
                                        placeholder="Enter Captcha" name="captcha">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6 text-center"><a href="{{route('Reset-Password')}}" class="text-danger" style="text-decoration: underline">Forgot Password</a></div>
                                        <div class="col-6">
                                            <button type="submit" class="form-control">Login</button>
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
                                            <p class="text-dark">Dont have Account?</p>
                                            <a href="{{route('register')}}"><button type="button" class="btn btn-dark form-control">Register</button></a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <h5>{{ Session::get('TooManyAttempt') }}.</h5>
            <h4><span class="modal-title" id="exampleModalLongTitle"></span> Seconds</h4>
        </div>
      </div>
    </div>
  </div>

</body>

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
        $('#reload').click(function() {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function(data) {
                $("#captcha-span").html(data.captcha);
            }
        });
    });

    @if (Session::has('TooManyAttempt'))
        function executes(){
            $("#exampleModal").modal({
                            show: true,
                            backdrop: 'static',
                            keyboard: false
                        });
        var sec = 0;
        function pad ( val ) { return val; }
        setInterval( function(){
            $("#exampleModalLongTitle").html(pad(++sec%60));
            if(sec == {{Session::get('WaitingNextLogin')}}) $("#exampleModal").modal("hide");
        }, 1000);
        }
        executes();
    @endif
    });
</script>

</html>
