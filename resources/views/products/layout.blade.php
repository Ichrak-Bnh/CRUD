<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/storage/logo.png')}}">

    <style>
       body{
        display: flex;
        margin: 0;
        padding: 0;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        min-height: 100vh;
        font-family: 'Jost', sans-serif;
        }
        .container {
            background-color: #ffffff; /* Couleur de fond pour le contenu */
            border-radius: 10px; /* Coins arrondis pour le conteneur */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8); /* Ombre légère pour le conteneur */
            padding: 10px; /* Marge intérieure pour le contenu */
            margin-top: 50px; /* Marge supérieure pour le conteneur */
        }
        header {
            background-color: #343a40; /* Couleur de fond pour l'en-tête */
            color: #ffffff; /* Couleur du texte dans l'en-tête */
            padding: 10px 10px; /* Marge intérieure pour l'en-tête */
            border-radius: 10px 10px 0 0; /* Coins arrondis seulement en haut pour l'en-tête */
            margin-bottom: 20px; /* Marge inférieure pour l'en-tête */
        }
        h2{
            margin: 10px 0 10px 450px;
            color: #34AEEB;
        }
    </style>
</head>
<body>
    
<div class="container">
    @yield('content')
</div>
    
</body>
</html>