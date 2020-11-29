<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

    <!-- Le reste du contenu -->
    <?php
    include 'navbar.php';
    ?>
    <br><br><br><br><br>
    <form action="postconnexion.php" method="post">
        <table class="connexion_table"@>
            <tr>
                <td><input type="text" placeholler="email" name="connexion_email"></td>
            </tr>
            <tr>
                <td><input type="password" placeholler="**********" name="connexion_email"></td>
            </tr>
            <tr>
                <td><input type="button" value="connexion"  name="connexion_btn"></td>
            </tr>

        </table>
    </form>


    <?php
    include 'footer.php';
    ?>
</body>

</html>