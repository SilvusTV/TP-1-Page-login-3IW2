<section class="home">
    <h1>Bienvenue sur le site de <?= $pseudo ?? "Anonyme" ?>.</h1>
    <?php if ($connected): ?>
        <div class="block">
            <h3>Vous êtes connecté en tant que <u><?= $pseudo ?></u>.</h3>
            <div class="btn-block">
                <a class="button" href="/logout">Se déconnecter</a>
            </div>
        </div>
    <?php else: ?>
        <div class="block">
            <h3>Je vois que vous n'êtes pas connecté actuellement. Je vous invite donc à vous connecter ci-dessous</h3>
            <div class="btn-block">
                <a class="button" href="/login">Se connecter</a>
                <a class="button" href="/register">Créer un compte</a>
            </div>
        </div>
    <?php endif; ?>
</section>