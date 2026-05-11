<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Poste</title>

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
        }

        input, select{
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            background: #111215;
            border: 1px solid #2d2f35;
            color: white;
        }

        .btn-submit{
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right,#ff5a00,#ff7b00);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .back{
            display: inline-block;
            margin-top: 15px;
            color: #ccc;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1 class="title">Ajouter Poste</h1>

        <form action="{{ route('postes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Numéro Série</label>
                <input type="text" name="numero_serie" required>
            </div>

            <div class="form-group">
                <label>Modèle</label>
                <input type="text" name="modele" required>
            </div>

            <div class="form-group">
                <label>Marque</label>
                <input type="text" name="marque" required>
            </div>

            <div class="form-group">
                <label>Etat</label>
                <select name="etat">
                    <option value="Disponible">Disponible</option>
                    <option value="En panne">En panne</option>
                    <option value="Maintenance">Maintenance</option>
                </select>
            </div>

            <div class="form-group">
                <label>Responsable</label>

                <select name="user_id">
                    <option value="">Choisir utilisateur</option>

                    @foreach($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>

            </div>

            <button class="btn-submit">Ajouter</button>

        </form>

        <a href="{{ route('postes.index') }}" class="back">← Retour</a>

    </div>

</div>

</body>
</html>