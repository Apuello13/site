<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
    <script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://testphp.matomo.cloud/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src='//cdn.matomo.cloud/testphp.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script
</head>
<body>
   <div class="cont">
    <div class="form sign-in">
        <h2>Sign In</h2>
        <label>
            <span>Email Address</span>
            <input type="email" name="email">
        </label>
        <label>
            <span>Password</span>
            <input type="password" name="password">
        </label>
        <button class="submit" type="button">Sign In</button>
        <p class="forgot-pass">Forgot Password?</p>
    </div>

    <div class="sub-cont">
        <div class="img">
            <div class="img-text m-up">
                <h2>Primera vez aquí?</h2>
                <p>Registrarse para descubrir lo que tenemos para ofrecer</p>
            </div>
            <div class="img-text m-in">
                <h2>Ya haces parte de la familia?</h2>
                <p>Si ya tienes una cuenta, inicia sesión. ¡No dejes perder las oportunidades!</p>
            </div>
            <div class="img-btn">
                <span class="m-up">Sign Up</span>
                <span class="m-in">Sign In</span>
            </div>
        </div>
        <div class="form sign-up">
            <h2>Sign Up</h2>
            <label>
                <span>Name</span>
                <input type="text">
            </label>
            <label>
                <span>Email</span>
                <input type="email">
            </label>
            <label>
                <span>Password</span>
                <input type="password">
            </label>
            <label>
                <span>Confirm Password</span>
                <input type="password">
            </label>
            <button class="submit">Sign Up Now</button>
        </div>
    </div>
   </div>
   <script type="text/javascript" src="script.js"></script>
</body>
</html>