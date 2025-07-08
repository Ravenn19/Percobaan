
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/banner_upload.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <style>
        @keyframes pulseHighlight {
        0% {
            background-color: #b3e5fc;
            box-shadow: 0 0 10px rgba(3, 169, 244, 0.5);
        }
        50% {
            background-color: #81d4fa;
            box-shadow: 0 0 20px rgba(3, 169, 244, 0.6);
        }
        100% {
            background-color: #b3e5fc;
            box-shadow: 0 0 10px rgba(3, 169, 244, 0.5);
        }
        }

        .temp-highlight {
        border-radius: 6px;
        animation: pulseHighlight 1s ease-in-out 2;
        }


    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Welcome</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('user.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-coins"></i>
                    <span>Upload Profile</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Upload Profile:</h6>
                        <a class="collapse-item" href="{{ route('user.profile') }}">Profile</a>
                        <a class="collapse-item" href="{{ route('user.proposalStatus') }}">Proporsal Status</a>
                        <a class="collapse-item" href="{{ route('user.banner') }}">Banner</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-coins"></i>
                    <span>News</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">News:</h6>
                        <a class="collapse-item" href="{{ route('user.blog') }}">Blog</a>
                        <a class="collapse-item" href="{{ route('user.your-blog') }}">Your Blog</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Logout</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        {{-- <a class="collapse-item" href="{{ route('register') }}">Register</a>
                        <a class="collapse-item" href="{{ route('forgot.password') }}">Forgot Password</a> --}}
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">

            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
						onsubmit="return false;">
						<div class="input-group">
							<input type="text" id="search_input" class="form-control bg-light border-0 small"
								placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" id="search_button" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

                    {{-- Modal Search --}}
                    <div class="modal fade" id="noResultsModal" tabindex="-1" aria-labelledby="noResultsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content shadow rounded-4 border-0 animate__animated animate__fadeInDown">
                            <div class="modal-body text-center p-5">
                                <div class="mb-3">
                                <i class="fas fa-search-minus fa-4x text-danger"></i>
                                </div>
                                <h5 class="mb-2">Oops! Tidak Ditemukan</h5>
                                <p class="text-muted mb-4">
                                Kami tidak menemukan elemen Judul yang cocok dengan kata tersebut.
                                </p>
                                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" id="closeModalBtn" data-bs-dismiss="modal">
                                    Coba Lagi
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            {{-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div> --}}
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            {{-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('assets/images/undraw_profile_1.svg') }}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('assets/images/undraw_profile_2.svg') }}"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"src="{{ asset('assets/images/undraw_profile_3.svg') }}"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div> --}}
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $user->nama_tim }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ $user->banner && $user->banner->logo_path ? asset('storage/' . $user->banner->logo_path) : asset('assets/images/itpln2.png') }}">

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('user.profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('user.banner') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

            <!-- Begin Page Content -->
                <div class="container mt-4">
                    <!-- Banner Section -->
                    @if($user->banner)
                    <div class="banner-container" style="position: relative; height: 300px; overflow: hidden; margin-bottom: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <img src="{{ asset('storage/' . $user->banner->banner_path) }}" alt="Banner" class="banner-img" alt="Team Banner" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="logo-overlay" style="position: absolute; bottom: 1px; left: 50%; transform: translateX(-50%);">
                            <img src="{{ asset('storage/' . $user->banner->logo_path) }}" class="logo-img" alt="Team Logo" style="width: 130px; height: 130px; border: 4px solid white; border-radius: 50%; box-shadow: 0 2px 10px rgba(0,0,0,0.2); object-fit: cover;">
                        </div>
                    </div>
                    @endif

                    <!-- Team Info -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h4>Informasi Tim</h4>
                                </div>
                                <div class="card-body">
                                    <h5>{{ $user->nama_tim }}</h5>
                                    <p><strong>Ketua:</strong> {{ $user->ketua }}</p>
                                    <p><strong>Anggota 1:</strong> {{ $user->anggota1 }}</p>
                                    <p><strong>Anggota 2:</strong> {{ $user->anggota2 }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h4>Jenis Layanan</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach($user->jenis_layanan as $layanan)
                                            <li>{{ $layanan }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Section -->
                    <div class="card mt-4">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h4>Blog Terbaru</h4>
                            <a href="{{ route('user.your-blog') }}" class="btn btn-light">Lihat Semua</a>
                        </div>
                        <div class="card-body">
                            @if($blogs->count() > 0)
                                <div class="row">
                                    @foreach($blogs as $blog)
                                    <div class="col-md-4 mb-3">
                                        <div class="card h-100">
                                            @if($blog->image_path)
                                                <img src="{{ asset('storage/' . $blog->image_path) }}" class="card-img-top" alt="{{ $blog->title }}" style="height: 150px; object-fit: cover;">
                                            @endif
                                            <div class="card-body">
                                                <h5 class="card-title">{{ Str::limit($blog->title, 30) }}</h5>
                                                <p class="card-text">{{ Str::limit(strip_tags($blog->content), 50) }}</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary view-blog-btn"
                                                    data-blog-id="{{ $blog->id }}"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#blogModal">
                                                        <i class="fas fa-eye"></i> Baca Selengkapnya
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-center">Belum ada blog. <a href="{{ route('user.blog') }}">Buat blog pertama Anda!</a></p>
                            @endif
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                        <a style="margin-right: 10px" href="{{ route('user.profile') }}" class="btn btn-info me-md-2">Lihat Profil</a>
                        <a href="{{ route('user.your-blog') }}" class="btn btn-success">Kelola Blog</a>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                <!-- End of Main Content -->

            <!-- Footer -->
                <!-- Modal Structure -->
                <div class="modal fade" id="blogModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Blog</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Konten akan dimuat via AJAX di sini -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="fas fa-times"></i> Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Raven Project 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<!-- Tombol logout menggunakan form -->
					<form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
				</div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/button.js') }}"></script>
    <script src="{{ asset('assets/js/banner.js') }}"></script>
    <script src="{{ asset('assets/js/viewimages.js') }}"></script>

	{{-- <script>
		// Cegah kembali ke halaman sebelumnya (misalnya halaman login)
		history.pushState(null, null, location.href);
		window.onpopstate = function () {
			history.pushState(null, null, location.href);
		};
	</script> --}}

	<script>
	 // Fungsi untuk menampilkan gambar banner yang diunggah
		document.getElementById("banner-upload").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("banner-img").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Fungsi untuk menampilkan gambar logo yang diunggah
        document.getElementById("logo-upload").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("logo-img").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

	</script>

    <script>
        window.addEventListener('pageshow', function(event) {
            if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
                // Kalau halaman di-load dari bfcache, reload halaman
                window.location.reload();
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.view-blog-btn').click(function(e) {
                e.preventDefault();
                const blogId = $(this).data('blog-id');
                const modal = $('#blogModal');

                // Tampilkan loading
                modal.find('.modal-body').html(`
                    <div class="text-center py-4">
                        <div class="spinner-border text-primary"></div>
                        <p class="mt-2">Memuat konten...</p>
                    </div>
                `);

                // AJAX request
                $.ajax({
                    url: "{{ route('user.blog.modal', ['blog' => ':id']) }}".replace(':id', blogId),
                    type: 'GET',
                    success: function(data) {
                        modal.find('.modal-body').html(data);
                    },
                    error: function(xhr) {
                        modal.find('.modal-body').html(`
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                                Error ${xhr.status}: ${xhr.statusText}
                            </div>
                        `);
                    }
                });
            });
        });
    </script>

    <script>
        function performSearch() {
            const keyword = document.getElementById('search_input').value.trim().toLowerCase();
            const headings = document.querySelectorAll('h1, h2, h3, h4');
            let found = false;

            if (!keyword) return;

            // Reset highlight sebelumnya
            headings.forEach(h => h.style.backgroundColor = '');

            // Cek dan highlight
            headings.forEach(h => {
                if (h.textContent.toLowerCase().includes(keyword)) {
                    h.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    h.style.backgroundColor = '#ffff88';
                    found = true;
                }
            });

            if (!found) {
                const modal = new bootstrap.Modal(document.getElementById('noResultsModal'));
                modal.show();
            }
        }

        // Trigger on button click
        document.getElementById('search_button').addEventListener('click', performSearch);

        // Trigger on Enter key
        document.getElementById('search_input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });

        document.getElementById('closeModalBtn').addEventListener('click', function () {
            console.log('Modal ditutup.'); // atau aksi lainnya
        });

        function performSearch() {
            const keyword = document.getElementById('search_input').value.trim().toLowerCase();
            const headings = document.querySelectorAll('h1, h2, h3, h4');
            let found = false;

            if (!keyword) return;

            headings.forEach(h => {
                // Reset dulu
                h.classList.remove('temp-highlight');

                // Cek apakah cocok
                if (h.textContent.toLowerCase().includes(keyword)) {
                    h.classList.add('temp-highlight');
                    h.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    found = true;

                    // Hapus highlight setelah 3 detik
                    setTimeout(() => {
                        h.classList.remove('temp-highlight');
                    }, 3000);
                }
            });

            if (!found) {
                const notFoundModal = new bootstrap.Modal(document.getElementById('noResultsModal'));
                notFoundModal.show();
            }
        }


    </script>




    {{-- <script>
        // Clear cache saat halaman dimuat
        window.onload = function() {
            if (performance.navigation.type === 2) {
                // Jika navigasi melalui tombol back/forward
                window.location.reload();
            }
        };

        // Mencegah cache halaman
        if (window.history && window.history.pushState) {
            window.history.pushState('', null, './');
            window.addEventListener('popstate', function() {
                window.history.pushState('', null, './');
            });
        }
    </script> --}}

<!-- <script>
		document.getElementById('banner-upload').addEventListener('change', function(event) {
			let file = event.target.files[0];
			if (file) {
				let reader = new FileReader();
				reader.onload = function(e) {
					document.getElementById('banner-preview').style.backgroundImage = 'url(' + e.target.result + ')';
				}
				reader.readAsDataURL(file);
			}
		});

		document.getElementById('logo-upload').addEventListener('change', function(event) {
			let file = event.target.files[0];
			if (file) {
				let reader = new FileReader();
				reader.onload = function(e) {
					document.getElementById('logo-preview').style.backgroundImage = 'url(' + e.target.result + ')';
				}
				reader.readAsDataURL(file);
			}
		});

		document.getElementById('upload-form').addEventListener('submit', function (event) {
			event.preventDefault();

			let formData = new FormData(this);
			fetch('', {
				method: 'POST',
				body: formData
			})
			.then(response => response.json())
			.then(data => {
				alert(data.message);
				if (data.status === 'success') {
					if (data.data.banner) {
						document.getElementById('banner-preview').innerHTML = `<img src="uploads/${data.data.banner}" style="width:100%; height:100%; object-fit:cover;">`;
					}
					if (data.data.logo) {
						document.getElementById('logo-preview').innerHTML = `<img src="uploads/${data.data.logo}" style="width:100%; height:100%; object-fit:cover;">`;
					}
				}
			})
			.catch(error => console.error('Error:', error));
		});

</script> -->


</body>

</html>
