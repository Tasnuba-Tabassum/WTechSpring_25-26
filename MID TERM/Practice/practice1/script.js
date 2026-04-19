function validation() {
    let firstname = document.getElementById("firstname").value;
    let lastname = document.getElementById("lastname").value;
    if (firstname == ""||lastname == ""||firstname.length<2||lastname.length<2 ) {
        alert("Name must have at least 2 characters and cannot be empty");
        return false;
    }
    return true;
}
