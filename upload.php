<?php 
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // image téléchargée sans erreur
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        // extension autorisée de l'image
        $allowedextension = ['jpg', 'jpeg', 'png', 'gif'];
        // taille maximum de l'image (pas plus d'un mega dans ce cas)
        $maxsize = 1024*1024*1;
        // nom de l'image
        $filename = $_FILES['picture']['name'];
        // taille de l'image
        $filesize = $_FILES['picture']['size'];
        // dossier temporaire
        $tmp = $_FILES['picture']['tmp_name'];
        // extension de l'image
        $fileextension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
        // vérification de l'extension
        if (!in_array($fileextension, $allowedextension)) {
            $error = 'Le format du fichier téléchargé ne correspond pas.';
        } elseif ($maxsize < $filesize) {
            $error = 'Le fichier téléchargé dépasse la taille maximum autorisée.';
        }
        if (empty($error)) {
            // déplacer une image (image -> dossier)
            if (move_uploaded_file($tmp, 'assets/img/' . $filename)) {
                //créer un cookie (pour 1h)
                setcookie('picture', $filename, time() + 3600);
                header('Location: tp2.php?picture=' . $filename);
                exit();
            }
        }
    }
}
include 'header.php' ?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center mt-5 ">
        <div class="col-6 bg-dark p-3">
            <div class="form-group text-white pt-2">
                <label for="picture">Telecharger photo de profil</label>
                <input type="file" name="picture" id="picture">
                <p class="pt-2">Formats acceptés : .jpg, .jpeg, .png, .gif</p>
                <p>Taille acceptée : max. 2mo</p>
                <p class="text-danger"><?= $error ?></p>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-light">Envoyer</button></div>
        </div>
    </div>
</form>

<?php include 'footer.php' ?>