if (window.location.hash === "#signedIn") {
    showDialog("Welcome " + USERNAME);
} else if (window.location.hash === "#alreadySignedIn") {
    showDialog("You're already signed in! (" + USERNAME + ")");
} 

const form = document.querySelector("form");
const FORM_TITLE = form.querySelector("input[name=\"title\"]");
const FORM_BODY = form.querySelector("textarea[name=\"body\"]");

document.querySelector("input[type=\"reset\"]").addEventListener("click", showConfirmClear);
document.querySelector("#confirm-clear-cancel").addEventListener("click", hideConfirmClear);
document.querySelector("#confirm-clear-accept").addEventListener("click", () => {
        clear();
        hideConfirmClear();
});
document.querySelector("input[type=\"submit\"]").addEventListener("click", (clickEvent) => {
        if (!isPostValid()) {
            clickEvent.preventDefault();
        }
});
document.getElementById("previewButton").addEventListener("click", (e) => {
        if (!isPostValid()) {
            e.preventDefault();
            return;
        }

        document.getElementsByTagName("form")[0].action = "/viewBlog.php";
        document.getElementsByTagName("form")[0].setAttribute("method", "GET");
});

if (window.location.search.includes("body=") || window.location.search.includes("title=")) {
    const params = new URLSearchParams(window.location.search);
    const title = params.get("title");
    const body = params.get("body");

    FORM_TITLE.value = title;
    FORM_BODY.value = body;
}

function isPostValid() {
    return !bodyTooLong() || !formFieldsEmpty();
}

function bodyTooLong() {
    if (FORM_BODY.value.length > 255) {
        showDialog("The body of your post is too long (" + FORM_BODY.value.length + "), it must be at most 255");
        return true;
    } else
        return false;
}

function formFieldsEmpty() {
    let anyFieldEmpty = false;

    anyFieldEmpty |= checkFieldEmpty(FORM_TITLE);
    anyFieldEmpty |= checkFieldEmpty(FORM_BODY);

    if (anyFieldEmpty)
        showDialog("You have one or more fields empty!");

    return anyFieldEmpty;
}

function checkFieldEmpty(formField) {
    if (formField.value.trim() === "") {
        emphasiseField(formField);
        return true;
    }
    return false;
}

function emphasiseField(formField) {
    formField.style.backgroundColor = "red";
    formField.style.border = "0.1em solid white";
    formField.addEventListener("focusin", () => deemphasiseField(form_field));
}

function deemphasiseField(formField) {
    formField.style.backgroundColor = "white";
    formField.style.border = "";
    formField.removeEventListener("focusin", () => deemphasiseField(form_field));
}

function showConfirmClear(e) {
    document.querySelector("#confirm-clear-parent").style.display = "block";
    e.preventDefault();
}

function hideConfirmClear(e) {
    document.querySelector("#confirm-clear-parent").style.display = "none";
}

function clear() {
    document.querySelector("form").reset();

}
