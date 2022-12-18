/*make password visible/invisible on click*/
const showPassword = document.querySelector("#password-visible");
const passwordField = document.querySelector("#password");

showPassword.addEventListener("click", function(){
    if(this.classList.toggle("fa-eye-slash")) {
        this.classList.remove("fa-eye");
    } else {
        this.classList.toggle("fa-eye");
    }
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
})