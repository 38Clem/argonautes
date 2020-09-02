<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Argonautes</title>

    <link rel="stylesheet" href="./src/public/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<!-- Header section -->
<header>
    <h1>
        <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
        Les Argonautes
    </h1>
</header>

<!-- Main section -->
<main>

    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form class="new-member-form" method="post">
        <label for="name">Nom de l&apos;Argonaute</label>
        <input id="name" name="name" type="text" placeholder="Charalampos" />
        <button type="submit">Envoyer</button>
    </form>

    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">
        <?php foreach($argonauteList as $argonaute){  ?>
        <div class="member-item"><?= $argonaute["argonautes_name"] ?></div>
        <?php }?>
    </section>
</main>

<footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>
</body>
</html>