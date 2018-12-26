<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- For Google -->
    <link rel="author" href="https://plus.google.com/+Scoopthemes">
    <link rel="publisher" href="https://plus.google.com/+Scoopthemes">

    <!-- Canonical -->
    <link rel="canonical" href="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="/assets/css/main.css" rel="stylesheet"> {{-- ini cara memanggil css dari folder assets -> css --}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
          background-color: #f2f2f2;
          padding: 25px;
        }
        /*inline-block size followd by content*/
        .content
        {
            padding-left : 50px;
            padding-right: 50px;
            padding-bottom : 10px;
            /*display: inline-block; */
        }
        .img
        {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .carousel-inner img
        {
            width: 100%; /* Set width to 100% */
            margin: auto;
            min-height:200px;
        }

        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }

        hr {
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 2px;
            }

        .input-image{
            margin:0 auto;
            padding: 20px;
            margin-top: 20px;
            align-content: center;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }

        .table{
            text-align: center;
        }


      </style>
</head>
<body >
<nav class="navbar navbar-inverse" >
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Beasiswa Fatamorgana</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="{{ Request::is('registrasi') ? 'active' : '' }}"><a href="/registrasi">Registrasi</a></li>
              <li class="{{ Request::is('seleksi') ? 'active' : '' }}"><a href="/seleksi">Seleksi</a></li>
              <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/dashboard">Dashboard</a></li>
            </ul>
          </div>
     </div>
</nav>

    @yield('content') {{-- Semua file konten kita akan ada di bagian ini --}}

</div>

<footer class="container-fluid text-center">
        <p>Online Store Copyright</p>
        <form class="form-inline">Get deals:
          <input type="email" class="form-control" size="50" placeholder="Email Address">
          <button type="button" class="btn btn-danger">Sign Up</button>
        </form>
</footer>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

 <script type="text/javascript">
        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'pdf', 'jpeg', 'docx'],
            overwriteInitial: false,
            maxFileSize: 3000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
        $("#file-2").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'pdf', 'jpeg', 'docx'],
            overwriteInitial: false,
            maxFileSize: 3000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#srcData").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#pesertaTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

<!-- Custom JavaScript -->
<script src="/assets/js/custom.js"></script> {{-- ini cara memanggil js dari folder assets -> js --}}
</body>

</html>
