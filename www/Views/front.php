<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title??"Titre de page" ?></title>
    <meta name="description" content="<?= $description??"Description de ma page" ?>">
    <link rel="stylesheet" href="../Assets/front/style.css">
</head>
<body>
<?php include "../Views/".$this->v; ?>
</body>
</html>