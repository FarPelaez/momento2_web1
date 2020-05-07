//LOGIN USER

const login_user = document.getElementById("login_user");

const userId = document.getElementById("userId");

const errorElement = document.getElementById("error");

login_user.addEventListener("submit",(e)=>{
    let messages = []

    if (userId.value === '' || userId.value == null){
        errorElement.style.display = 'block';
        userId.focus();
        messages.push('El campo "Documento" está vacío. Por favor, digite su numero de documento');
    }

    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})