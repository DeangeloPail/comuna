const formulario = document.getElementById('formulario');
//constates de inputs para valdiar
const apellidoFamilia = document.getElementById('apellidoFamilia');
const NumeroCasa = document.getElementById('NumeroCasa');
const JefeCalle = document.getElementById('JefeCalle');
const JefeFamilia = document.getElementById('JefeFamilia');
//alertas de errores de los campos
const alertSuccess = document.getElementById('alertSuccess');
const alerteError = document.getElementById('alerteError');
const alertaApellidoFamilia = document.getElementById('alertaApellidoFamilia');
const alertaNumeroCasa = document.getElementById('alertaNumeroCasa');
const alertaJefeCalle = document.getElementById('alertaJefeCalle');
const alertaJefeFamilia = document.getElementById('alertaJefeFamilia');
//rangos de campos
const regapellidoFamilia = /^[a-zA-ZÀ-ÿ]{1,40}$/;
const regJefeFamilia = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const regNumeroCasa = /^[0-9\-]{1,40}$/;
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
    fetch('./sql_editar/sen_familia.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('idFamilia').value = '';
           document.getElementById('apellidoFamilia').value = '';
           document.getElementById('NumeroCasa').value = '';
           document.getElementById('JefeCalle').value = '';
           document.getElementById('JefeFamilia').value = '';
        } else {
            console.log(data);
        }
    });
    location.href="./familias.php";
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
  if (!regapellidoFamilia.test(apellidoFamilia.value) || !apellidoFamilia.value.trim()) {
    apellidoFamilia.classList.add('is-invalid');

    errores.push({
        //tipo: alertaApellidoFamilia,
        //msg: 'Formato no válido campo nombre, solo letras',
    });
  } else {
    apellidoFamilia.classList.remove('is-invalid');
    apellidoFamilia.classList.add('is-valid');
    alertaApellidoFamilia.classList.add('d-none');
  }
  // validar Numero Casa
  if (!regNumeroCasa.test(NumeroCasa.value) || !NumeroCasa.value.trim()) {
    NumeroCasa.classList.add('is-invalid');

    errores.push({
    });
  } else {
    NumeroCasa.classList.remove('is-invalid');
    NumeroCasa.classList.add('is-valid');
    alertaNumeroCasa.classList.add('d-none');
  }
// validar Select Jefe Calle
var optForm = document.forms["formulario"]["JefeCalle"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	JefeCalle.classList.add('is-invalid');

    errores.push({
    });
  } else {
    JefeCalle.classList.remove('is-invalid');
    JefeCalle.classList.add('is-valid');
    alertaJefeCalle.classList.add('d-none');
  }


  // validar Jefe Familia
  if (!regJefeFamilia.test(JefeFamilia.value) || !JefeFamilia.value.trim()) {
    JefeFamilia.classList.add('is-invalid');

    errores.push({
    });
  } else {
    JefeFamilia.classList.remove('is-invalid');
    JefeFamilia.classList.add('is-valid');
    alertaJefeFamilia.classList.add('d-none');
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