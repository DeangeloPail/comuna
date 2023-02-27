const formulario = document.getElementById('formulario');
//constates de inputs para valdiar
const Familia = document.getElementById('Familia');
const Clap = document.getElementById('Clap');
const Gas = document.getElementById('Gas');
const ListaClap = document.getElementById('ListaClap');
const ListaGas = document.getElementById('ListaGas');
const FechaCancelado = document.getElementById('FechaCancelado');
//alertas de errores de los campos
const alertSuccess = document.getElementById('alertSuccess');
const alerteError = document.getElementById('alerteError');
const alertaFamilia = document.getElementById('alertaFamilia');
const alertaClap = document.getElementById('alertaClap');
const alertaGas = document.getElementById('alertaGas');
const alertaListaClap = document.getElementById('alertaListaClap');
const alertaListaGas = document.getElementById('alertaListaGas');
const alertaFechaCancelado = document.getElementById('alertaFechaCancelado');
/*creo mensajes para mostrar un mesaje por si el formulario le hace falta 
un campo o tiene algun error */
var datafecha= new Date();
    const anoActual=datafecha.getFullYear();
    const mesActual=datafecha.getMonth()+1;
    const diaActual=datafecha.getDate();
      function PadLeft(value, length) {
        return (value.toString().length < length) ? PadLeft("0" + value, length) : 
      value;
    };
  const fechaActual=(anoActual+'-'+PadLeft(mesActual,2)+'-'+PadLeft(diaActual,2));
  console.log(fechaActual);
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
    fetch('./sql_editar/sen_reporte.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('IdReporte').value = '';
           document.getElementById('Familia').value = '';
           document.getElementById('Clap').value = '';
           document.getElementById('Gas').value = '';
           document.getElementById('ListaClap').value = '';
           document.getElementById('ListaGas').value = '';
           document.getElementById('FechaCancelado').value = '';
        } else {
            console.log(data);
        }
    });
    location.href="./servicios.php";
    } else if (result.isDenied) {
      Swal.fire('No se editar nada', '', 'error')
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

  // validar Select Familia
var optForm = document.forms["formulario"]["Familia"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	Familia.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Familia.classList.remove('is-invalid');
    Familia.classList.add('is-valid');
    alertaFamilia.classList.add('d-none');
  }
// validar Select Clap
var optForm = document.forms["formulario"]["Clap"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	Clap.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Clap.classList.remove('is-invalid');
    Clap.classList.add('is-valid');
    alertaClap.classList.add('d-none');
  }
// validar Select Gas
var optForm = document.forms["formulario"]["Gas"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	Gas.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Gas.classList.remove('is-invalid');
    Gas.classList.add('is-valid');
    alertaGas.classList.add('d-none');
  }


  // validar Select Lista Clap
var optForm = document.forms["formulario"]["ListaClap"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	ListaClap.classList.add('is-invalid');

    errores.push({
    });
  } else {
    ListaClap.classList.remove('is-invalid');
    ListaClap.classList.add('is-valid');
    alertaListaClap.classList.add('d-none');
  }
   // validar Select ListaGas
var optForm = document.forms["formulario"]["ListaGas"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	ListaGas.classList.add('is-invalid');

    errores.push({
    });
  } else {
    ListaGas.classList.remove('is-invalid');
    ListaGas.classList.add('is-valid');
    alertaListaGas.classList.add('d-none');
  }
// validar Fecha
if ((FechaCancelado.value>fechaActual || FechaCancelado.value<"1943-01-01")) {
    FechaCancelado.classList.add('is-invalid');
  
    errores.push({
    });
  } else {
    FechaCancelado.classList.remove('is-invalid');
    FechaCancelado.classList.add('is-valid');
    alertaFechaCancelado.classList.add('d-none');
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




 