<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>terms</title>
</head>
<style>


body{
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: TrebuchetMS, "Trebuchet MS", Verdana, Tahoma, sans-serif;
  font-family: Arial, sans-serif;
  font-size: 0.9em;
  max-height: 100%;
  background-color: #ECECEC;
  -webkit-backface-visibility: hidden;
}
/* CSS section Base Site */
#main {
  position: relative;
  position: absolute;
  top: 60px;
  left:22%;
  right:300px;
}
@media only screen and (max-width: 1371px) { /* appliqué uniquement sur plus petit que 1371*/
  #main {
    left: 300px;
    right: 22%;
  }
  .comic-panel {
    width: 100%!important;
  }
}
@media only screen and (min-width: 480px) and (max-width: 960px) { /* appliqué uniquement sur tablette */

  #main {
    left: 300px;
    right: 0px;
  }
}
@media only screen and (max-width: 768px) { /* appliqué uniquement sur Gsm */
#main {
    left: 0;
    right: 0;
  }
}
/* CSS section Base Site FIN */
#main-head{
  width:100%;
  height:220px;
  background-position:right;
  background-size:contain;
  background-repeat:no-repeat;
  border-bottom: 10px solid #FFB788;
}
.main-head-background-alpha{
  background-image:url(http://bigcoding.com/fisconsult/imgs/header_background.png);
  background-color: #333333;
}
.main-head-background-beta{
  background-image:url(http://bigcoding.com/fisconsult/imgs/header_background_deux.png);
  background-color: #eae6d4;
}
.comic-panel {
  width: 50%;
  height: 250px;
  top: 60px;
  position: relative;
  margin: 0px auto;
  overflow: hidden;
  font: 0.9em Helvetica;
  float:left;
}

.comic-panel .text {
  width: 54%;
  height: 230px;
  position: absolute;
  left: 37px;
  transform: skew(-15deg);
  -moz-transform: skew(-15deg);
  -ms-transform: skew(-15deg);
  -webkit-transform: skew(-15deg);
  -o-transform: skew(-15deg);
  background: white;
  box-shadow: 3px 5px 10px rgba(0,0,0,0.1);
  z-index: 1;
}

.comic-panel .text:before {
  content: "";
  dislay: block;
  position: absolute;
  height: 230px;
  width: 60px;
  left: -27px;
  transform: skew(15deg);
  -moz-transform: skew(15deg);
  -ms-transform: skew(15deg);
  -webkit-transform: skew(15deg);
  -o-transform: skew(15deg);
  background: white;
  border-left: 1px solid rgba(0,0,0,0.05);
  -webkit-backface-visibility: hidden;
}

.comic-panel .text h1 {
  transform: skew(15deg);
  -moz-transform: skew(15deg);
  -ms-transform: skew(15deg);
  -webkit-transform: skew(15deg);
  -o-transform: skew(15deg);
  text-align:left;
  -webkit-margin-after: 0em;
  font-size:2em;
}
.comic-panel .text h2 {
  transform: skew(15deg);
  -moz-transform: skew(15deg);
  -ms-transform: skew(15deg);
  -webkit-transform: skew(15deg);
  -o-transform: skew(15deg);
  margin-left:10px;
  -webkit-margin-before: 0.2em;
  -webkit-margin-after: 0em;
  color: #e8a17d;
  font-size: 1.1em;
}
.comic-panel .text p {
  transform: skew(15deg);
  -moz-transform: skew(15deg);
  -ms-transform: skew(15deg);
  -webkit-transform: skew(15deg);
  -o-transform: skew(15deg); 
  width:95%;
  -webkit-margin-before: 0.9em;
  -webkit-margin-after: 0em;
}
.comic-panel .comic-image {
  width: 56%;
  height: 230px;
  right: -90px;
  top: 0;
  transform: skew(-15deg);
  -moz-transform: skew(-15deg);
  -ms-transform: skew(-15deg);
  -webkit-transform: skew(-15deg);
  -o-transform: skew(-15deg);
  position: absolute;
  overflow: hidden;
} 

.comic-panel .cimg {
  display: block;
  transform: skew(15deg);
  -moz-transform: skew(15deg);
  -ms-transform: skew(15deg);
  -webkit-transform: skew(15deg);
  -o-transform: skew(15deg);
  width: 290px;
  height: 230px;
  position: absolute;
  left: -27px;
  top: 0;
  background-size: cover;
}
.comic-panel .comic-image .un{
  background: url('http://sevenformation.fr/wp-content/uploads/Formation-Comptabilite-General.jpg');
}
.comic-panel .comic-image .deux{
  background: url('http://www.pramadex.com/wp-content/uploads/2011/07/conseil.jpg');
}
.comic-panel .comic-image .trois{
  background: url('http://www.wandis.net/images/expertises_001.jpg');
}
.comic-panel .comic-image .quatre{
  background: url('http://www.ucm.be/var/ucm/storage/images/accueil-ucm/carrousel/gestion-sociale-et-salariale-liege/892154-1-fre-FR/Gestion-sociale-et-salariale-Liege_carousel_top.jpg');
}
.comic-panel .comic-image .cinq{
  background: url('http://www.mbaadmissionscoach.com/wp-content/uploads/2013/08/MBA-Admissions-Consultant-help.jpg');
}


/* Css utiliser pour d'autre page aussi*/
.box-article {
	position: relative;
	max-width: 1000px;
	width: auto;
	padding: 40px;
	margin: 0px auto;
	background-color: #fff;
	-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
}
.article-box-meta h5 {
	color: blue;
}
.box-article intro {
	display: block;
	font-style: italic;
	color: #666;
	font-size: 13px;
	font-weight: bold;
}
.box-article content p {
	font-size: 13px;
	text-align: left;
}





</style>
<body>
    




<section id="main">
  <div id="main-head" class="main-head-background-alpha">
    <!--    <table width="100%">
    <tbody>
    <tr>
        <td> <blockquote class="blockquote">" Le mot chinois CRISE se compose de deux signes : RISQUES et OPPORTUNITÉS "</blockquote><cite class="cite"> J.F. Kennedy</cite></td>
        <td width="300px"> <div id="banner"><object type="application/x-shockwave-flash" data="http://studioalaimo.it/banner.swf" width="300" height="199" ><param name="movie" value="banner.swf"><param name="wmode" value="opaque"></object></div></td>
    </tr>
    </tbody>
    </table>-->

  </div>
  <article class="box-article">


    <h2>Bienvenue sur le site de VENTA</h2>
    <p>
     
Pour assurer une transaction sécurisée et claire pour la vente de terrains sur VENTA, il est important d'établir des conditions claires que le vendeur doit accepter avant de soumettre une demande de publication d'offre. Voici les conditions :
    </p>
   
   
      <h3>Les principaux services proposés sont :</h3>
      <li> Création d'annonces avec photos, descriptions, localisation, superficie, prix, etc.</li>
      <li>Validation des annonces avant publication </li> 
      <li>Recherche avancée par localisation, prix, superficie, type de terrain, etc. </li>
      <li> Organisation de visites de terrains</li>
      <li>Services d'inspection par des professionnels</li>
      <li>FAQ et ressources en ligne</li>
      <li>Assistance 24/7 pour répondre aux questions et résoudre les problèmes </li>
      <li> Conseils pour optimiser la présentation et la description des terrains</li>
      <li>Accompagnement dans les démarches administratives et légales pour la vente</li>
     
    </ul>
    </p>

  <div class="comic-panel">
    <div class="text">
      <h1>Authenticité des Informations:</h1>
      <h2>Authenticité des Informations:</h2>
      <p>Le vendeur certifie que toutes les informations fournies concernant le terrain sont exactes et véridiques, y compris la localisation, la superficie, le statut juridique, et le prix demandé..</p></div>
    <div class="comic-image"><span class="cimg un"></span></div>
  </div>
  <div class="comic-panel">
    <div class="text">
      <h1>Documentation Légale:</h1>
      <h2>Documentation Légale:</h2>
      <p>Le vendeur doit fournir tous les documents légaux nécessaires prouvant la propriété du terrain, tels que le titre de propriété, le plan cadastral, et tout autre document pertinent.
        Les documents doivent être à jour et authentiques. Toute tentative de falsification entraînera une interdiction permanente de la plateforme</p></div>
    <div class="comic-image"><span class="cimg deux"></span></div>
  </div>
  <div class="comic-panel">
    <div class="text">
      <h1>Conformité avec les Régulations Locales:</h1>
      <h2> </h2>
      <p>Le vendeur s'engage à ce que le terrain soit conforme à toutes les régulations et lois locales en matière de vente de terrains</p></div>
    <div class="comic-image"><span class="cimg trois"></span></div>
  </div>
  <div class="comic-panel">
    <div class="text">
      <h1>Prix de Vente:</h1>
      
      <p>Le prix de vente doit être raisonnable et refléter la valeur réelle du terrain selon le marché local.
        Toute tentative de manipulation des prix pour arnaquer les acheteurs est strictement interdite.</p></div>
    <div class="comic-image"><span class="cimg quatre"></span></div>
  </div>
  <div class="comic-panel">
    <div class="text">
      <h1>Conditions de Paiement:</h1>
      <h2>Conditions de Paiement: </h2>
      <p>Les modalités de paiement doivent être clairement définies et acceptées par les deux parties. Cela peut inclure des acomptes, des paiements échelonnés, ou un paiement intégral à la signature de l'acte de vente.
        Le vendeur doit indiquer les méthodes de paiement acceptées (virement bancaire, chèque de banque, etc.).</p></div>
    <div class="comic-image"><span class="cimg cinq"></span></div>
  </div>
  <div class="comic-panel">
    <div class="text">
      <h1>Processus de Transaction:</h1>
      <h2>Processus de Transaction: </h2>
      <p>Le vendeur doit accepter de suivre un processus de transaction sécurisée, qui peut inclure l'utilisation d'un notaire ou d'un avocat pour finaliser la vente.
        Les frais associés à la transaction (notaire, enregistrement, etc.) doivent être clairement définis et acceptés.</p></div>
    <div class="comic-image"><span class="cimg cinq"></span></div>
  </div>
  </article> 
</section>





</body>
</html>