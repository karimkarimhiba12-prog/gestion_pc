<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Utilisateurs</title>

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
            border-bottom: 1px solid #2c2c2e;
        }

        .navbar-custom .logo{
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .navbar-custom ul{
            display: flex;
            gap: 30px;
            list-style: none;
            margin: 0;
        }

        .navbar-custom ul li a{
            color: #d1d1d1;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .navbar-custom ul li a:hover{
            color: white;
        }

        .container-users{
            width: 92%;
            margin: 40px auto;
        }

        .title{
            text-align: center;
            font-size: 55px;
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
            font-size: 18px;
            transition: 0.3s;
        }

        .btn-add:hover{
            background: #0b5ed7;
        }

        .table-users{
            width: 100%;
            border-collapse: collapse;
            background: #16181c;
            border: 1px solid #2d2f33;
        }

        .table-users thead{
            background: #1d2024;
        }

        .table-users th,
        .table-users td{
            padding: 18px;
            border: 1px solid #2b2d31;
            text-align: left;
            color: white;
        }

        .table-users th{
            font-size: 18px;
            font-weight: bold;
        }

        .table-users td{
            font-size: 17px;
        }

        .actions{
            display: flex;
            gap: 10px;
        }

        .btn-edit{
            background: #ffc107;
            color: black;
            padding: 8px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            border: none;
        }

        .btn-delete{
            background: #dc3545;
            color: white;
            padding: 8px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }

        form{
            display: inline;
        }

    </style>

</head>
<body>

{{-- NAVBAR --}}
<div class="navbar-custom">

    <div class="logo">
        💻 Admin - Gestion
    </div>

    <ul>
        <li>
            <a href="/dashboard">🏠 Accueil</a>
        </li>

        <li>
            <a href="/users">👥 Gérer Utilisateurs</a>
        </li>

        <li>
            <a href="/posts">📄 Gérer Postes</a>
        </li>

        <li>
            <a href="#">📊 Statistiques</a>
        </li>
    </ul>

</div>

{{-- CONTENT --}}
<div class="container-users">

    <h1 class="title">
        Liste des utilisateurs
    </h1>

    <a href="{{ route('users.create') }}" class="btn-add">
        Ajouter un utilisateur
    </a>

    <table class="table-users">

        <thead>

            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Spécialité</th>
                <th>Charge Travail</th>
                <th>Disponibilité</th>
                <th>Actions</th>
            </tr>

        </thead>

        <tbody>

            @foreach($users as $user)

            <tr>

                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->specialite }}</td>
                <td>{{ $user->charge_travail }}</td>
                <td>{{ $user->disponibilite }}</td>

                <td>

                    <div class="actions">

                        {{-- EDIT --}}
                        <a href="{{ route('users.edit', $user->id) }}"
                           class="btn-edit">
                            Modifier
                        </a>

                        {{-- DELETE --}}
                        <form action="{{ route('users.destroy', $user->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn-delete">
                                Supprimer
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