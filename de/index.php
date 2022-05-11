<!DOCTYPE html>
<html lang="de">
<script>
    // Random String return for index.php
    var items = Array("Ihre IT-Partner.", "Ihre Problemlöser.", "Ihre Supporter.", "Ihre Programmierer.", "Ihre IT-Berater.");

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
    <meta name="description" content="Wilkommen auf unserer Website. Erfahren Sie mehr über uns, unsere Dienstleistungen, unser Team und nehmen Sie Kontakt mit uns auf.">
    <meta name="keywords" content="teqly, teqly gmbh, it service, it service desk, it service management, website, website erstellen, website erstellen schweiz, website erstellen lassen, website design, website analyse, website aufbau, website agentur, website anbieter, webdesign, webdesigner, webdesign agentur, webdesign agentur zürich, webdesign zürich, webdesign agentur schweiz, webdesign aarau, webdesign ärzte, webdesign für ärzte, webdesign für ärzte - praxis website - online praxismarketing, webdesign aargau, webdesign schweiz, webdesign bern, programmierer, programmiererin, programmierer schweiz, programmierer beauftragen, support computer, computer support and services, datenrettung, datenrettung zürich, datenrettung festplatte, datenrettung schweiz, it support, it support zürich, informatik, informatiker, informatiker plattformentwicklung, softwareentwicklung, softwareentwicklungsprozess, softwareentwicklung zürich, softwareentwicklung schweiz, softwareentwicklung bern, supportvertrag, supportvertrag software, supportvertrag website, supportvertrag buchen, it support vertrag, cybersicherheit, cybersicherheit schweiz, cybersicherheit unternehmen, cybersicherheit anbieter, cybersicherheit agentur, cybersicherheit admin, cyber sicherheits check, it management, it management and consulting, it management beratung, it management consultant, it beratung, it beratung schweiz, it beratung buchen, it beratung zürich, it beratung schweiz, it beratung aargau, software, software update, software engineer, softwareentwickler, software as a service, software engineering, software architect, software ärzte, software änderungsmanagement, software baugewerbe, hardware, hardware firewall, hardware auslesen, hardware computer, hardware kaufen oder leasen, hardware kaufen günstig, hardware kaufen unternehmen, hardware kaufen pc, hardware broker schweiz, büro hardware kaufen, hardware über firma kaufen, server hardware gebraucht kaufen, it hardware kaufen oder leasen, hardware security module kaufen, software kaufen, software kaufen schweiz, software kaufen auf rechnung, softwareentwicklung kaufen, faktura software kaufen, friseur software kaufen, forum software kaufen, software kaufen homepage, netzwerk kaufen, netzwerk kaufen pc, netzwerk switch kaufen, netzwerk hub kaufen, netzwerk server kaufen, netzwerk set kaufen, netzwerk drucker kaufen, netzwerk einrichten, büronetzwerk, büronetzwerk aufbauen, büronetzwerk einrichten, server für büronetzwerk, kleines büronetzwerk aufbauen, praxis informatik, arztpraxis informatik, informatik arztpraxis, kmu informatik, kmu informatik support, kmu informatik partner, kmu-informatik, kmu informatik zürich, kmu it, kmu it management, kmu itm, kmu it support, kmu it infrastruktur, kmu it sicherheit, kmu it lösungen, it ausgaben kmu, it consulting kmu, it dienstleister kmu, it für kmu, it notfallplan kmu, kmu-informatik, it-kosten kmu, kmu innovativ it, it organisation kmu, it outsourcing kmu, kmu it security, kmu it service, kmu it schweiz, it trends kmu, it für kmu, kmu it beratung, webdesign kmu, webdesign für kmu, kmu website, webdesign firma, it firma, firmennetzwerk, firmennetzwerk einrichten, firmennetzwerk aufbauen, it partner, it partner consulting, partner it-dienstleistungen, it partner schweiz">
    <meta name="author" content="TEQLY GmbH">
    <title>Wir sind TEQLY.</title>
    <?php include 'structure_header.php' ?>
</head>
<body id="body">

