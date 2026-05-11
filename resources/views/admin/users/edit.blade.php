<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>

    <style>

        body{
            margin: 0;
            padding: 0;
            background: #0f0f10;
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }

        .container{
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card{
            width: 500px;
            background: #1a1b1f;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }

        .title{
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-group{
            margin-bottom: 20px;
        }

        label{
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
        }

        input,
        select{
            width: 100%;
            padding: 14px;
            border: 1px solid #2d2f35;
            background: #111215;
            border-radius: 8px;
            color: white;
            font-size: 15px;
        }

        input:focus,
        select:focus{
            outline: none;
            border-color: #ff5a00;
        }

        .btn-submit{
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right,#ff5a00,#ff7b00);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit:hover{
            opacity: 0.9;
        }

        .back{
            display: inline-block;
            margin-top: 20px;
            color: #ccc;
            text-decoration: none;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="card">

        <h1 class="title">
            Modifier Utilisateur
        </h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nom</label>
                <input type="text"
                       name="name"
                       value="{{ $user->name }}"
                       required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email"
                       name="email"
                       value="{{ $user->email }}"
                       required>
            </div>

            <div class="form-group">
                <label>Rôle</label>

                <select name="role">

                    <option value="admin"
                        {{ $user->role == 'admin' ? 'selected' : '' }}>
                        Admin
                    </option>

                    <option value="technicien"
                        {{ $user->role == 'technicien' ? 'selected' : '' }}>
                        Technicien
                    </option>

                    <option value="employe"
                        {{ $user->role == 'employe' ? 'selected' : '' }}>
                        Employé
                    </option>

                </select>
            </div>

            <div class="form-group">
    <label>Spécialité</label>

    <input type="text"
           name="specialite"
           value="{{ $user->specialite }}"
           class="form-control">
</div>

            <div class="form-group">
                <label>Disponibilité</label>

                <select name="disponibilite">

                    <option value="Disponible"
                        {{ $user->disponibilite == 'Disponible' ? 'selected' : '' }}>
                        Disponible
                    </option>

                    <option value="Occupé"
                        {{ $user->disponibilite == 'Occupé' ? 'selected' : '' }}>
                        Occupé
                    </option>

                </select>
            </div>

            <button type="submit" class="btn-submit">
                Modifier
            </button>

        </form>

        <a href="{{ route('users.index') }}" class="back">
            ← Retour
        </a>

    </div>

</div>

</body>
</html>