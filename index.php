<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
      </head>
      <?php
        include '../header.php';
      ?>
      <body>
        <br>
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
        <p>Le mot de passe est : guillaume</p>
        <p>Si vous souhaitez me tester, essayez un autre mot de passe</p>

        <form action="cyble.php" method="post">
          <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
          </p>
        </form>
          <p>Cette page est réservée au personnel de la NASA.</p>
          <p>Si vous ne travaillez pas à la NASA, inutile d'insister ! </p>
      </body>
    </html>
