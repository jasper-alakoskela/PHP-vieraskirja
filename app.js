let guestName = document.getElementById("name");
let guestEmail = document.getElementById("email");
let passWord = document.getElementById("password");
let deleteBtn = document.getElementById("delbtn");
let parenDiv = document.getElementById("parent");

function validateMessage(form) {
    if (guestName.value == null || guestName.value == "") {
        alert("Nimi puuttuu!");
        form.name.focus();
        return false;
    }

    if (guestEmail.value == null || guestEmail.value == "") {
        alert("Sähköposti puuttuu!");
        form.email.focus();
        return false;
    }
}

function validatePassword(form) {
    if (passWord.value == null || passWord.value == "") {
        alert("Salasana puuttuu!");
        form.password.focus();
        return false;
    }

    if (passWord.value != 0000) {
        alert("Väärä salasana!");
        form.password.focus();
        return false;
    }
}

deleteBtn.addEventListener("click", function () {
    parentDiv.removeChild(this);
    console.log(test);
});
