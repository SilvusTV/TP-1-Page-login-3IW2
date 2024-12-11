<section class="login">
    <h1>Se connecter</h1>
    <div class="block">
        <form action="/login" method="post">
            <?php if (isset($error)) : ?>
                <div class="error"><?= $error ?></div>
            <?php endif; ?>
            <label for="email">Adresse email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Se connecter</button>
            <span><p>Pas de compte ?</p><a href="/register">Créer un compte</a></span>
        </form>
    </div>
</section>