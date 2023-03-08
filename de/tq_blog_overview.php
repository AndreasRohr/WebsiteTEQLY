<!DOCTYPE html>
<html lang="de">
<head>
    <?php include 'structure_header_imports.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="../css/style.css" media="all" type="text/css">
    <meta charset="UTF-8">
    <meta name="description" content="Unsere Blog-Posts, bleiben Sie auf dem aktuellen Stand.">
    <meta name="keywords" content="kontakt, adresse, mail, telefonnummer, teqly, teqly gmbh, it service, it service desk, it service management, website, website erstellen, website erstellen schweiz, website erstellen lassen, website design, website analyse, website aufbau, website agentur, website anbieter, webdesign, webdesigner, webdesign agentur, webdesign agentur zürich, webdesign zürich, webdesign agentur schweiz, webdesign aarau, webdesign ärzte, webdesign für ärzte, webdesign für ärzte - praxis website - online praxismarketing, webdesign aargau, webdesign schweiz, webdesign bern, programmierer, programmiererin, programmierer schweiz, programmierer beauftragen, support computer, computer support and services, datenrettung, datenrettung zürich, datenrettung festplatte, datenrettung schweiz, it support, it support zürich, informatik, informatiker, informatiker plattformentwicklung, softwareentwicklung, softwareentwicklungsprozess, softwareentwicklung zürich, softwareentwicklung schweiz, softwareentwicklung bern, supportvertrag, supportvertrag software, supportvertrag website, supportvertrag buchen, it support vertrag, cybersicherheit, cybersicherheit schweiz, cybersicherheit unternehmen, cybersicherheit anbieter, cybersicherheit agentur, cybersicherheit admin, cyber sicherheits check, it management, it management and consulting, it management beratung, it management consultant, it beratung, it beratung schweiz, it beratung buchen, it beratung zürich, it beratung schweiz, it beratung aargau, software, software update, software engineer, softwareentwickler, software as a service, software engineering, software architect, software ärzte, software änderungsmanagement, software baugewerbe, hardware, hardware firewall, hardware auslesen, hardware computer, hardware kaufen oder leasen, hardware kaufen günstig, hardware kaufen unternehmen, hardware kaufen pc, hardware broker schweiz, büro hardware kaufen, hardware über firma kaufen, server hardware gebraucht kaufen, it hardware kaufen oder leasen, hardware security module kaufen, software kaufen, software kaufen schweiz, software kaufen auf rechnung, softwareentwicklung kaufen, faktura software kaufen, friseur software kaufen, forum software kaufen, software kaufen homepage, netzwerk kaufen, netzwerk kaufen pc, netzwerk switch kaufen, netzwerk hub kaufen, netzwerk server kaufen, netzwerk set kaufen, netzwerk drucker kaufen, netzwerk einrichten, büronetzwerk, büronetzwerk aufbauen, büronetzwerk einrichten, server für büronetzwerk, kleines büronetzwerk aufbauen, praxis informatik, arztpraxis informatik, informatik arztpraxis, kmu informatik, kmu informatik support, kmu informatik partner, kmu-informatik, kmu informatik zürich, kmu it, kmu it management, kmu itm, kmu it support, kmu it infrastruktur, kmu it sicherheit, kmu it lösungen, it ausgaben kmu, it consulting kmu, it dienstleister kmu, it für kmu, it notfallplan kmu, kmu-informatik, it-kosten kmu, kmu innovativ it, it organisation kmu, it outsourcing kmu, kmu it security, kmu it service, kmu it schweiz, it trends kmu, it für kmu, kmu it beratung, webdesign kmu, webdesign für kmu, kmu website, webdesign firma, it firma, firmennetzwerk, firmennetzwerk einrichten, firmennetzwerk aufbauen, it partner, it partner consulting, partner it-dienstleistungen, it partner schweiz">
    <meta name="author" content="TEQLY GmbH">
    <title>Blog</title>
    <?php include 'structure_header.php' ?>
</head>
<body>
<div id="main" style="margin-top: 4rem">
	<h1 style="margin-top: 7rem; margin-left: 3rem" class="contact-title"> Unser Blog.</h1>
	<div id="blog-posts" style="max-width: 1300px; margin: 0 auto; margin-top: 1rem;"></div>

	<script>
		const apiURL = "https://blog.teqly.ch";
		const apiKey = "e3e8cd821e7165759e2a9da4bc";

		fetch(`${apiURL}/ghost/api/v3/content/posts/?key=${apiKey}&fields=title,slug,feature_image&limit=all`)
			.then(response => response.json())
			.then(data => {
				const blogPosts = document.getElementById("blog-posts");
				const posts = data.posts;

				for (let i = 0; i < posts.length; i++) {
					const post = posts[i];
					const postCard = document.createElement("div");
					postCard.classList.add("post-card");
					const postLink = document.createElement("a");
					postLink.href = `blog.php?slug=${post.slug}`;
					const postImage = document.createElement("img");
					postImage.src = post.feature_image;
					if (postImage.src.endsWith("null")) {
					postImage.src = "../assets/teqly_logo.png"
					}
					postImage.alt = post.title;
					const postTitle = document.createElement("h2");
					postTitle.textContent = post.title;
					postLink.appendChild(postImage);
					postLink.appendChild(postTitle);
					postCard.appendChild(postLink);
					blogPosts.appendChild(postCard);
				}
			})
			.catch(error => console.error(error));
	</script>

	<style>
		.post-card {
          display: inline-block;
          width: 280px;
          height: 280px;
          margin: 20px;
          border: 1px solid #ccc;
          overflow: hidden;

        }

        .post-card a {
          display: block;
          text-decoration: none;
          color: #333;
          padding: 10px;
          height: 100%;
          box-sizing: border-box;
          transition: all 0.2s ease-in-out;
        }

        .post-card a:hover {
          background-color: #f8f8f8;
        }

        .post-card img {
          display: block;
          width: 100%;
          height: 90%;
          object-fit: contain;
          object-position: center;
        }

        .post-card h2 {
          font-size: 1.2rem;
          margin-top: 10px;
          height: 70px;
          box-sizing: border-box;
          overflow: hidden;
          text-overflow: ellipsis;
          white-space: nowrap;
        }

	</style>
	<br>
    <?php include 'structure_footer.php' ?>
    </div>
</body>
</html>