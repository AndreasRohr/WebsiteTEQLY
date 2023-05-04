
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts Carousel</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <style>
        #blog-posts-slider {
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
        }

        .post-card {
            display: inline-block;
            width: 24.5rem;
            height: 23rem;
            margin: 0 10px;
            border: 1px solid #ccc;
        }

        .post-card a {
            display: block;
            text-decoration: none;
            color: #333;
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
            height:60%;
            object-fit: cover;
        }

        .post-card h2 {
            font-size: 1.1rem;
            margin-top: 1rem;
            box-sizing: border-box;
            font-weight: bold;
            margin-left: auto;
            margin-right: auto;
            max-width:90%;
        }

        .post-card p {
            margin-top: 1rem;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            max-width:90%;
            bottom: 0;
            font-weight: lighter;
        }
    </style>
</head>
<body>
<div id="blog-posts-container">
    <div id="blog-posts-slider"></div>
</div>




</body>


<script>
    const apiURL = "https://blog.teqly.ch";
    const apiKey = "09d2b5f78c3774701e1685a192";

    const blogPostsContainer = document.getElementById("blog-posts-container");
    const blogPostsSlider = document.getElementById("blog-posts-slider");

    fetch(`${apiURL}/ghost/api/v3/content/posts/?key=${apiKey}&fields=title,slug,feature_image,published_at&include=tag,authors&limit=all&filter=tag:success-stories`)
        .then(response => response.json())
        .then(data => {
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
                const postDescription = document.createElement("p");
                postDescription.textContent = post.excerpt;
                postLink.appendChild(postImage);
                postLink.appendChild(postTitle);
                postLink.appendChild(postDescription);
                postCard.appendChild(postLink);
                blogPostsSlider.appendChild(postCard);
            }

            $(blogPostsSlider).slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                focusOnSelect: true,
                waitForAnimate: false,
                autoplay: true,
                autoplaySpeed: 1000,
                speed: 3000,
                cssEase: 'ease',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        })
        .catch(error => console.error(error));
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>
    // Fix template to make zooming work correctly in Chrome on mobile.
    $('meta[name="viewport"').attr("content", "width=device-width, initial-scale=0.9, maximum-scale=4, minimum-scale=0.9");
</script>
