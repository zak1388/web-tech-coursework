document.querySelector("input[type=\"reset\"]").addEventListener("click", showConfirmClear);
document.querySelector("#confirm-clear-cancel").addEventListener("click", hideConfirmClear);
document.querySelector("#confirm-clear-accept").addEventListener("click", () => {
        clear();
        hideConfirmClear();
});
document.querySelector("input[type=\"submit\"]").addEventListener("click", (click_event) => {
        if (formFieldsEmpty()) {
            click_event.preventDefault();
        }
});

const form = document.querySelector("form");
const form_title = form.querySelector("input[name=\"title\"]");
const form_body = form.querySelector("textarea[name=\"body\"]");


function formFieldsEmpty() {
    let return_value = false;

    return_value |= checkFieldEmpty(form_title);
    return_value |= checkFieldEmpty(form_body);

    return return_value;
}

function checkFieldEmpty(form_field) {
    if (form_field.value.trim() === "") {
        emphasiseField(form_field);
        return true;
    }
    return false;
}

function emphasiseField(form_field) {
    form_field.style.backgroundColor = "red";
    form_field.style.border = "0.1em solid white";
    form_field.addEventListener("focusin", () => deemphasiseField(form_field));
}

function deemphasiseField(form_field) {
    form_field.style.backgroundColor = "white";
    form_field.style.border = "";
    form_field.removeEventListener("focusin", () => deemphasiseField(form_field));
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
