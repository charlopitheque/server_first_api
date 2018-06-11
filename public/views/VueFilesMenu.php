<?php

class VueFilesMenu{
    public function initVueFilesMenu($nom, $prenom){

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/CSS/CssFileMenu.css">
    <link rel="stylesheet" type="text/css" href="View/CSS/CssHeader.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Menu contrôle des utilisateurs</title>
</head>
<?php
$this->vueHeader = new VueHeader();
$this->vueHeader->initVueHeader($nom, $prenom);
?>

<body>
    <div class="fm-cat-container">
        <h1>Y'a r pour l'instant</h1>
    </div>
</body>

</html>

<?php

    }
}

?>