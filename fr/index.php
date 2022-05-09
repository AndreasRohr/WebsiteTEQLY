<!DOCTYPE html>
<html lang="fr">
<script>
    // Random String return for index.php
    var items = Array("Vos partenaires.", "Vos supporteurs.", "Vos programmeurs.");

    window.onload = function answerWriter() {
        document.getElementById('titleh1').style.visibility = "visible";
        document.getElementById("titleh1").innerHTML = randString();
    }
    function randString() {
        var item = items[Math.floor(Math.random() * items.length)];
        return item;
    }
</script>
<head>
<?php include 'structure_header_imports.php' ?>
    <meta charset="UTF-8">
    <meta name="description" content="Bienvenue sur notre site web. Apprenez-en plus sur nous, nos services, notre équipe et prenez contact avec nous.">
    <meta name="keywords" content="teqly, teqly gmbh, it service, it service desk, it service management, website, website erstellen, website erstellen schweiz, website erstellen lassen, website design, website analyse, website aufbau, website agentur, website anbieter, webdesign, webdesigner, webdesign agentur, webdesign agentur zürich, webdesign zürich, webdesign agentur schweiz, webdesign aarau, webdesign ärzte, webdesign für ärzte, webdesign für ärzte - praxis website - online praxismarketing, webdesign aargau, webdesign schweiz, webdesign bern, programmierer, programmiererin, programmierer schweiz, programmierer beauftragen, support computer, computer support and services, datenrettung, datenrettung zürich, datenrettung festplatte, datenrettung schweiz, it support, it support zürich, informatik, informatiker, informatiker plattformentwicklung, softwareentwicklung, softwareentwicklungsprozess, softwareentwicklung zürich, softwareentwicklung schweiz, softwareentwicklung bern, supportvertrag, supportvertrag software, supportvertrag website, supportvertrag buchen, it support vertrag, cybersicherheit, cybersicherheit schweiz, cybersicherheit unternehmen, cybersicherheit anbieter, cybersicherheit agentur, cybersicherheit admin, cyber sicherheits check, it management, it management and consulting, it management beratung, it management consultant, it beratung, it beratung schweiz, it beratung buchen, it beratung zürich, it beratung schweiz, it beratung aargau, software, software update, software engineer, softwareentwickler, software as a service, software engineering, software architect, software ärzte, software änderungsmanagement, software baugewerbe, hardware, hardware firewall, hardware auslesen, hardware computer, hardware kaufen oder leasen, hardware kaufen günstig, hardware kaufen unternehmen, hardware kaufen pc, hardware broker schweiz, büro hardware kaufen, hardware über firma kaufen, server hardware gebraucht kaufen, it hardware kaufen oder leasen, hardware security module kaufen, software kaufen, software kaufen schweiz, software kaufen auf rechnung, softwareentwicklung kaufen, faktura software kaufen, friseur software kaufen, forum software kaufen, software kaufen homepage, netzwerk kaufen, netzwerk kaufen pc, netzwerk switch kaufen, netzwerk hub kaufen, netzwerk server kaufen, netzwerk set kaufen, netzwerk drucker kaufen, netzwerk einrichten, büronetzwerk, büronetzwerk aufbauen, büronetzwerk einrichten, server für büronetzwerk, kleines büronetzwerk aufbauen, praxis informatik, arztpraxis informatik, informatik arztpraxis, kmu informatik, kmu informatik support, kmu informatik partner, kmu-informatik, kmu informatik zürich, kmu it, kmu it management, kmu itm, kmu it support, kmu it infrastruktur, kmu it sicherheit, kmu it lösungen, it ausgaben kmu, it consulting kmu, it dienstleister kmu, it für kmu, it notfallplan kmu, kmu-informatik, it-kosten kmu, kmu innovativ it, it organisation kmu, it outsourcing kmu, kmu it security, kmu it service, kmu it schweiz, it trends kmu, it für kmu, kmu it beratung, webdesign kmu, webdesign für kmu, kmu website, webdesign firma, it firma, firmennetzwerk, firmennetzwerk einrichten, firmennetzwerk aufbauen, it partner, it partner consulting, partner it-dienstleistungen, it partner schweiz">
    <meta name="author" content="TEQLY GmbH">
    <title>Nous sommes TEQLY.</title>
    <?php include 'structure_header.php' ?>
</head>
<body id="body">

