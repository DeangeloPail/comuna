const formulario = document.getElementById('formulario');
//constates de inputs para valdiar
const NombrePasaje = document.getElementById('NombrePasaje');

//alertas de errores de los campos
const alertSuccess = document.getElementById('alertSuccess');
const alerteError = document.getElementById('alerteError');
const alertaNombrePasaje = document.getElementById('alertaNombrePasaje');

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
editar los daros*/
const pintarMensajeExito = () => {
  //alertSuccess.classList.remove('d-none');
  //alertSuccess.textContent = 'Mensaje enviado con éxito';
  Swal.fire({
    icon: 'success',
    title: '¡Perfecto!, formulario completado correctamente ¿Deseas editar?',
    showDenyButton: true,
    showCancelButton: true,
    cancelButtonText:'Cancelar',
    confirmButtonText: 'editar',
    denyButtonText: `No editar`
  }).then((result) => {
    //confirmo si el usuario desea editar o no
    if (result.isConfirmed) {
//inserto datos con llamando a la funcion php
      let formulario = new FormData(document.getElementById('formulario'));
    fetch('./sql_editar/sen_pasaje.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
          document.getElementById('IdPasaje').value = '';           
           document.getElementById('NombrePasaje').value = '';           
        } else {
            console.log(data);
        }
    });
    location.href="./pasaje.php";

    } else if (result.isDenied) {
      Swal.fire('No se edito nada', '', 'error')
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

  // validar apellido Familia
  if (!NombrePasaje.value.trim()) {
    NombrePasaje.classList.add('is-invalid');

    errores.push({
        //tipo: alertaNombrePasaje,
        //msg: 'Formato no válido campo nombre, solo letras',
    });
  } else {
    NombrePasaje.classList.remove('is-invalid');
    NombrePasaje.classList.add('is-valid');
    alertaNombrePasaje.classList.add('d-none');
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