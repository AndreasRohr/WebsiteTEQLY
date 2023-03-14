<?php
  $apiURL = "https://blog.teqly.ch";
  $apiKey = "e3e8cd821e7165759e2a9da4bc";

  // retrieve the slug parameter from the URL
  $slug = $_GET['slug'];

  // fetch the blog post data from the Ghost API endpoint based on the slug
$response = file_get_contents("${apiURL}/ghost/api/v3/content/posts/slug/${slug}/?key=${apiKey}&fields=title,html,feature_image,published_at");

  $post = json_decode($response)->posts[0];
?>
<head>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Wir sind nur eine Mail oder ein Telefonanruf entfernt. Nehmen Sie Kontakt mit uns auf und wir beraten Sie gerne unverbindlich.">
    <meta name="keywords" content="kontakt, adresse, mail, telefonnummer, teqly, teqly gmbh, it service, it service desk, it service management, website, website erstellen, website erstellen schweiz, website erstellen lassen, website design, website analyse, website aufbau, website agentur, website anbieter, webdesign, webdesigner, webdesign agentur, webdesign agentur zürich, webdesign zürich, webdesign agentur schweiz, webdesign aarau, webdesign ärzte, webdesign für ärzte, webdesign für ärzte - praxis website - online praxismarketing, webdesign aargau, webdesign schweiz, webdesign bern, programmierer, programmiererin, programmierer schweiz, programmierer beauftragen, support computer, computer support and services, datenrettung, datenrettung zürich, datenrettung festplatte, datenrettung schweiz, it support, it support zürich, informatik, informatiker, informatiker plattformentwicklung, softwareentwicklung, softwareentwicklungsprozess, softwareentwicklung zürich, softwareentwicklung schweiz, softwareentwicklung bern, supportvertrag, supportvertrag software, supportvertrag website, supportvertrag buchen, it support vertrag, cybersicherheit, cybersicherheit schweiz, cybersicherheit unternehmen, cybersicherheit anbieter, cybersicherheit agentur, cybersicherheit admin, cyber sicherheits check, it management, it management and consulting, it management beratung, it management consultant, it beratung, it beratung schweiz, it beratung buchen, it beratung zürich, it beratung schweiz, it beratung aargau, software, software update, software engineer, softwareentwickler, software as a service, software engineering, software architect, software ärzte, software änderungsmanagement, software baugewerbe, hardware, hardware firewall, hardware auslesen, hardware computer, hardware kaufen oder leasen, hardware kaufen günstig, hardware kaufen unternehmen, hardware kaufen pc, hardware broker schweiz, büro hardware kaufen, hardware über firma kaufen, server hardware gebraucht kaufen, it hardware kaufen oder leasen, hardware security module kaufen, software kaufen, software kaufen schweiz, software kaufen auf rechnung, softwareentwicklung kaufen, faktura software kaufen, friseur software kaufen, forum software kaufen, software kaufen homepage, netzwerk kaufen, netzwerk kaufen pc, netzwerk switch kaufen, netzwerk hub kaufen, netzwerk server kaufen, netzwerk set kaufen, netzwerk drucker kaufen, netzwerk einrichten, büronetzwerk, büronetzwerk aufbauen, büronetzwerk einrichten, server für büronetzwerk, kleines büronetzwerk aufbauen, praxis informatik, arztpraxis informatik, informatik arztpraxis, kmu informatik, kmu informatik support, kmu informatik partner, kmu-informatik, kmu informatik zürich, kmu it, kmu it management, kmu itm, kmu it support, kmu it infrastruktur, kmu it sicherheit, kmu it lösungen, it ausgaben kmu, it consulting kmu, it dienstleister kmu, it für kmu, it notfallplan kmu, kmu-informatik, it-kosten kmu, kmu innovativ it, it organisation kmu, it outsourcing kmu, kmu it security, kmu it service, kmu it schweiz, it trends kmu, it für kmu, kmu it beratung, webdesign kmu, webdesign für kmu, kmu website, webdesign firma, it firma, firmennetzwerk, firmennetzwerk einrichten, firmennetzwerk aufbauen, it partner, it partner consulting, partner it-dienstleistungen, it partner schweiz">
    <meta name="author" content="TEQLY GmbH">
    <title>Blog Post</title>
    <?php include '../de/structure_header.php' ?>
</head>
<body>
<div id="main" style="margin-top: 7rem">
<div style="max-width: 80vw; margin: 0 auto; margin-top: 1rem;" class="post">
  <h1><?php echo $post->title; ?></h1>
    <p><?php echo date('d/m/Y', strtotime($post->published_at)) ?></p>
  <?php if (filter_var($post->feature_image, FILTER_VALIDATE_URL)) : ?>
    <img src="<?php echo $post->feature_image; ?>" alt="<?php echo $post->title; ?>">
  <?php endif; ?>

    <?php echo $post->html; ?>
  </div>

  <?php include '../de/structure_footer.php' ?>
