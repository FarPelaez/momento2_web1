//EDIT APPOINTMENT

const edit_appointment = document.getElementById("edit_appointment");

const appointmentName = document.getElementById("appointmentName");
const appointmentDate = document.getElementById("appointmentDate");

const errorElement = document.getElementById("error");

edit_appointment.addEventListener("submit",(e)=>{
    let messages = []

    if (appointmentName.value === '' || appointmentName.value == null){
        errorElement.style.display = 'block';
        appointmentName.focus();
        messages.push('El campo "Nombre cita" está vacío. Por favor, digite el nombre de la cita que desea agendar');
    }else if (appointmentDate.value === '' || appointmentDate.value == null){
        errorElement.style.display = 'block';
        appointmentDate.focus();
        messages.push('El campo "Fecha cita" está vacío. Por favor, ingrese la fecha en la que desea agendar la cita');
    }

    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})