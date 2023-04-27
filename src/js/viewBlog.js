// populate posts
getPosts().then((response) => response.json())
.then((posts) => {
    for (const post of posts) {
        addPostToDocument(post.Title, post.Body, post.Date);
    }
});


if (window.location.hash === "#signedIn") {
    showDialog("Welcome " + USERNAME);
} else if (window.location.hash === "#signedOut") {
    showDialog("Signed out successfully.");
} else if (window.location.hash === "#alreadySignedIn") {
    showDialog("You're already signed in! (" + USERNAME + ")");
} else if (window.location.hash === "#postSuccessful") {
    showDialog("Posted successfully!");
} else if (window.location.hash === "#notSignedIn") {
    showDialog("You need to be signed in to do that");
} else if (window.location.hash === "#insufficientPermission") {
    showDialog("You don't have permission to do that!");
}

function getPosts() {
    return fetch(window.location.origin + "/getPosts.php");
}

function addPostToDocument(title, body, date) {
    const postElement = document.createElement("article");
    postElement.className = "blog-article";
    document.getElementsByTagName("main")[0].appendChild(postElement);

    const timeElement = document.createElement("time");
    timeElement.appendChild(document.createTextNode(date));
    postElement.appendChild(timeElement);

    const titleElement = document.createElement("h2");
    titleElement.appendChild(document.createTextNode(title));
    postElement.appendChild(titleElement);

    const bodyElement = document.createElement("p");
    bodyElement.appendChild(document.createTextNode(body));
    postElement.appendChild(bodyElement);
}
