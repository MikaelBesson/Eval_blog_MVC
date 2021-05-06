<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Acceuil connection</title>
</head>
<body>
    <div class="pageAcceuil">
        <div class="images1"></div>
        <div id="acceuilForm">

            <h1>Bienvenue chez les Fufus</h1>
            <span>veuillez vous connectez pour acceder au blog</span>
            <form id="formConnect" action="" method="post">
                <div class="pseudo">
                    <label for="pseudo">Votre pseudo</label><br>
                    <input type="text" name="pseudo" id="pseudo"><br>
                </div>
                <div class="passsword">
                    <label for="password">Votre password</label><br>
                    <input type="password" name="password" id="password"><br>
                </div>
                <input type="submit" id="submit">
            </form>
            <span>Pour vous inscrire <a href="/index.php?ctrl=inscription">C'est Ici !</a></span>
        </div>
        <div class="images2"></div>
    </div>
</body>
</html>
