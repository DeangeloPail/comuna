const formulario = document.getElementById('formulario');
//constates de inputs para valdiar
const NombreUsuario = document.getElementById('NombreUsuario');
const Contrasena = document.getElementById('Contrasena');

//alertas de errores de los campos
const alertSuccess = document.getElementById('alertSuccess');
const alerteError = document.getElementById('alerteError');
const alertaNombreUsuario = document.getElementById('alertaNombreUsuario');
const alertaContrasena = document.getElementById('alertaContrasena');

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
Editar los daros*/
const pintarMensajeExito = () => {
  //alertSuccess.classList.remove('d-none');
  //alertSuccess.textContent = 'Mensaje enviado con éxito';
  Swal.fire({
    icon: 'success',
    title: '¡Perfecto!, formulario completado correctamente ¿Deseas Editar?',
    showDenyButton: true,
    showCancelButton: true,
    cancelButtonText:'Cancelar',
    confirmButtonText: 'Editar',
    denyButtonText: `No Editar`
  }).then((result) => {
    //confirmo si el usuario desea Editar o no
    if (result.isConfirmed) {
//inserto datos con llamando a la funcion php
      let formulario = new FormData(document.getElementById('formulario'));
    fetch('./sql_editar/sen_usuario.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
          document.getElementById('IdUsuario').value = '';
           document.getElementById('NombreUsuario').value = '';
           document.getElementById('Contrasena').value = '';
           
        } else {
            console.log(data);
        }
    });
    location.href="./usuario.php";
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

  // validar apellido Familia
  if (!NombreUsuario.value.trim()) {
    NombreUsuario.classList.add('is-invalid');

    errores.push({
        //tipo: alertaNombreUsuario,
        //msg: 'Formato no válido campo nombre, solo letras',
    });
  } else {
    NombreUsuario.classList.remove('is-invalid');
    NombreUsuario.classList.add('is-valid');
    alertaNombreUsuario.classList.add('d-none');
  }
  // validar Numero Casa
  if (!Contrasena.value.trim()) {
    Contrasena.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Contrasena.classList.remove('is-invalid');
    Contrasena.classList.add('is-valid');
    alertaContrasena.classList.add('d-none');
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