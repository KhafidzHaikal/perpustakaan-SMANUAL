<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku | Perpustakaan</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/style.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> --}}
</head>

<!-- ! Body -->

<body>
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <span class="icon logo" aria-hidden="true"></span>
                        <div class="logo-text">
                            <span class="logo-title">Perpustakaan</span>
                        </div>

                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a href="/user/dashboard"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                        </li>
                        <li>
                            <a class="active" class="show-cat-btn" href="{{ route('view.buku') }}">
                                <span class="icon document" aria-hidden="true"></span>Buku
                            </a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="#">
                                <span class="icon folder" aria-hidden="true"></span>Pinjaman
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>


        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                        <div class="search-wrapper">
                            <i data-feather="search" aria-hidden="true"></i>
                            <input type="text" placeholder="Enter keywords ..." required>
                        </div>
                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <div class="lang-switcher-wrapper">
                            <button class="lang-switcher transparent-btn" type="button">
                                EN
                                <i data-feather="chevron-down" aria-hidden="true"></i>
                            </button>
                            <ul class="lang-menu dropdown">
                                <li><a href="##">English</a></li>
                                <li><a href="##">French</a></li>
                                <li><a href="##">Uzbek</a></li>
                            </ul>
                        </div>
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        <div class="notification-wrapper">
                            <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                                <span class="sr-only">To messages</span>
                                <span class="icon notification active" aria-hidden="true"></span>
                            </button>
                            <ul class="users-item-dropdown notification-dropdown dropdown">
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">System just updated</span>
                                            <span class="notification-dropdown__subtitle">The system has been
                                                successfully upgraded. Read more
                                                here.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon danger">
                                            <i data-feather="info" aria-hidden="true"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">The cache is full!</span>
                                            <span class="notification-dropdown__subtitle">Unnecessary caches take
                                                up a
                                                lot of memory space and
                                                interfere ...</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check" aria-hidden="true"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">New Subscriber here!</span>
                                            <span class="notification-dropdown__subtitle">A new subscriber has
                                                subscribed.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="link-to-page" href="##">Go to Notifications page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile"
                                type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="../img/avatar/avatar-illustrated-02.webp" type="image/webp">
                                        <img src="../img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>Profile</span>
                                    </a></li>
                                <li><a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>Account settings</span>
                                    </a></li>
                                <li><a class="danger" href="##">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        {{-- <span>Log out</span> --}}
                                    </a></li>
                            </ul>
                            <form action={{ route('logout') }} method="POST">
                                @csrf
                                <button class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Daftar Buku</h2>
                    <div class="row stat-cards">
                        {{-- tabel buku --}}
                        @if ($buku->isNotEmpty())
                            <table class="table table-striped table-hover align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                            📍</th>
                                        <th
                                            class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                            📨 Nama Buku</th>
                                        <th
                                            class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                            🔢 Nama Pengarang</th>
                                        <th
                                            class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                            ⭐ Penerbit</th>
                                        <th
                                            class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                            📆 Tahun Terbit</th>
                                        <th class="text-end text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                            🔧 Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($buku as $bk)
                                            <td class="text-center text-dark font-weight-bold">
                                                {{ $loop->index + 1 }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $bk->nama_buku }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $bk->pengarang }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $bk->penerbit }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $bk->tahun_terbit }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                <a class="btn btn-danger btn-sm" href="#"
                                                    surat-id="{{ $bk->id }}">🗑️ Pinjam</a>
                                            </td>
                                    </tr>
                        @endforeach
                    @else
                        <div>
                            <p class="card-text">Buku Tidak Ada!</p>
                        </div>
                        @endif
                        </tbody>
                        </table>
                    </div>
                </div>
        </div>

    </div>

    <!-- Chart library -->
    <script src="../plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="../plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="../js/script.js"></script>

</body>

</html>
