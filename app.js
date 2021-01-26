let guestName = document.getElementById("name");
let guestEmail = document.getElementById("email");

function validate(form) {
    if (guestName.value == null || guestName.value == "") {
        alert("Nimi puuttuu!")
        form.name.focus()
        return false
    }

    if (guestEmail.value == null || guestEmail.value == "") {
        alert("Sähköposti puuttuu!")
        form.email.focus()
        return false
    }
}