<?php
require('classe/article.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>

    <form action="classe/article.php" method="post">
        <div>
            <label for="action">Entrez une valeur:</label>
            <input type="texte" id="action" name="valeur"><br><br>
        </div>
        <div>
            <input type="submit" name="btOK" value="TESTER">
        </div>
        
    </form>


    
</body>
</html>