<?php
// Démarrage de la session
session_start();
// Inclusion du fichier de haut de page
include('includes/header.php');

?>
<!-- Services-->
<section class="page-section" id="services">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Services</h2>
      <h3 class="section-subheading text-muted">Vous trouverez ci-dessous les services proposées</h3>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
        <a href="services_recrutement/recrutement.php">
          <h4 class="my-3">Coaching RECRUTEMENT</h4>
        </a>
        <p class="text-muted">Vous avez des difficutés pour réussir vos entretiens de recrutement ?</p>
        <p class="text-muted">Vous ne savez pas comment orienter vos recherches pas rapport à la crise actuelle ?</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <a href="services_informatique/informatique.php">
          <h4 class="my-3">Coaching INFORMATIQUE</h4>
        </a>
        <p class="text-muted">L'informatique est un calvére pour vous au quotidien ?</p>
        <p class="text-muted">Vous souhaitez en savoir plus ?</p>
        <p class="text-muted">Séance individuelle et personnalisé en fonction de vos besoin ! </p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
        </span>
        <a href="services_depannage/depannage.php">
          <h4 class="my-3">Dépannage INFORMATIQUE</h4>
        </a>
        <p class="text-muted">Vous rencontrez des problèmes informatiques ?</p>
        <p class="text-muted">Vous ne savez pas comment les résoudre ?</p>
        <p class="text-muted">Je suis la pour vous aider ! SATISFAIT OU REMBOURSE</p>
      </div>
    </div>
  </div>
</section>
<!-- Avis -->
<section class="page-section bg-light" id="portfolio">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Donner votre avis !</h2>
      <h3 class="section-subheading text-muted">Merci de vous connacter pour laisser un commentaire</h3>
    </div>
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Retour coaching recrutement </div>
            <div class="portfolio-caption-subheading text-muted">Illustration</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Retour coaching informatique</div>
            <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Finish</div>
            <div class="portfolio-caption-subheading text-muted">Identity</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Lines</div>
            <div class="portfolio-caption-subheading text-muted">Branding</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Southwest</div>
            <div class="portfolio-caption-subheading text-muted">Website Design</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Window</div>
            <div class="portfolio-caption-subheading text-muted">Photography</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Mon parcours -->
