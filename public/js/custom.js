// Al pulsar el botón de logout, se envía el formulario de logout
document.getElementById("logoutButton").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("logout-form").submit();
});
