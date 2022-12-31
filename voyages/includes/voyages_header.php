
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!--Bootstrap JS-->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>

    



    <title>Gestion Voyages</title>
</head>

<body>
    <!--Header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2.7rem" height="2.3rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 24"><path fill="#150452" d="M10.449 0c-3.64 0-6.71.201-7.168.468c-.8.273-1.402 2.09-1.404 4.246v1.071h-.218a.533.533 0 0 0-.088-.135a.596.596 0 0 0 .146-.392v-.544a.49.49 0 0 0-.427-.535H.432a.492.492 0 0 0-.428.539v-.002v.544c0 .15.055.288.146.393l-.001-.001a.596.596 0 0 0-.146.392V8.73c-.002.015-.002.031-.002.048c0 .25.187.457.429.487h.859A.42.42 0 0 0 1.658 9l.001-.003h.218v4.822c0 .191.205.368.536.463v.626c-.473.061-.8.274-.8.518v5.36a2.962 2.962 0 0 0 .542 1.863l-.006-.009v.921c0 .243.197.44.44.44h1.798a.44.44 0 0 0 .44-.44v-.631h11.247v.631c0 .243.197.44.44.44h1.798a.44.44 0 0 0 .44-.44v-.92a2.955 2.955 0 0 0 .536-1.86v.007v-5.36c0-.244-.331-.457-.8-.518v-.626c.331-.095.535-.272.536-.463v-4.82h.218c.06.152.202.259.369.268h.855a.492.492 0 0 0 .428-.539v.002v-2.686a.599.599 0 0 0-.146-.393l.001.001a.596.596 0 0 0 .146-.392V4.72a.49.49 0 0 0-.427-.535h-.859a.492.492 0 0 0-.428.539v-.002v.544c0 .15.055.288.146.393l-.001-.001a.553.553 0 0 0-.087.131l-.001.003h-.218V4.716c0-2.167-.608-3.992-1.414-4.251c-.49-.266-3.545-.463-7.157-.463zM3.101 3.107h14.695c.259 0 .475.184.525.429l.001.003c.102.51.16 1.097.16 1.698v.038v-.002V9c0 .296-.24.536-.536.536H2.949A.536.536 0 0 1 2.413 9V5.238c0-.601.058-1.188.169-1.756l-.009.057a.536.536 0 0 1 .526-.432zm.651 11.786H4.9c.143 0 .259.112.267.253v.001l.191 3.482v.014c0 .148-.12.268-.268.268H3.752a.268.268 0 0 1-.268-.268v-3.482c0-.148.12-.268.268-.268zm12.245 0h1.148c.148 0 .268.12.268.268v3.479c0 .148-.12.268-.268.268h-1.339a.268.268 0 0 1-.268-.268v-.015v.001l.191-3.482c.01-.14.126-.25.267-.25h.001zm-9.968.64h8.84c.074 0 .134.06.134.134v.16c0 .074-.06.134-.134.134h-8.84a.134.134 0 0 1-.134-.134v-.16c0-.074.06-.134.134-.134zm.053.964h8.733c.074 0 .134.06.134.134v.16c0 .074-.06.134-.134.134H6.082a.134.134 0 0 1-.134-.134v-.16c0-.074.06-.134.134-.134zm.054.964h8.626c.074 0 .134.06.134.134v.16c0 .074-.06.134-.134.134H6.136a.133.133 0 0 1-.133-.128v-.16c0-.074.06-.134.134-.134zm.054.964h8.518c.074 0 .134.06.134.134v.16c0 .074-.06.134-.134.134H6.19a.134.134 0 0 1-.134-.134v-.16c0-.074.06-.134.134-.134z"/></svg>
                Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="page_acceuil_voyages.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled " href="#">Superviseur</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Gestion Opérations
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item disabled" href="#">Gestionnaire Camions</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item disabled" href="#">Gestionnaire Chauffeurs</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="page_voyages.php">Gestionnaire Voyages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tableau_de_bord.php" tabindex="-1" aria-disabled="true">Tableau de bord</a>
                    </li>
                </ul>


        <div class="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="#150452" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo($_SESSION['sess_prenom']) ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-outline-dark" aria-labelledby="dropdownMenuButton2">
                  
                    <li>
                        <a class="dropdown-item active" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                         Profil
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="../logout.php">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-power" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z"/>
                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                        </svg>Log Out
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    
            </ul>
        </div>


                




            </div>
        </div>
    </nav>
