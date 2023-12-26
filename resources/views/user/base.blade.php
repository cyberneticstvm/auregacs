<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aurega Admin</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/aurega/favicon.ico') }}">
    <!-- Template CSS -->
    <link href="{{ asset('/backend/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="{{ route('user.dash') }}" class="brand-wrap">
                <img src="{{ asset('/assets/images/aurega/logo.webp') }}" class="logo" alt="Aurega Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item {{ (in_array(request()->segment(1), ['dash'])) ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('user.dash') }}"> <i class="icon material-icons md-home"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                @Auth
                <li class="menu-item has-submenu {{ (in_array(request()->segment(1), ['user'])) ? 'active' : '' }}">
                    <a class="menu-link" href="/"> <i class="icon material-icons md-person"></i>
                        <span class="text">Users</span>
                    </a>
                    <div class="submenu">
                        <a href="{{ route('user') }}">All Users</a>
                    </div>
                </li>
                <li class="menu-item has-submenu {{ (in_array(request()->segment(1), ['blog'])) ? 'active' : '' }}">
                    <a class="menu-link" href="/"> <i class="icon material-icons md-comment"></i>
                        <span class="text">Blogs</span>
                    </a>
                    <div class="submenu">
                        <a href="{{ route('blog') }}">All Blogs</a>
                    </div>
                </li>
                @endauth
            </ul>
            <hr>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{ asset('/backend/assets/imgs/people/avatar1.jpg') }}" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="{{ route('user.dash') }}"><strong>Hi, {{ Auth::user()->name }}</strong></a>
                            <a class="dropdown-item text-danger" href="{{ route('user.logout') }}"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif
        @yield("content")
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> ©, Aurega Corporate Services.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="{{ asset('/backend/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/chart.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('/backend/assets/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/backend/assets/js/custom-chart.js') }}" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/ea16vit7bw7smon3hcz3cnu1y6vly50be0scn8pwao1xqa94/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(function() {
            $('form').submit(function() {
                $(".btn-submit").attr("disabled", true);
                $(".btn-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
            });
        });
        setTimeout(function() {
            $(".alert").hide('slow');
        }, 5000);

        $(function() {
            "use strict"
            $("#dataTable").dataTable();
            tinymce.init({
                selector: '#txtArea',
                plugins: [
                    'autolink',
                    'autoresize',
                    'codesample',
                    'link',
                    'lists',
                    'media',
                    'powerpaste',
                    'table',
                    'image',
                    'quickbars',
                    'codesample',
                    'help',
                    'code'
                ],
                file_picker_types: 'image'
            });
        });
    </script>
</body>

</html>