{{-- resources/views/admin/dashboard.blade.php --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gestion</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>

        body{
            background: #0f0f10;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .dashboard-container{
            width: 100%;
            min-height: 100vh;
            background: #0f0f10;
            padding-bottom: 30px;
        }

        .navbar-custom{
            background: #1a1a1c;
            padding: 18px 40px;
        }

        .navbar-brand{
            color: white !important;
            font-size: 28px;
            font-weight: 600;
        }

        .nav-link{
            color: #d6d6d6 !important;
            margin-left: 20px;
            font-size: 15px;
            text-decoration: none;
        }

        .nav-link:hover{
            color: white !important;
        }

        .dashboard-title{
            text-align: center;
            color: white;
            font-size: 55px;
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 50px;
        }

        .card-admin{
            background: #1f1f22;
            border-radius: 10px;
            padding: 35px;
            text-align: center;
            color: white;
            height: 100%;
            transition: 0.3s;
        }

        .card-admin:hover{
            transform: translateY(-5px);
        }

        .icon-orange{
            color: #ff5a00;
            font-size: 55px;
            margin-bottom: 20px;
        }

        .card-admin h3{
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card-admin p{
            color: #e2e2e2;
            margin-bottom: 25px;
            font-size: 18px;
        }

        .btn-custom{
            width: 100%;
            border: 1px solid #9c9c9c;
            color: white;
            background: transparent;
            padding: 10px;
            border-radius: 6px;
            font-size: 18px;
            transition: 0.3s;
        }

        .btn-custom:hover{
            background: white;
            color: black;
        }

        footer{
            text-align: center;
            color: white;
            margin-top: 90px;
            font-size: 18px;
        }

    </style>
</head>
<body>

    <div class="dashboard-container">

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-custom">

            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-laptop"></i>
                Admin - Gestion
            </a>

            <div class="ms-auto">

                <a class="nav-link d-inline-block" href="#">
                    <i class="fa-solid fa-house"></i>
                    Accueil
                </a>

                <a class="nav-link d-inline-block" href="#">
                    <i class="fa-solid fa-user-gear"></i>
                    Gérer Utilisateurs
                </a>

                <a class="nav-link d-inline-block" href="#">
                    <i class="fa-solid fa-computer"></i>
                    Gérer Postes
                </a>

            </div>

        </nav>

        {{-- Title --}}
        <h2 class="dashboard-title">Tableau de Bord</h2>

        {{-- Cards --}}
        <div class="container">

            <div class="row justify-content-center g-4">

                {{-- Utilisateurs --}}
                <div class="col-md-5">

                    <div class="card-admin">

                        <div class="icon-orange">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <h3>Gérer Utilisateurs</h3>

                        <p>
                            Ajouter, modifier ou supprimer des employés et techniciens.
                        </p>

              <a href="/admin/users" class="btn btn-custom">
                            Accéder
                        </a>

                    </div>

                </div>

                {{-- Postes --}}
                <div class="col-md-5">

                    <div class="card-admin">

                        <div class="icon-orange">
                            <i class="fa-solid fa-desktop"></i>
                        </div>

                        <h3>Gérer Postes</h3>

                        <p>
                            Ajouter et suivre les postes informatiques.
                        </p>

                        <a href="/admin/postes" class="btn btn-custom">
                            Accéder
                        </a>

                    </div>

                </div>

            </div>

        </div>

        {{-- Footer --}}
        <footer>
            © 2025 Gestion des Interventions.
        </footer>

    </div>

</body>
</html>