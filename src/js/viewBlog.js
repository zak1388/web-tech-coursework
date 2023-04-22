document.querySelector("#hideOnSignIn").addEventListener('click', () => hideDialog("#onSignInBackground"));
document.querySelector("#hideOnSignOut").addEventListener('click', () => hideDialog("#onSignOutBackground"));
document.querySelector("#hideOnAlreadySignedIn").addEventListener('click', () => hideDialog("#onAlreadySignedInBackground"));

if (window.location.hash === "#signedIn") {
    showDialog("#onSignInBackground");
} else if (window.location.hash === "#signedOut") {
    showDialog("#onSignOutBackground");
} else if (window.location.hash === "#alreadySignedIn") {
    showDialog("#onAlreadySignedInBackground");
}

function showDialog(dialogToShow) {
    document.querySelector(dialogToShow).style.display = "block";

}

function hideDialog(dialogToShow) {
    document.querySelector(dialogToShow).style.display = "none";
}
