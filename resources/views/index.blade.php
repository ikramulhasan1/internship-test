<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar-bg {
            background-color: antiquewhite;
        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar-bg sidebar p-2">
                <div class="sidebar-sticky">
                    <p>As a dedicated and enthusiastic Junior Laravel Developer, I specialize in both Front-End and
                        Back-End development. With a passion for creating robust and user-friendly web applications, I
                        bring hands-on experience in Laravel framework, ensuring seamless functionality and dynamic user
                        experiences. Let's connect and explore the possibilities at the intersection of technology and
                        innovation!</p>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Main Content</h1>
                </div>

                <!-- Cards -->
                <div class="row">
                    <!-- Card 1 -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        {{-- @dd($newPost); --}}
                        @foreach ($newPost as $post)
                            <div class="col mb-3">
                                <div class="card h-100">
                                    <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ $post->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <a href="https://github.com/ikramulhasan1">My Github Link Here</a>
            <a href="https://github.com/ikramulhasan1">Click now</a>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
