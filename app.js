let nValue = document.getElementById("name").value;
let eValue = document.getElementById("email").value;

function validate() {
    if (nValue == null || nValue == "") {
        alert("Nimi puuttuu!")
    }
    if (eValue == null || eValue == "") {
        alert("Sähköposti puuttuu!")
    }
}