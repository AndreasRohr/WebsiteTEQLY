<!DOCTYPE html>
<html lang="en">
<script>
    // Random String return for index.php
    var items = Array("Your IT partners.", "Your problem solvers.", "Your supporters.", "Your programmers.", "Your IT consultants.");

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
    <meta name="description" content="Welcome to our website. Learn more about us, our services, our team and get in touch with us.">
    <meta name="keywords" content="teqly, teqly gmbh, it service, it service desk, it service management, website, website erstellen, website erstellen schweiz, website erstellen lassen, website design, website analyse, website aufbau, website agentur, website anbieter, webdesign, webdesigner, webdesign agentur, webdesign agentur zürich, webdesign zürich, webdesign agentur schweiz, webdesign aarau, webdesign ärzte, webdesign für ärzte, webdesign für ärzte - praxis website - online praxismarketing, webdesign aargau, webdesign schweiz, webdesign bern, programmierer, programmiererin, programmierer schweiz, programmierer beauftragen, support computer, computer support and services, datenrettung, datenrettung zürich, datenrettung festplatte, datenrettung schweiz, it support, it support zürich, informatik, informatiker, informatiker plattformentwicklung, softwareentwicklung, softwareentwicklungsprozess, softwareentwicklung zürich, softwareentwicklung schweiz, softwareentwicklung bern, supportvertrag, supportvertrag software, supportvertrag website, supportvertrag buchen, it support vertrag, cybersicherheit, cybersicherheit schweiz, cybersicherheit unternehmen, cybersicherheit anbieter, cybersicherheit agentur, cybersicherheit admin, cyber sicherheits check, it management, it management and consulting, it management beratung, it management consultant, it beratung, it beratung schweiz, it beratung buchen, it beratung zürich, it beratung schweiz, it beratung aargau, software, software update, software engineer, softwareentwickler, software as a service, software engineering, software architect, software ärzte, software änderungsmanagement, software baugewerbe, hardware, hardware firewall, hardware auslesen, hardware computer, hardware kaufen oder leasen, hardware kaufen günstig, hardware kaufen unternehmen, hardware kaufen pc, hardware broker schweiz, büro hardware kaufen, hardware über firma kaufen, server hardware gebraucht kaufen, it hardware kaufen oder leasen, hardware security module kaufen, software kaufen, software kaufen schweiz, software kaufen auf rechnung, softwareentwicklung kaufen, faktura software kaufen, friseur software kaufen, forum software kaufen, software kaufen homepage, netzwerk kaufen, netzwerk kaufen pc, netzwerk switch kaufen, netzwerk hub kaufen, netzwerk server kaufen, netzwerk set kaufen, netzwerk drucker kaufen, netzwerk einrichten, büronetzwerk, büronetzwerk aufbauen, büronetzwerk einrichten, server für büronetzwerk, kleines büronetzwerk aufbauen, praxis informatik, arztpraxis informatik, informatik arztpraxis, kmu informatik, kmu informatik support, kmu informatik partner, kmu-informatik, kmu informatik zürich, kmu it, kmu it management, kmu itm, kmu it support, kmu it infrastruktur, kmu it sicherheit, kmu it lösungen, it ausgaben kmu, it consulting kmu, it dienstleister kmu, it für kmu, it notfallplan kmu, kmu-informatik, it-kosten kmu, kmu innovativ it, it organisation kmu, it outsourcing kmu, kmu it security, kmu it service, kmu it schweiz, it trends kmu, it für kmu, kmu it beratung, webdesign kmu, webdesign für kmu, kmu website, webdesign firma, it firma, firmennetzwerk, firmennetzwerk einrichten, firmennetzwerk aufbauen, it partner, it partner consulting, partner it-dienstleistungen, it partner schweiz">
    <meta name="author" content="TEQLY GmbH">
    <title>We are TEQLY.</title>
    <?php include 'structure_header.php' ?>
</head>
<body id="body">