</div>

</div>
</body>
</main>
<script>
// Get all toggle buttons
var toggleButtons = document.querySelectorAll(".kg-toggle-card");

// Add event listeners to each toggle button
toggleButtons.forEach(function(button) {
  // Add click event listener to button
  button.addEventListener("click", function() {
    // Get parent element
    var parentElement = this.parentElement;

    // Get next sibling element
    var content = this.lastElementChild;

    var button = this.firstElementChild.lastElementChild;

    // Toggle the "active" class on the button
    this.classList.toggle("active");

    // Toggle the "hidden" class on the content
    content.classList.toggle("show");
    button.classList.toggle("active");
  });
});

const videoContainer = document.querySelector('.kg-video-container');
const videoPlayer = videoContainer.querySelector('.kg-video-player');
const video = videoContainer.querySelector('video');
const playButton = videoContainer.querySelector('.kg-video-large-play-icon');

playButton.addEventListener('click', () => {
  videoPlayer.classList.add('kg-video-player-show');
  playButton.classList.add('kg-video-hide');
      videoPlayer.querySelector('.kg-video-play-icon').classList.add('kg-video-hide');
      videoPlayer.querySelector('.kg-video-pause-icon').classList.remove('kg-video-hide');
  video.play();
});

video.addEventListener('click', () => {
  if (video.paused) {
    video.play();
    videoPlayer.querySelector('.kg-video-play-icon').classList.add('kg-video-hide');
    videoPlayer.querySelector('.kg-video-pause-icon').classList.remove('kg-video-hide');
  } else {
    video.pause();
    videoPlayer.querySelector('.kg-video-play-icon').classList.remove('kg-video-hide');
    videoPlayer.querySelector('.kg-video-pause-icon').classList.add('kg-video-hide');
  }
});

video.addEventListener('timeupdate', () => {
  const time = Math.floor(video.currentTime);
  const duration = Math.floor(video.duration);
  const minutes = Math.floor(time / 60);
  const seconds = time - minutes * 60;
  const durationMinutes = Math.floor(duration / 60);
  const durationSeconds = duration - durationMinutes * 60;
  const timeString = `${minutes}:${seconds.toString().padStart(2, '0')}`;
  const durationString = `${durationMinutes}:${durationSeconds.toString().padStart(2, '0')}`;
  videoPlayer.querySelector('.kg-video-current-time').textContent = timeString;
  videoPlayer.querySelector('.kg-video-duration').textContent = durationString;
  videoPlayer.querySelector('.kg-video-seek-slider').value = (video.currentTime / video.duration) * 100;
});

videoPlayer.querySelector('.kg-video-play-icon').addEventListener('click', () => {
  video.play();
  videoPlayer.querySelector('.kg-video-play-icon').classList.add('kg-video-hide');
  videoPlayer.querySelector('.kg-video-pause-icon').classList.remove('kg-video-hide');
});

videoPlayer.querySelector('.kg-video-pause-icon').addEventListener('click', () => {
  video.pause();
  videoPlayer.querySelector('.kg-video-play-icon').classList.remove('kg-video-hide');
  videoPlayer.querySelector('.kg-video-pause-icon').classList.add('kg-video-hide');
});

videoPlayer.querySelector('.kg-video-mute-icon').addEventListener('click', () => {
  video.muted = true;
  videoPlayer.querySelector('.kg-video-mute-icon').classList.add('kg-video-hide');
  videoPlayer.querySelector('.kg-video-unmute-icon').classList.remove('kg-video-hide');
  videoPlayer.querySelector('.kg-video-volume-slider').value = 0;
});

videoPlayer.querySelector('.kg-video-unmute-icon').addEventListener('click', () => {
  video.muted = false;
  videoPlayer.querySelector('.kg-video-mute-icon').classList.remove('kg-video-hide');
  videoPlayer.querySelector('.kg-video-unmute-icon').classList.add('kg-video-hide');
  videoPlayer.querySelector('.kg-video-volume-slider').value = 100;
});

videoPlayer.querySelector('.kg-video-volume-slider').addEventListener('input', () => {
  video.volume = videoPlayer.querySelector('.kg-video-volume-slider').value / 100;
  if (video.volume === 0) {
    videoPlayer.querySelector('.kg-video-mute-icon').classList.add('kg-video-hide');
    videoPlayer.querySelector('.kg-video-unmute-icon').classList.remove('kg-video-hide');
  } else {
    videoPlayer.querySelector('.kg-video-mute-icon').classList.remove('kg-video-hide');
    videoPlayer.querySelector('.kg-video-unmute-icon').classList.add('kg-video-hide');
  }
});
videoPlayer.querySelector('.kg-video-seek-slider').addEventListener('input', () => {
video.currentTime = (videoPlayer.querySelector('.kg-video-seek-slider').value / 100) * video.duration;
});

</script>
