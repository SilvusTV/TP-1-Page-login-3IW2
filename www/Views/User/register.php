<section class="register">
    <h1>Créer un compte</h1>
    <div class="block">
        <?php if (isset($error)) : ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form action="/register" method="post">
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" required value="<?= $firstname??"" ?>">
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname" required value="<?= $lastname??"" ?>">
            <label for="email">Adresse email</label>
            <input type="email" id="email" name="email" required value="<?= $email??"" ?>">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
            <label for="passwordConfirm">Confirmer le mot de passe</label>
            <input type="password" id="passwordConfirm" name="passwordConfirm" required>
            <label for="country">Pays</label>
            <select id="country" name="country" required>
                <option value="FR">France</option>
                <option value="BE">Belgique</option>
                <option value="CH">Suisse</option>
                <option value="CA">Canada</option>
            </select>
            <button type="submit" value="submit">Créer un compte</button>
            <span><p>Déja un compte ?</p><a href="/login">Se connecter</a></span>
        </form>
    </div>
</section>
<!--<script>
  fetch("https://restcountries.com/v3.1/all")
    .then(response => response.json())
    .then(data => {
      const countries = JSON.parse(data.contents);
      countries.forEach(country => {
        console.log(country);
        let option = document.createElement("option");
        option.value = country.alpha2Code;
        option.textContent = country.translations.fr;
        document.querySelector("#county").appendChild(option);
      });
    })
    .catch(error => console.error('Error:', error));
</script>-->