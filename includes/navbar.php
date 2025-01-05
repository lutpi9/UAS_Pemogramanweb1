<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Bootstrap 5.3</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-pink {
            background-color: #ffeeee; /* Soft pink */
        }

        .navbar-pink .navbar-brand,
        .navbar-pink .nav-link {
            color: #842029; /* Dark pink text */
        }

        .navbar-pink .nav-link:hover {
            color: #56152e; /* Even darker pink for hover effect */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-pink">
        <div class="container">
            <a class="navbar-brand" href="?page=home">kuliner makanan dan minuman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex gap-1 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=makanan">Makanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=minuman">Minuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap 5.3 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
