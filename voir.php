<?php
    include_once "./src/head.inc.php";
   

?>
<body>
    <header>
    <h1>
            <span aria-hidden="true">
                     
                &#128640;
            </span>
            Connexion POO
        </h1>
    </header>
    <aside>
        <figure class="d-flex flex-column flex-md-row flex-items-center flex-md-items-center">
            <div class="col-2 d-flex flex-items-center flex-items-center flex-md-items-start" role="region" aria-labelledby="picture">
              <img id="picture" class="width-full avatar mb-2 mb-md-0" src="https://github.com/github.png" alt="github" />
            </div>
            <figcaption class="col-12 col-md-10 d-flex flex-column flex-justify-center flex-items-center flex-md-items-start pl-md-4">
              <h1 class="text-normal lh-condensed">GitHub</h1>
              <p class="h4 color-fg-muted text-normal mb-2">How people build software.</p>
              <a class="color-fg-muted text-small" href="https://github.com/giusmili/pattern_design">https://github.com/giusmili/pattern_design</a>
            </figcaption>
        </figure>
    </aside>
    <main>
        <section class="blankslate">
            <h2>
                Connectez-vous
            </h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">

            <label for="login">Login</label>
            <input class="form-control" name="mail" type="text" placeholder="Login" id="login">

            <label for="pass">Password</label>
            <input class="form-control input-monospace"  id="pass" name="pass" type="password" placeholder="password">
            <input type="submit" class="btn btn-primary" value="Envoyer">
            </form>
            <p class="flash">
              
              <img src="https://github.com/travis-ci.png"  class="CircleBadge-icon" alt="">
         
                Flash message!
            </p>
        </section>
    
    </main>
   <?php
    include_once "./src/footer.inc.php"
   ?>
</body>
</html>