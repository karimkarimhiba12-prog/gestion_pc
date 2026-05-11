<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Poste</title>

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

        <h1 class="title">Modifier Poste</h1>

        <form action="{{ route('postes.update', $poste->id) }}" method="POST">

            @csrf
            @method('PUT')

            {{-- NUMERO SERIE --}}
            <div class="form-group">
                <label>Numéro Série</label>
                <input type="text"
                       name="numero_serie"
                       value="{{ $poste->numero_serie }}"
                       required>
            </div>

            {{-- MODELE --}}
            <div class="form-group">
                <label>Modèle</label>
                <input type="text"
                       name="modele"
                       value="{{ $poste->modele }}"
                       required>
            </div>

            {{-- EMPLACEMENT --}}
            <div class="form-group">
                <label>Emplacement</label>
                <input type="text"
                       name="emplacement"
                       value="{{ $poste->emplacement }}"
                       required>
            </div>

            {{-- ETAT --}}
            <div class="form-group">
                <label>Etat</label>
                <select name="etat">

                    <option value="Disponible"
                        {{ $poste->etat == 'Disponible' ? 'selected' : '' }}>
                        Disponible
                    </option>

                    <option value="En panne"
                        {{ $poste->etat == 'En panne' ? 'selected' : '' }}>
                        En panne
                    </option>

                    <option value="Maintenance"
                        {{ $poste->etat == 'Maintenance' ? 'selected' : '' }}>
                        Maintenance
                    </option>

                </select>
            </div>

            {{-- RESPONSABLE --}}
            <div class="form-group">
                <label>Responsable</label>

                <select name="user_id">

                    <option value="">Choisir utilisateur</option>

                    @foreach($users as $user)
                        <option value="{{ $user->id }}"
                            {{ $poste->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach

                </select>

            </div>

            <button type="submit" class="btn-submit">
                Modifier
            </button>

        </form>

        <a href="{{ route('postes.index') }}" class="back">
            ← Retour
        </a>

    </div>

</div>

</body>
</html>