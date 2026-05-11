<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Postes</title>

    <style>
        body{
            background: #0f0f10;
            color: white;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar-custom{
            background: #1b1b1d;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-custom .logo{
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-custom ul{
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .navbar-custom ul li a{
            color: #d1d1d1;
            text-decoration: none;
        }

        .container-postes{
            width: 92%;
            margin: 40px auto;
        }

        .title{
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .btn-add{
            background: #0d6efd;
            color: white;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 25px;
        }

        .table-postes{
            width: 100%;
            border-collapse: collapse;
            background: #16181c;
        }

        .table-postes th,
        .table-postes td{
            padding: 15px;
            border: 1px solid #2b2d31;
        }

        .actions{
            display: flex;
            gap: 10px;
        }

        .btn-edit{
            background: #ffc107;
            color: black;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
        }

        .btn-delete{
            background: #dc3545;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            border: none;
        }

        form{
            display: inline;
        }
    </style>
</head>

<body>

<div class="navbar-custom">
    <div class="logo">💻 Admin</div>

    <ul>
        <li><a href="/dashboard">🏠 Accueil</a></li>
        <li><a href="/users">👥 Users</a></li>
        <li><a href="/postes">💻 Postes</a></li>
    </ul>
</div>

<div class="container-postes">

    <h1 class="title">Liste des Postes</h1>

    <a href="{{ route('postes.create') }}" class="btn-add">
        ➕ Ajouter Poste
    </a>

    <table class="table-postes">

        <thead>
            <tr>
                <th>ID</th>
                <th>Numéro Série</th>
                <th>Modèle</th>
                <th>Marque</th>
                <th>Responsable</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        @foreach($postes as $poste)

            <tr>
                <td>{{ $poste->id }}</td>
                <td>{{ $poste->numero_serie }}</td>
                <td>{{ $poste->modele }}</td>
                <td>{{ $poste->marque }}</td>
                <td>{{ $poste->user?->name }}</td>
                <td>{{ $poste->etat }}</td>

                <td>
                    <div class="actions">

                        <a href="{{ route('postes.edit', $poste->id) }}"
                           class="btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('postes.destroy', $poste->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="btn-delete">
                                Delete
                            </button>

                        </form>

                    </div>
                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

</body>
</html>