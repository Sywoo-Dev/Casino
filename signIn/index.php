<?php $page = 3; include "../inc/header.php" ?>
  <script src="login.js"></script>

  <br><br><br>
  <form action="action_page.php">
  <div class="container">
    <h1>S'inscrire</h1>
    <p>Merci de remplir les champs afin de créer votre compte.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Entrez votre Email" name="email" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>

    <label for="psw-repeat"><b>Confirmez votre mot de passe</b></label>
    <input type="password" placeholder="Confirmez votre mot de passe" name="psw-repeat" required>

    <label for="discord-id">
      <b>Votre identifiant discord</b>
      <button class="question-btn" onclick="spanShow()"><i class="fas fa-question-circle"></i>
        <span class="question-span" id="question-span">Pour obtenir votre id, vous pouvez entrer la commande !id sur notre serveur.</span>
      </button>
    </label>

    <input type="text" placeholder="Entrez votre identifiant discord" name="discord-id" required>

    <hr>
    <button type="submit" class="registerbtn">S'inscrire</button>
  </div>

  <div class="container signin">
    <p>Vous avez déjà un compte ? <a href="#">Connectez vous</a>.</p>
  </div>
</form>

<?php include "../inc/footer.php" ?>
