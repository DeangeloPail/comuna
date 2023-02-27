const formulario = document.getElementById('formulario');
//constates de inputs para valdiar
const nombreJefeCalle = document.getElementById('nombreJefeCalle');
const DocumentoIdentidad = document.getElementById('DocumentoIdentidad');
const Pasaje = document.getElementById('Pasaje');
const Vereda = document.getElementById('Vereda');
//alertas de errores de los campos
const alertSuccess = document.getElementById('alertSuccess');
const alerteError = document.getElementById('alerteError');
const alertaNombreJefe = document.getElementById('alertaNombreJefe');
const alertaDocumentoIdentidad = document.getElementById('alertaDocumentoIdentidad');
const alertaPasaje = document.getElementById('alertaPasaje');
const alertaVereda = document.getElementById('alertaVereda');
//rangos de campos
const regnombreJefeCalle = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const regDocumentoIdentidad = /^[0-9]{1,40}$/;
/*creo mensajes para mostrar un mesaje por si el formulario le hace falta 
un campo o tiene algun error */

const pintarMensajeError = () => {
  //alerteError.classList.remove('d-none');
  //alerteError.textContent = 'asi no putoo';
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Error falta elementos por llenar',
  })
};
/*creo una serie mensajes para que luego de validar el formulario
guardar los daros*/
const pintarMensajeExito = () => {
  //alertSuccess.classList.remove('d-none');
  //alertSuccess.textContent = 'Mensaje enviado con éxito';
  Swal.fire({
    icon: 'success',
    title: '¡Perfecto!, formulario completado correctamente ¿Deseas guardar?',
    showDenyButton: true,
    showCancelButton: true,
    cancelButtonText:'Cancelar',
    confirmButtonText: 'Guardar',
    denyButtonText: `No Guardar`
  }).then((result) => {
    //confirmo si el usuario desea guardar o no
    if (result.isConfirmed) {
//inserto datos con llamando a la funcion php
      let formulario = new FormData(document.getElementById('formulario'));
    fetch('./sql_agregar/sen_jefe_calle.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
           document.getElementById('nombreJefeCalle').value = '';
           document.getElementById('DocumentoIdentidad').value = '';
           document.getElementById('Pasaje').value = '';
           document.getElementById('Vereda').value = '';
        } else {
            console.log(data);
        }
    });
      Swal.fire({
        icon: 'success',
        title: '¡Se guardaron los datos! ¿Deseas Agregar Otro Jefe de calle?',
        showConfirmButton: false,
        html:'<a class="btn btn-primary mx-1 py-2 px-3" href="./agre_jefe_calle.php">Si</a>'+
             '<a class="btn btn-danger mx-1 py-2 px-3" href="./jefe_calle.php" role="button">No</a>'
      })
    } else if (result.isDenied) {
      Swal.fire('No se guardo nada', '', 'error')
    }
  })
};

const pintarMensajeNo = (errores) => {
  errores.forEach((item) => {
    item.tipo.classList.remove('d-none');
    item.tipo.textContent = item.msg;
  });
};

//validacion de formulario

formulario.addEventListener('submit', (e) => {
  e.preventDefault();


  alertSuccess.classList.add('d-none');
  const errores = [];

  // validar nombre Jefe Calle
  if (!regnombreJefeCalle.test(nombreJefeCalle.value) || !nombreJefeCalle.value.trim()) {
    nombreJefeCalle.classList.add('is-invalid');

    errores.push({
        //tipo: alertaNombreJefe,
        //msg: 'Formato no válido campo nombre, solo letras',
    });
  } else {
    nombreJefeCalle.classList.remove('is-invalid');
    nombreJefeCalle.classList.add('is-valid');
    alertaNombreJefe.classList.add('d-none');
  }
  // validar Documento Identidad
  if (!regDocumentoIdentidad.test(DocumentoIdentidad.value) || !DocumentoIdentidad.value.trim()) {
    DocumentoIdentidad.classList.add('is-invalid');

    errores.push({
    });
  } else {
    DocumentoIdentidad.classList.remove('is-invalid');
    DocumentoIdentidad.classList.add('is-valid');
    alertaDocumentoIdentidad.classList.add('d-none');
  }
// validar Select vereda
var optForm = document.forms["formulario"]["Pasaje"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	Pasaje.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Pasaje.classList.remove('is-invalid');
    Pasaje.classList.add('is-valid');
    alertaPasaje.classList.add('d-none');
  }


  // validar Select vereda
var optForm = document.forms["formulario"]["Vereda"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	Vereda.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Vereda.classList.remove('is-invalid');
    Vereda.classList.add('is-valid');
    alertaVereda.classList.add('d-none');
  }

//Reviso el formulario si tiene errores o tine campos vacios
  if (errores.length !== 0) {
    pintarMensajeError(errores);
    return;
  }

  alerteError.classList.add('d-none');
  console.log('Formulario enviado con éxito');
  pintarMensajeExito();
});




 