<div id="main" style="margin-top: 7rem">
    <div class="title-row">
        <div class="title-left">
                <h2 style="margin-left: 3.5rem">We are TEQLY.</h2>
                <h1 id="titleh1" class="indextitle" style="visibility: hidden">.</h1>
        </div>
    </div>
    <div class="index-container" style="margin-top: 4rem">
        <video autoplay muted loop style="z-index: -1" playsinline>
            <source src="../assets/teqly_index_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div  class="title-right">
            <h2>Welcome to TEQLY.<br>We are your contact when it comes to innovative and customer-oriented IT solutions.</h2>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_products.php">Services</a>
        </div>
        <div class="index-col-right">
            <p>In a complex networked world, it is not easy to maintain an overview. Standing still in digitalisation is tantamount to taking a step backwards. We are the partner for your company when it comes to challenges in the digital world. Our range of services is multi-faceted and covers all the needs of a company. Whether it's advice, training, support, hardware or software - we are happy to assist you so that you can concentrate on your core business again. <a href="tq_products.php">Learn more.</a></p>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#easit">Hardware as a Service</a>
            </div>
            <div class="under-section-col-right">
                <p>Subscriptions are available for almost everything these days. From printer cartridge subscriptions to car subscriptions, everything is possible. These models offer a wide range of advantages, so thanks to the printer cartridge subscription you never have to worry about not having enough toner. And with the car subscription, you don't have to worry about the high purchase costs, as well as the annoying side tasks like looking for insurance, buying vignettes, garage appointments and so on. You can also enjoy all these advantages with our hardware subscription called EASIT.rent. Sit back and concentrate on your core business. We rent out the entire IT infrastructure for your company at a fixed price, including service and support. <a href="tq_products.php">Learn more.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#programming">Development</a>
            </div>
            <div class="under-section-col-right">
                <p>Together with our customers, we develop a wide variety of software products. From small websites to complex web applications and enterprise desktop applications, we support you in the realisation of your projects. Depending on your wishes, we can take on individual subtasks within a software project (for example: requirements engineering, UI/UX design, project management, programming, documentation or quality management) or offer you a complete solution covering all disciplines. <a href="tq_products.php">Learn more.</a></p>
            </div>
        </div>
        <div class="under-section">
            <div class="lineblack-index"></div>
            <div class="index-col-left">
                <i class="fa-solid fa-arrow-right fa-2xl" style="vertical-align: text-top; -webkit-text-stroke: 1.5px white"></i>
                <a href="tq_products.php#infrastructure">Infrastructure</a>
            </div>
            <div class="under-section-col-right">
                <p>A solid network and server infrastructure is now the backbone of every company. No matter whether it's a networked smart scale in a bakery, wifi at an event or an office workstation in a workshop: All applications are based on a network infrastructure. We accompany you from the development of a suitable infrastructure solution to construction planning, maintenance and operation. Together with our partner companies from the electrical and construction industries, we also realise complex infrastructure projects. <a href="tq_products.php">Learn more.</a></p>
            </div>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_references.php">Projects</a>
        </div>
        <div class="index-col-right">
            <p>An old saying famously goes: <em>"Actions speak louder than words"</em>. We have therefore compiled a few projects to give you a brief overview of our areas of activity. Our clients include small, medium and large companies and organisations from a wide range of industries. <a href="tq_products.php">Learn more.</a></p>
        </div>
        <div class="lineblack-index"></div>
        <div class="index-col-left">
            <a href="tq_jobs.php">Über TEQLY</a>
        </div>
        <div class="index-col-right">
            <p>We founded TEQLY during our studies. In spring 2020, three of us started the TEQLY adventure in a classroom at the FHNW. In the past years, we have learned an incredible amount and have grown together with our customers. Our team is constantly growing and is ready for any new challenge. <a href="tq_products.php">Learn more.</a></p>
        </div>

    </div>
    <br>

    <?php include 'structure_footer.php' ?>

</div>
</body>
</html>
<script type="text/javascript" src="../js/script.js"></script>



