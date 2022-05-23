
/*----------------------------------------------------------------------------------------*/
function alerta() {
    alert('Mira que estás guap@ hoy XD');
}

// Crud Veterinarios
function EditaVeterinario(id, nombre, tel) {
    $("#id_editarVeterinario").val(id)
    $("#nombre_editarVeterinario").val(nombre)
    $("#tel_editarVeterinario").val(tel)
}

function EliminarVeterinario(url) {
    formp = document.getElementById('formp')
    formp.setAttribute('action', url)
    if (window.confirm('¿Estás seguro de eliminar este Veterinario?')) {
        document.getElementById('formp').submit()
    }
}
// Crud Usuarios
function EditaUser(id, nombre, tel, email) {
    $("#id_editaruser").val(id)
    $("#nombre_editaruser").val(nombre)
    $("#tel_editaruser").val(tel)
    $("#email_editaruser").val(email)
}

function EliminarUser(url) {
    formp = document.getElementById('formp')
    formp.setAttribute('action', url)
    if (window.confirm('¿Estás seguro de eliminar este Usuario?')) {
        document.getElementById('formp').submit()
    }
}
// Crud Confirmar Citas
function Editarcita(id, fecha, m_id, hora, nom) {
    $("#id_editarcita").val(id)
    $("#fecha_editarcita").val(fecha)
    $("#mid_editarcita").val(m_id)
    let mid = document.getElementById('mid_editarcita');
    mid.innerHTML = nom;
    let vet = document.querySelectorAll('#veterinarios');
    vet.forEach(Vet => {
        if (Vet.value == m_id) {
            Vet.style.display = 'none';
        }
    });
    $("#hora_editarcita").val(hora)
    let hor = document.getElementById('hora_editarcita');
    hor.innerHTML = hora;
}

function EliminarCita(url) {
    formp = document.getElementById('formp')
    formp.setAttribute('action', url)
    if (window.confirm('¿Estás seguro de eliminar está Cita?')) {
        document.getElementById('formp').submit()
    }
}

function Terminarcita(url) {
    formp = document.getElementById('formp')
    formp.setAttribute('action', url)
    if (window.confirm('¿Estás seguro de concluir está Cita?')) {
        document.getElementById('formp').submit()
    }
}
