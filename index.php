<!DOCTYPE html>
<html lang="en">
<head>
<!-- <php include 'header_imports.php' ?>-->
    <title>TEQLY</title>
<!--    <php //include 'header.php' ?>-->
</head>
<body id="body">

<script>
    // Random String return for index.php
    var items = Array("Ihre IT-Partner.", "Ihre Problemlöser.", "Ihre Supporter.", "Ihre Programmierer.", "Ihre IT-Berater.");

    window.onload = function answerWriter() {
        document.getElementById("titleh1").innerHTML = randString();
    }
    function randString() {
        var item = items[Math.floor(Math.random() * items.length)];
        return item;
    }
</script>

<div id="main" style="margin-top: 7rem">
    <div class="title-row">
        <div class="title-left">
                <h2 style="margin-left: 3.5rem">Wir sind TEQLY.</h2>
                <h1 id="titleh1" class="indextitle">TEST</h1>
        </div>
    </div>
    <div class="index-container" style="margin-top: 4rem">
        <video autoplay muted loop style="z-index: -1" playsinline>
            <source src="assets/index_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div  class="title-right">
            <h2>Willkommen bei TEQLY.<br>Wir sind Ihre Ansprechpartner wenn es um innovative und kundenorientiert IT-Lösungen geht.</h2>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="products.php">Dienstleistungen</a>
        </div>
        <div class="index-col-right">
            <p>In einer komplex vernetzten Welt ist es nicht einfach den Überblick zu behalten. Bei der Digitalisierung stehenzubleiben, kommt einem Rückschritt gleich. Wir sind der Partner für Ihr Unternehmen wenn es um Herausforderungen in der digitalen Welt geht. Unsere Dienstleistungspalette ist vielschichtig und deckt alle Bedürfnisse eines Unternehmens ab. Egal ob Beratung, Schulung, Support, Hard- oder Software - Wir stehen Ihnen gerne zur Seite, damit Sie sich wieder auf Ihr Kerngeschäft konzentrieren können. <a href="products.php">Mehr erfahren.</a></p>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="products.php#easit">Hardware als Service</a>
            </div>
            <div class="under-section-col-right">
                <p>Abonnemente gibt es heutzutage für fast alles. Vom Druckerpatronen-Abo bis hin zum Auto-Abo ist alles möglich. Diese Modelle bieten verschiedenste Vorteile, so muss man sich dank dem Druckerpatronen-Abo nie Sorgen machen, dass man nicht genügend Toner hat. Und beim Auto-Abo entfallen die hohen Anschaffungskosten, sowie die lästigen Nebenaufgaben wie Versicherungssuche, Vigniettenkauf, Werkstatttermine und so weiter. All diese Vorteile können Sie auch mit unserem Hardware-Abo mit dem Namen EASIT.rent geniessen. Lehnen Sie sich zurück und konzentrieren Sie sich auf Ihr Kerngeschäft. Zum Fixpreis vermieten wir Ihnen die gesammte IT-Infrastruktur für Ihr Unternehmen, inklusive Service und Support. <a href="products.php">Mehr erfahren.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="products.php#programming">Entwicklung</a>
            </div>
            <div class="under-section-col-right">
                <p>Zusammen mit unseren Kunden entwickeln wir verschiedenste Softwareprodukte. Von der kleinen Website, über komplexe Webapplikationen bis hin zu Enterprise-Desktop-Anwendungen, wir unterstützen Sie bei der Realisation Ihrer Projekte. Je nach Wunsch übernehmen wir einzelne Teilaufgaben innerhalb eines Softwareprojektes (zum Beispiel: Requirements Engineering, UI/UX-Design, Projektleitung, Programmierung, Dokumentation oder Qualitätsmanagement) oder bieten Ihnen eine alle Disziplinen umfassende Gesammtlösung an. <a href="products.php">Mehr erfahren.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="products.php#infrastructure">Infrastruktur</a>
            </div>
            <div class="under-section-col-right">
                <p>Eine solide Netzwerk- und Serverinfrastruktur ist inzwischen das Rückgrat eines jeden Unternehmens. Egal ob vernetzte, smarte Waage in der Bäckerei, W-Lan an einem Event oder Büro Arbeitsplatz in der Werkstatt: Alle Anwendung bauen auf einer Netzwerkinfrasturktur auf. Wir begleiten Sie von der Entwicklung einer passenden Infrastruktur-Lösung über die Bauplanunung bis hin zur Wartung und dem Betrieb. Zusammen mit unseren Partnerunternehmen aus der Elektro- und Baubranche realisieren wir auch komplexe Infrastrukturprojekte. <a href="products.php">Mehr erfahren.</a></p>
            </div>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="references.php">Projekte</a>
        </div>
        <div class="index-col-right">
            <p>Ein altes Sprichwort lautet bekanntlich: <em>"Taten sagen mehr als Worte"</em>. Daher haben wir einige Projekte zusammengestellt, um Ihnen einen kleinen Überblick über unsere Tätigkeitsbereiche zu geben. Zu unseren Kunden zählen kleine, mittlere sowie grosse Unternehmen und Organisationen aus verschiedensten Branchen. <a href="products.php">Mehr erfahren.</a></p>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="jobs.php">Über TEQLY</a>
        </div>
        <div class="index-col-right">
            <p>Während des Studiums haben wir TEQLY gegründet. Wir starteten im Frühling 2020 zu dritt in einem Unterrichtsraum an der FHNW das Abenteuer TEQLY. In den vergangenen Jahren haben wir unglaublich viel gelernt und sind, zusammen mit unseren Kunden, gewachsen. Unser Team vergrössert sich stetig und ist bereit für jede neue Herausforderung. <a href="products.php">Mehr erfahren.</a></p>
        </div>

    </div>
    <br>

<!--    <php include 'footer.php' ?>-->

</div>
</body>
</html>
<script type="text/javascript" src="script.js"></script>



