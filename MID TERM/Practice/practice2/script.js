let upperuser=document.getElementById("username");
upperuser.addEventListener("input", function()
 {
    this.value = this.value.toUpperCase();
});