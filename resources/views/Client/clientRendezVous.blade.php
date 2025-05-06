<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Rendez-vous</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Mes Rendez-vous</h1>
        @if($rendezVous->isEmpty())
            <div class="alert alert-info text-center">
                Vous n'avez aucun rendez-vous pour le moment.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Opticien</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rendezVous as $rdv)
                            <tr>
                                <td>{{ $rdv->date }}</td>
                                <td>{{ $rdv->heure }}</td>
                                <td>{{ $rdv->opticien->nom }}</td>
                                <td>{{ $rdv->statut }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>