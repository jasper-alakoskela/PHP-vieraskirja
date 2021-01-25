let guestName = document.getElementById("name");
let guestEmail = document.getElementById("email");

function validate() {
    if (guestName.value == null || guestName.value == "") {
        alert("Nimi puuttuu!")
    }
    if (guestEmail.value == null || guestEmail.value == "") {
        alert("Sähköposti puuttuu!")
    }
}