<div id="main" style="margin-top: 7rem">
    <div class="title-row">
        <div class="title-left">
                <h2 style="margin-left: 3.5rem">Wir sind TEQLY.</h2>
                <h1 id="titleh1" class="indextitle" style="visibility: hidden">.</h1>
        </div>
    </div>
    <div class="index-container" style="margin-top: 4rem">
        <video autoplay muted loop style="z-index: -1" playsinline>
            <source src="../assets/teqly_index_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div  class="title-right">
            <h2>Willkommen bei TEQLY.<br>Wir sind Ihre Ansprechpartner wenn es um innovative und kundenorientierte IT-Lösungen geht.</h2>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_products.php">Dienstleistungen</a>
        </div>
        <div class="index-col-right">
            <p>In einer komplex vernetzten Welt ist es nicht einfach den Überblick zu behalten. Bei der Digitalisierung stehenzubleiben, kommt einem Rückschritt gleich. Wir sind der Partner für Ihr Unternehmen, wenn es um Herausforderungen in der digitalen Welt geht. Unsere Dienstleistungspalette ist vielschichtig und deckt alle Bedürfnisse eines Unternehmens ab. Egal ob Beratung, Schulung, Support, Hard- oder Software - wir stehen Ihnen gerne zur Seite, damit Sie sich wieder auf Ihr Kerngeschäft konzentrieren können. <a href="tq_products.php">Mehr erfahren.</a></p>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#easit">Hardware als Service</a>
            </div>
            <div class="under-section-col-right">
                <p>Abonnement gibt es heutzutage für fast alles. Vom Druckerpatronen-Abo bis hin zum Auto-Abo ist alles möglich. Diese Modelle bieten verschiedenste Vorteile, so muss man sich dank dem Druckerpatronen-Abo nie Sorgen machen, dass man nicht genügend Toner hat. Und beim Auto-Abo entfallen die hohen Anschaffungskosten, sowie die lästigen Nebenaufgaben wie Versicherungssuche, Vigniettenkauf, Werkstatttermine und so weiter. All diese Vorteile können Sie auch mit unserem Hardware-Abo mit dem Namen EASIT.rent geniessen. Lehnen Sie sich zurück und konzentrieren Sie sich auf Ihr Kerngeschäft. Zum Fixpreis vermieten wir Ihnen die gesamte IT-Infrastruktur für Ihr Unternehmen, inklusive Service und Support. <a href="tq_products.php">Mehr erfahren.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#programming">Entwicklung</a>
            </div>
            <div class="under-section-col-right">
                <p>Zusammen mit unseren Kunden entwickeln wir verschiedenste Softwareprodukte. Von der kleinen Website, über komplexe Webapplikationen bis hin zu Enterprise-Desktop-Anwendungen, wir unterstützen Sie bei der Realisation Ihrer Projekte. Je nach Wunsch übernehmen wir einzelne Teilaufgaben innerhalb eines Softwareprojektes (zum Beispiel: Requirements Engineering, UI/UX-Design, Projektleitung, Programmierung, Dokumentation oder Qualitätsmanagement) oder bieten Ihnen eine alle Disziplinen umfassende Gesamtlösung an. <a href="tq_products.php">Mehr erfahren.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#infrastructure">Infrastruktur</a>
            </div>
            <div class="under-section-col-right">
                <p>Eine solide Netzwerk- und Serverinfrastruktur ist inzwischen das Rückgrat eines jeden Unternehmens. Egal ob vernetzte, smarte Waage in der Bäckerei, W-LAN an einem Event oder Büro Arbeitsplatz in der Werkstatt: Alle Anwendung bauen auf einer Netzwerkinfrastruktur auf. Wir begleiten Sie von der Entwicklung einer passenden Infrastruktur-Lösung über die Bauplanung bis hin zur Wartung und dem Betrieb. Zusammen mit unseren Partnerunternehmen aus der Elektro- und Baubranche realisieren wir auch komplexe Infrastrukturprojekte. <a href="tq_products.php">Mehr erfahren.</a></p>
            </div>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_references.php">Projekte</a>
        </div>
        <div class="index-col-right">
            <p>Ein altes Sprichwort lautet bekanntlich: <em>"Taten sagen mehr als Worte"</em>. Daher haben wir einige Projekte zusammengestellt, um Ihnen einen kleinen Überblick über unsere Tätigkeitsbereiche zu geben. Zu unseren Kunden zählen kleine, mittlere sowie grosse Unternehmen und Organisationen aus verschiedensten Branchen. <a href="tq_references.php">Mehr erfahren.</a></p>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_about.php">Über TEQLY</a>
        </div>
        <div class="index-col-right">
            <p>Während des Studiums haben wir TEQLY gegründet. Wir starteten im Frühling 2020 zu dritt in einem Unterrichtsraum an der FHNW das Abenteuer TEQLY. In den vergangenen Jahren haben wir unglaublich viel gelernt und sind, zusammen mit unseren Kunden, gewachsen. Unser Team vergrössert sich stetig und ist bereit für jede neue Herausforderung. <a href="tq_about.php">Mehr erfahren.</a></p>
        </div>

    </div>
    <br>

    <?php include 'structure_footer.php' ?>

</div>
</body>
</html>
<script type="text/javascript" src="../js/script.js"></script>



