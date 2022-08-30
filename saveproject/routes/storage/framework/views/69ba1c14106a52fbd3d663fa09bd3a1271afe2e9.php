<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <div>
        <a href="https://sodibci.net/"

                                style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; color: #3d4852; font-size: 19px; font-weight: bold; text-decoration: none; display: inline-block;">

                                <img src="https://sodibci.net/frontend/assets/images/logo.png" class="logo"

                                    alt="SODIBCI Logo"

                                    style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; max-width: 100%; border: none; height: 75px; width: 75px;">

                            </a>
    </div>
    <p>
        <?php echo e($body); ?> <br>
        <p style="text-align: center">
            <a href="<?php echo e($action_link); ?>" style="background-color: #61c206;
            border-radius: 0.25em;
            border: solid #61c206;
            color: #fff;
            padding: 0.5em 1em;">Réinitialiser mon mot de passe</a>
        </p>
        ou cliquez sur le lien ci-dessous.
    </p>

    <?php echo e($action_link); ?>


    <style>
        .content p{
            color: #000;
          }

        .content{
          background-color: #f7f7f7;
          border-radius: 0.25em;
          border: solid black;
        }

        .link{
            
        }
    </style>
  </body>
</html>
<?php /**PATH /home/sodiicmc/public_html/resources/views/mail/admin-password-forgot.blade.php ENDPATH**/ ?>