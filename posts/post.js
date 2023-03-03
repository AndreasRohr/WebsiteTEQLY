const apiURL = "https://blog.teqly.ch";
const apiKey = "e3e8cd821e7165759e2a9da4bc";


const postSlug = window.location.pathname.split("/").pop().replace(".php", "");


const postContainer = document.getElementById("post-content");


fetch(`${apiURL}/ghost/api/v3/content/posts/slug/${postSlug}?key=${apiKey}&include=tags,authors`)
    .then(response => response.json())
    .then(data => {
        const post = data.posts[0];

        const title = document.createElement("h1");
        const content = document.createElement("div");
        const author = document.createElement("p");
        const tags = document.createElement("ul");

        title.textContent = post.title;
        content.innerHTML = post.html;
        author.textContent = `By ${post.primary_author.name}`;
        tags.innerHTML = post.tags.map(tag => `<li>${tag.name}</li>`).join("");

        postContainer.appendChild(title);
        postContainer.appendChild(content);
        postContainer.appendChild(author);
        postContainer.appendChild(tags);
    })
    .catch(error => console.error(error));