<div id="main" style="margin-top: 7rem">
    <div class="title-row">
        <div class="title-left">
                <h2 style="margin-left: 3.5rem">Nous sommes TEQLY.</h2>
                <h1 id="titleh1" class="indextitle" style="visibility: hidden">.</h1>
        </div>
    </div>
    <div class="index-container" style="margin-top: 4rem">
        <video autoplay muted loop style="z-index: -1" playsinline>
            <source src="../assets/teqly_index_video.mp4" type="video/mp4">
            Votre navigateur ne prend pas en charge la balise vidéo.
        </video>
        <div  class="title-right">
            <h2>Bienvenue chez TEQLY.<br>Nous sommes vos interlocuteurs lorsqu'il s'agit de solutions informatiques innovantes et orientées vers le client.</h2>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_products.php">Services</a>
        </div>
        <div class="index-col-right">
            <p>Dans un monde complexe et interconnecté, il n'est pas facile de garder une vue d'ensemble. S'arrêter à la numérisation revient à faire un pas en arrière. Nous sommes le partenaire de votre entreprise lorsqu'il s'agit de relever des défis dans le monde numérique. Notre gamme de services est variée et couvre tous les besoins d'une entreprise. Qu'il s'agisse de conseil, de formation, d'assistance, de matériel ou de logiciels, nous sommes à vos côtés pour que vous puissiez vous concentrer à nouveau sur votre activité principale. <a href="tq_products.php">Apprendre plus.</a></p>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#easit">Matériel en tant que service</a>
            </div>
            <div class="under-section-col-right">
                <p>De nos jours, il existe des abonnements pour presque tout. De l'abonnement pour cartouches d'imprimante à l'abonnement pour voiture, tout est possible. Ces modèles offrent les avantages les plus divers. Ainsi, grâce à l'abonnement pour cartouches d'imprimante, on ne doit jamais s'inquiéter de ne pas avoir assez de toner. Et avec l'abonnement voiture, les frais d'achat élevés sont supprimés, ainsi que les tâches annexes fastidieuses comme la recherche d'une assurance, l'achat de vignettes, les rendez-vous chez le garagiste, etc. Vous pouvez également profiter de tous ces avantages avec notre abonnement matériel appelé EASIT.rent. Détendez-vous et concentrez-vous sur votre activité principale. Pour un prix fixe, nous vous louons toute l'infrastructure informatique de votre entreprise, y compris le service et le support. <a href="tq_products.php">Apprendre plus.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#programming">Développement</a>
            </div>
            <div class="under-section-col-right">
                <p>En collaboration avec nos clients, nous développons les produits logiciels les plus divers. Du petit site web aux applications de bureau d'entreprise, en passant par des applications web complexes, nous vous aidons à réaliser vos projets. Selon vos souhaits, nous prenons en charge certaines tâches partielles au sein d'un projet de logiciel (par exemple : ingénierie des exigences, conception UI/UX, direction de projet, programmation, documentation ou gestion de la qualité) ou nous vous proposons une solution globale englobant toutes les disciplines. <a href="tq_products.php">Apprendre plus.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#infrastructure">Infrastructure</a>
            </div>
            <div class="under-section-col-right">
                <p>Une solide infrastructure de réseau et de serveur est devenue l'épine dorsale de toute entreprise. Qu'il s'agisse d'une balance intelligente en réseau dans une boulangerie, d'un réseau Wi-Fi lors d'un événement ou d'un poste de travail dans un atelier : Toutes les applications reposent sur une infrastructure réseau. Nous vous accompagnons depuis le développement d'une solution d'infrastructure adaptée jusqu'à la maintenance et l'exploitation, en passant par la planification des travaux. En collaboration avec nos entreprises partenaires du secteur de l'électricité et de la construction, nous réalisons également des projets d'infrastructure complexes. <a href="tq_products.php">Apprendre plus.</a></p>
            </div>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_references.php">Projets</a>
        </div>
        <div class="index-col-right">
            <p>Comme le dit un vieux proverbe<em>"Les actes en disent plus long que les mots"</em>. C'est pourquoi nous avons rassemblé quelques projets afin de vous donner un petit aperçu de nos domaines d'activité. Nous comptons parmi nos clients des petites, moyennes et grandes entreprises et organisations issues des secteurs les plus divers. <a href="tq_products.php">Apprendre plus.</a></p>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_jobs.php">À propos de TEQLY</a>
        </div>
        <div class="index-col-right">
            <p>Pendant nos études, nous avons créé TEQLY. Nous nous sommes lancés à trois dans l'aventure TEQLY au printemps 2020, dans une salle de cours de la FHNW. Au cours des dernières années, nous avons incroyablement appris et nous avons grandi, en même temps que nos clients. Notre équipe ne cesse de s'agrandir et est prête à relever tous les nouveaux défis. <a href="tq_products.php">Apprendre plus.</a></p>
        </div>

    </div>
    <br>

    <?php include 'structure_footer.php' ?>

</div>
</body>
</html>
<script type="text/javascript" src="../js/script.js"></script>



