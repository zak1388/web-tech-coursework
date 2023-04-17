document.querySelector("#hideOnSignIn").onClick = hideOnSignIn;

if (window.location.hash === "#signedIn") {
    onSignIn();
}

function onSignIn() {
    document.querySelector(".onSignIn").style.display = "flex";
}

function hideOnSignIn() {
    document.querySelector(".onSignIn").style.display = "none";
}
