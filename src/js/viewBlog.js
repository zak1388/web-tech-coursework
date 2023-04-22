document.querySelector("#hideOnSignIn").addEventListener('click', hideOnSignIn);
document.querySelector("#hideOnSignOut").addEventListener('click', hideOnSignOut);

if (window.location.hash === "#signedIn") {
    onSignIn();
} else if (window.location.hash === "#signedOut") {
    onSignOut();
}

function onSignIn() {
    document.querySelector("#onSignInBackground").style.display = "block";
}

function onSignOut() {
    document.querySelector("#onSignOutBackground").style.display = "block";
}

function hideOnSignIn() {
    document.querySelector("#onSignInBackground").style.display = "none";
}

function hideOnSignOut() {
    document.querySelector("#onSignOutBackground").style.display = "none";
}