<section class="page-section" id="about">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Qui suis-je ?</h2>
      <h3 class="section-subheading text-muted"></h3>
    </div>
    <ul class="timeline">
      <li>
        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>2019-2021</h4>
            <h4 class="subheading">Ingénieur d'affaires</h4>
          </div>
          <div class="timeline-body"><p class="text-muted">
            En tant que business manager, mes activités comprennent :

            - Un axe business développement : prospection, développement de portefeuille et de relation clients permettant d'aboutir à des axes de collaboration avec de nouveaux clients.
            - Un axe recrutement : réalisation d'entretiens candidats afin d'embaucher des ingénieurs consultants souhaitant intégrer nos équipes.
            - Un axe management : gestion de carrières des ingénieurs consultants et suivi tout au long de leur carrière au sein d'ALTEN. </p></div>
          </div>
        </li>
        <li>
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>2019</h4>
              <h4 class="subheading">Diplome d'ingénieur en informatique industriel, Polytech TOURS</h4>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2016-2019</h4>
                <h4 class="subheading">Administration Système, Réseau et Télécommunication, AUTOLIV ISODELTA</h4>
              </div>
              <div class="timeline-body"><p class="text-muted">
                -> Gestion du parc informatique (pcs, serveurs, téléphonie)
                -> Migration et virtualisation des serveurs
                -> Gestion des utilisateurs (Active Directory)
                -> Support utilisateur / Gestion des incidents (ITIL)
                -> Développement d'application WEB dans un objectif d'amélioration continue en production
                -> Développement de scripts divers afin d'automatiser les tâches récurrentes
                -> Gestion de projets IT
                -> Mise en place de la redondance fibre optique
                -> Analyse et amélioration de l'infrastructure existante (AMDEC)</p></div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2016</h4>
                  <h4 class="subheading">DUT Génie Electrique et Informatique Industrielle,Université de Poitiers</h4>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>
                    Be Part
                    <br />
                    Of Our
                    <br />
                    Story!
                  </h4>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <!-- Se connecter-->
        <section class="page-section bg-light" id="team">
          <div class="container">
            <div class="text-center">
              <h2 class="section-heading text-uppercase">Connectez-vous à votre espace !</h2>
              <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="card">
                  <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Création de votre compte </h4>
                    <form id="creer" method="post" action="index.php">
                      <div class="form-group">
                        <label>Votre Prénom </label>
                        <input name="prenom" class="form-control" placeholder="prenom" type="text">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <label>Votre Nom </label>
                        <input name="nom" class="form-control" placeholder="nom" type="text">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <label>Votre Numéro de téléphone </label>
                        <input name="numero" class="form-control" placeholder="numero" type="tel">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <label>Votre ville </label>
                        <input name="ville" class="form-control" placeholder="ville" type="text">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <label>Votre adresse mail </label>
                        <input name="email" class="form-control" placeholder="email" type="email">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <label>Votre mot de passe</label>
                        <input name="password" class="form-control" placeholder="******" type="password">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <label>Confirmation de votre mot de passe</label>
                        <input name="confirmation_password" class="form-control" placeholder="******" type="password">
                      </div> <!-- form-group// -->

                      <?php
                      //creer un compte
                      if(isset($_POST['creer']) && $_POST['creer']=='creer'){
                        //test si tous les champs sont remplies
                        if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["numero"]) && isset($_POST["ville"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirmation_password"])){
                          $prenom = "'" . $_POST["prenom"] . "'";
                          $nom = "'" . $_POST["nom"] . "'";
                          $numero = $_POST["numero"];
                          $ville = "'" . $_POST["ville"] . "'";
                          $email = "'" . $_POST["email"] . "'";
                          $password = "'" . $_POST["password"] . "'";

                          if($_POST["confirmation_password"] == $_POST["password"] ){
                            $stmt = $connect->query("INSERT INTO users (prenom,nom,numero,ville,email,password) VALUES ($prenom,$nom,$numero,$ville,$email,$password)");
                          }else{
                            echo "<h4> Les deux mots de passe sont différents </h4>";
                          }
                        }else{
                          echo "<h4> Merci de remplir tous les champs </h4>";
                        }
                      }
                      ?>
                      <div class="form-group">
                        <button type="submit" name="creer" value="creer" class="btn btn-primary btn-block">Créer votre compte</button>
                      </div> <!-- form-group// -->
                    </form>
                  </article>
                </div> <!-- card.// -->
              </div>
              <div class="col-lg-6">
                <div class="card">
                  <article class="card-body">
                    <a href="" class="float-right btn btn-outline-primary">Déconnection</a>
                    <h4 class="card-title mb-4 mt-1">Se connecter </h4>
                    <form id="connecter" method="post" action="index.php">
                      <div class="form-group">
                        <label>Votre adresse mail </label>
                        <input name="email_connecter" class="form-control" placeholder="Email" type="email">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <a class="float-right" href="#">Mot de passe oublié ?</a>
                        <label>Votre mot de passe</label>
                        <input name="password_connecter" class="form-control" placeholder="******" type="password">
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <div class="checkbox">
                          <label> <input type="checkbox">Sauvegarder mot de passe</label>
                        </div> <!-- checkbox .// -->
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <button type="submit" name="connecter" value="connecter" class="btn btn-primary btn-block"> Connection  </button>
                      </div> <!-- form-group// -->
                      <?php
                      //se connecter
                      if(isset($_POST['connecter']) && $_POST['connecter']=='connecter'){
                        // Test si les champs email et password sont mises à 1
                        if(isset($_POST["email_connecter"]) && isset($_POST["password_connecter"])){
                          // Initialisation des variables
                          $email_connecter = $_POST["email_connecter"];
                          $password_connecter = $_POST["password_connecter"];

                          // Lecture Base de donnée
                          $res_exist = $connect->query("SELECT EXISTS (SELECT * from users WHERE (email = '$email_connecter' and password = '$password_connecter')) AS user_exists");
                          $row_exist = mysqli_fetch_array($res_exist);

                          if ($row_exist['user_exists'] == 1) {
                            // Lecture Base de donnée
                            $res_user = $connect->query("SELECT prenom, nom from users WHERE (email = '$email_connecter' and password = '$password_connecter')");
                            $row_user = mysqli_fetch_array($res_user);

                            $_SESSION['prenom'] = $row_user['prenom'];
                            $_SESSION['nom'] = $row_user['nom'];

                            //header('Location: index.php');
                          }
                          else {
                            $_SESSION['prenom'] = "";
                            $_SESSION['nom'] = "";
                            echo "<h4> Votre identifiant et/ou mot de passe est erronées </h4>";
                          }
                        }
                      }
                      ?>
                    </form>
                  </article>
                </div> <!-- card.// -->
              </div>
            </div>
          </div>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
          <div class="container">
            <div class="text-center">
              <h2 class="section-heading text-uppercase">Contact</h2>
              <h3 class="section-subheading text-muted">Une question ? Contactez moi !</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group mb-md-0">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-group-textarea mb-md-0">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-4 text-lg-left">Copyright © Nicolas MANCEAU</div>
              <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
              </div>
            </div>
          </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="modal-body">
                      <!-- Project Details Go Here-->
                      <h2 class="text-uppercase">Project Name</h2>
                      <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                      <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                      <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                      <ul class="list-inline">
                        <li>Date: January 2020</li>
                        <li>Client: Threads</li>
                        <li>Category: Illustration</li>
                      </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close Project
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="modal-body">
                      <!-- Project Details Go Here-->
                      <h2 class="text-uppercase">Project Name</h2>
                      <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                      <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                      <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                      <ul class="list-inline">
                        <li>Date: January 2020</li>
                        <li>Client: Explore</li>
                        <li>Category: Graphic Design</li>
                      </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close Project
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="modal-body">
                      <!-- Project Details Go Here-->
                      <h2 class="text-uppercase">Project Name</h2>
                      <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                      <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                      <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                      <ul class="list-inline">
                        <li>Date: January 2020</li>
                        <li>Client: Finish</li>
                        <li>Category: Identity</li>
                      </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close Project
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="modal-body">
                      <!-- Project Details Go Here-->
                      <h2 class="text-uppercase">Project Name</h2>
                      <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                      <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                      <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                      <ul class="list-inline">
                        <li>Date: January 2020</li>
                        <li>Client: Lines</li>
                        <li>Category: Branding</li>
                      </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close Project
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="modal-body">
                      <!-- Project Details Go Here-->
                      <h2 class="text-uppercase">Project Name</h2>
                      <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                      <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                      <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                      <ul class="list-inline">
                        <li>Date: January 2020</li>
                        <li>Client: Southwest</li>
                        <li>Category: Website Design</li>
                      </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close Project
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="modal-body">
                      <!-- Project Details Go Here-->
                      <h2 class="text-uppercase">Project Name</h2>
                      <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                      <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                      <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                      <ul class="list-inline">
                        <li>Date: January 2020</li>
                        <li>Client: Window</li>
                        <li>Category: Photography</li>
                      </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close Project
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        // Fermeture de la connection mysql
        mysqli_close($connect);
        // Inclusion du fichier de bas de page
        include('includes/footer.php');
        ?>
