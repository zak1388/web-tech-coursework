document.querySelector("#hideOnSignIn").addEventListener('click', hideOnSignIn);

if (window.location.hash === "#signedIn") {
    onSignIn();
}

function onSignIn() {
    document.querySelector(".onSignInBackground").style.display = "block";
}

function hideOnSignIn() {
    document.querySelector(".onSignInBackground").style.display = "none";
}
