//ADD USER
const add_user = document.getElementById("add_user");

const userName = document.getElementById("userName");
const userLastName = document.getElementById("userLastName");
const userId = document.getElementById("userId");
const userBirthday = document.getElementById("userBirthday");
const userCity = document.getElementById("userCity");
const userDistrict = document.getElementById("userDistrict");
const userPhone = document.getElementById("userPhone");

const errorElement = document.getElementById("error");

add_user.addEventListener("submit",(e)=>{
    let messages = []

    if (userName.value === '' || userName.value == null){
        errorElement.style.display = 'block';
        userName.focus();
        messages.push('El campo "Nombres" está vacío. Por favor, digite su nombre');
    }else if (userLastName.value === '' || userLastName.value == null){
        errorElement.style.display = 'block';
        userLastName.focus();
        messages.push('El campo "Apellidos" está vacío. Por favor, digite sus apellidos');
    }else if (userId.value === '' || userId.value == null){
        errorElement.style.display = 'block';
        userId.focus();
        messages.push('El campo "Documento" está vacío. Por favor, digite su numero de documento');
    }else if (userId.value.length > 12){
        errorElement.style.display = 'block';
        userId.focus();
        messages.push('El campo "Documento" no puede contener más de 12 caracteres');
    }else if (userBirthday.value === '' || userBirthday.value == null){
        errorElement.style.display = 'block';
        userBirthday.focus();
        messages.push('El campo "Fecha de Nacimiento" está vacío. Por favor, ingrese su fecha de nacimiento');
    }else if (userCity.value === '' || userCity.value == null){
        errorElement.style.display = 'block';
        userCity.focus();
        messages.push('El campo "Ciudad" está vacío. Por favor, digite su ciudad de residencia');
    }else if (userDistrict.value === '' || userDistrict.value == null){
        errorElement.style.display = 'block';
        userDistrict.focus();
        messages.push('El campo "Barrio" está vacío. Por favor, digite su barrio de residencia');
    }else if (userPhone.value === '' || userPhone.value == null){
        errorElement.style.display = 'block';
        userPhone.focus();
        messages.push('El campo "Número Móvil" está vacío. Por favor, digite su número de telefono móvil');
    }else if (userPhone.value.length < 10){
        errorElement.style.display = 'block';
        userPhone.focus();
        messages.push('El campo "Número Móvil" no puede contener menos de 10 caracteres');
    }else if (userPhone.value.length > 10){
        errorElement.style.display = 'block';
        userPhone.focus();
        messages.push('El campo "Número Móvil" no puede contener más de 10 caracteres');
    }

    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})



