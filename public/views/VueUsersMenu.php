<?php

class VueUsersMenu{
    public function initVueMenuUsers($nom, $prenom, $allUsers = null){
        ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/CSS/CssUsersMenu.css">
    <link rel="stylesheet" type="text/css" href="View/CSS/CssHeader.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Menu contrôle des utilisateurs</title>
</head>
<?php 
$this->vueHeader = new VueHeader();
$this->vueHeader->initVueHeader($nom, $prenom);
?>

<body>
    <div class="um-cat-container">
        <div class="um-cat-column-container">
            <h2>Ajout utilisateur</h2>
            <div class="um-cat-column">


                <form class="um-cat-form" action="index.php?addUser=true" method="post">
                    <div class="um-cat-row">
                        <input type="text" class="um-cat-input" placeholder="Nom de l'utilisateur" maxlength="255" name="lastname"/>
                        <input type="text" class="um-cat-input" placeholder="Prénom de l'utilisateur" maxlength="255" name="firstname"/>
                        <input type="password" class="um-cat-input" placeholder="Mot de passe" maxlength="50" name="password"/>
                        <input type="email" class="um-cat-input" placeholder="E-mail" maxlength="255" name="mail"/>
                    </div>
                    <div class="um-cat-row">
                        <p>Status</p>
                        <select name="status">
                    <option value="1">Administrateur</option>
                    <option value="0">Utilisateur</option>
                </select>
                    </div>
<div class="um-cat-row">
    <p>Photo de profil</p>

    <label for="um-file" class="um-cat-picture-insert">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.444 31.444" style="enable-background:new 0 0 31.444 31.444;" xml:space="preserve" width="512px" height="512px"><path d="M1.119,16.841c-0.619,0-1.111-0.508-1.111-1.127c0-0.619,0.492-1.111,1.111-1.111h13.475V1.127  C14.595,0.508,15.103,0,15.722,0c0.619,0,1.111,0.508,1.111,1.127v13.476h13.475c0.619,0,1.127,0.492,1.127,1.111  c0,0.619-0.508,1.127-1.127,1.127H16.833v13.476c0,0.619-0.492,1.127-1.111,1.127c-0.619,0-1.127-0.508-1.127-1.127V16.841H1.119z"/>
        </svg>
        <input id="um-file" class="um-cat-input-file" type="file">
        
    </label>
</div>
                    <div class="um-cat-row">
                        <input type="submit" class="um-cat-button-validate" value="AJOUTER" name="addUserButton"/>
                    </div>
                </form>
            </div>
        </div>

        <div class="um-cat-column-container">
            <h2>Éditer utilisateurs enregistrés</h2>
            <div class="um-cat-column">


                <form class="um-cat-form" action="index.php?auth=true" method="post">
                    <div class="um-cat-row">
                        <div class="um-cat-edit-users">
                        <?php foreach($allUsers as $user){ ?>
                            <div class="um-cat-checkbox">
                                <input type="checkbox" name="<?php echo $user->getId()?>" id="case1" /> <label for="case1"><?php echo $user->getNom()?></label></div>
                                <?php }?>
                            </div>
                        
                    </div>
                    <div class="um-cat-row">
                        <input type="submit" class="um-cat-button-validate" value="MODIFIER" />
                    </div>
                </form>
            </div>
        </div>
        
        <div class="um-cat-column-container">
            <h2>Supprimer utilisateur</h2>
            <div class="um-cat-column">


                <form class="um-cat-form" action="index.php?auth=true" method="post">
                    <div class="um-cat-row">
                        <div class="um-cat-edit-users">
                            <div class="um-cat-checkbox">
                                <input type="checkbox" name="case2" id="case4" /> <label for="case4">User Un</label></div>
                            <div class="um-cat-checkbox">
                                <input type="checkbox" name="case2" id="case5" /> <label for="case5">User Deux</label></div>
                            <div class="um-cat-checkbox">
                                <input type="checkbox" name="case2" id="case6" /> <label for="case6">Phillipe Poutou</label></div>
                        </div>
                    </div>
                    <div class="um-cat-row">
                        <input type="submit" class="um-cat-button-validate" value="SUPPRIMER" />
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>


<?php
    }
}


?>