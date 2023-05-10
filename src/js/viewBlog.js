document.getElementById("month-selector").addEventListener("change", updateVisibleMonths);

// populate posts
populatePosts();

if (window.location.hash === "#signedOut") {
    showDialog("Signed out successfully.");
} else if (window.location.hash === "#postSuccessful") {
    showDialog("Posted successfully!");
} else if (window.location.hash === "#notSignedIn") {
    showDialog("You need to be signed in to do that");
} else if (window.location.hash === "#insufficientPermission") {
    showDialog("You don't have permission to do that!");
}

function updateVisibleMonths(changeEvent) {
    [...document.getElementsByClassName("month")].forEach((monthDiv) => {
            if (changeEvent.srcElement.value === "all")
                monthDiv.style.display = "block";
            else if (changeEvent.srcElement.value === monthDiv.id)
                monthDiv.style.display = "block";
            else
                monthDiv.style.display = "none";
    });
    // console.log(changeEvent.srcElement.value);
}

function getPosts() {
    return fetch(window.location.origin + "/getPosts.php");
}

const MONTHS = {
    0: "January",
    1: "Febuary",
    2: "March",
    3: "April",
    4: "May",
    5: "June",
    6: "July",
    7: "August",
    8: "September",
    9: "October",
    10: "November",
    11: "December",
};

function doPreview() {
    if (window.location.search.includes("body=") || window.location.search.includes("title=")) {
        const params = new URLSearchParams(window.location.search);
        const title = params.get("title");
        const body = params.get("body");
        const date = new Date();

        const dtf = new Intl.DateTimeFormat("en-GB", {
                "year": "numeric",
                "month": "2-digit",
                "day": "2-digit",
                "hour": "2-digit",
                "minute": "2-digit",
                "second": "2-digit",
        });
        const post = createPost(title, body, dtf.format(date).replaceAll("/", "-").replace(",", ""));

        const previewDiv = createMonth("Preview", "post");
        previewDiv.appendChild(post);


        function createShadowForm() {
                const form = document.createElement("form");

                const form_title = document.createElement("input");
                form_title.setAttribute("name", "title");
                form_title.value = title;
                form.appendChild(form_title);

                const form_body = document.createElement("input");
                form_body.setAttribute("name", "body");
                form_body.value = body;
                form.appendChild(form_body);

                document.body.appendChild(form);

                return form;
        }

        const postButton = document.createElement("button");
        postButton.appendChild(document.createTextNode("Post"));
        postButton.addEventListener("click", () => {
                const form = createShadowForm();
                form.setAttribute("action", "/addPost.php");
                form.setAttribute("method", "POST");
                form.submit();
        });

        const editButton = document.createElement("button");
        editButton.appendChild(document.createTextNode("Edit"));
        editButton.addEventListener("click", () => {
                const form = createShadowForm();
                form.setAttribute("action", "/addEntry.php");
                form.setAttribute("method", "GET");
                form.submit();
        });

        post.appendChild(postButton);
        post.appendChild(editButton);
    }
}

function populatePosts() {
    doPreview();

    getPosts().then((response) => response.json())
    .then((posts) => {
        let month = -1;
        let year = 0;
        let monthDiv = null;

        for (const post of posts) {
            const date = new Date(post.Date);
            if (date.getMonth() !== month || date.getFullYear() !== year) {
                month = date.getMonth();
                year = date.getFullYear();
                monthDiv = createMonth(month, year);
            }

            monthDiv.appendChild(createPost(post.Title, post.Body, post.Date));
        }



    });
}

function createMonth(month, year) {
    let monthDiv = document.getElementById(`${month}-${year}`);

    if (monthDiv !== null) {
        return monthDiv;
    }

    monthDiv = document.createElement("section");
    monthDiv.setAttribute("id", `${month}-${year}`);
    monthDiv.className = "month";
    document.getElementsByTagName("main")[0].appendChild(monthDiv);

    const header = document.createElement("h2");
    let monthYearString = (typeof(month) == "number")? MONTHS[month] : month;
    if (year !== (new Date()).getFullYear()) {
        monthYearString += ` ${year}`;
    }
    header.appendChild(document.createTextNode(monthYearString));
    monthDiv.appendChild(header);

    const option = document.createElement("option");
    option.setAttribute("value", `${month}-${year}`);
    option.appendChild(document.createTextNode(`${month}-${year}`));
    document.getElementById("month-selector").appendChild(option);

    return monthDiv;
}

function createPost(title, body, date) {
    const postElement = document.createElement("article");
    postElement.className = "blog-article";

    const timeElement = document.createElement("time");
    timeElement.appendChild(document.createTextNode(date));
    postElement.appendChild(timeElement);

    const titleElement = document.createElement("h2");
    titleElement.appendChild(document.createTextNode(title));
    postElement.appendChild(titleElement);

    const bodyElement = document.createElement("p");
    bodyElement.appendChild(document.createTextNode(body));
    postElement.appendChild(bodyElement);

    return postElement;
}
