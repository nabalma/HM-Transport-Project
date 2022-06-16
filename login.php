<?php include "includes/header.php"; ?>


  <!----------------------------------------------------------------------------------------------------------------->

  

<!--Login Content-->
 <div class="row mt-5 mb-5">

<div class="mt-4 mb-4 col-6 d-none d-md-block">
    <img class="ms-4 rounded mx-auto d-block img-thumbnail " src="img/camions.jpg " alt="Image_accueil " srcset=" " />
</div>
<div class="mt-5 mb-5 col-4 container align-middle login-formulaire ">
    <main class="form-signin w-100 m-auto">
        <form action="traitement_login.php" method="post">

            <h1 class="h3 mt-4 mb-3 fw-normal text-center ">Connectez - Vous</h1>

            <div class="mb-1 form-floating me-2 ">
                <input name = "email" type="email " class="col form-control " id="floatingInput " placeholder="name@example.com " required>
                <label for="floatingInput ">Email address</label>
            </div>

            <div class="mb-1 form-floating me-2 ">
                <input name = "password" type="password" class="form-control " id="floatingPassword " placeholder="Password " minlength="8" maxlength="12" required>
                <label for="floatingPassword ">Password</label>
            </div>

            <div class="me-2 ">
                <button name = "login" class="mb-1 w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
            </div>
            <hr>
            <p> Première Visite ? <a href="creation_compte.php">Créer votre compte</a></p>



            <hr>
            <div class=" invisible alert alert-danger alert-dismissible fade show" role="alert" id="erreurCredentiels">
                  <strong>Mot de passe et/ou adresse Email non valides.</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
           <hr>

        </form>
    </main>
</div>

</div>






  <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>

