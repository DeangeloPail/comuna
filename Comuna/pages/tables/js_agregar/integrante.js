const formulario = document.getElementById('formulario');
//constates de inputs para valdiar
const NombreIntFam = document.getElementById('NombreIntFam');
const ApellidoIntegrante = document.getElementById('ApellidoIntegrante');
const DocumentoInt = document.getElementById('DocumentoInt');
const Sexo = document.getElementById('Sexo');
const Familia = document.getElementById('Familia');
const FechaDeNacimiento = document.getElementById('FechaDeNacimiento');
const Telefono = document.getElementById('Telefono');
const Profecion = document.getElementById('Profecion');
const CondLaboral = document.getElementById('CondLaboral');
const Enfermedad = document.getElementById('Enfermedad');
const Ayuda = document.getElementById('Ayuda');
const EstatusVacuna = document.getElementById('EstatusVacuna');
const TipoVacuna = document.getElementById('TipoVacuna');
const CantDosis = document.getElementById('CantDosis');
const Otros = document.getElementById('Otros');
//alertas de errores de los campos
const alertSuccess = document.getElementById('alertSuccess');
const alerteError = document.getElementById('alerteError');
const alertaNombreIntFam = document.getElementById('alertaNombreIntFam');
const alertaApellidoIntegrante = document.getElementById('alertaApellidoIntegrante');
const alertaDocumentoInt = document.getElementById('alertaDocumentoInt');
const alertaSexo = document.getElementById('alertaSexo');
const alertaFamilia = document.getElementById('alertaFamilia');
const alertaFechaDeNacimiento = document.getElementById('alertaFechaDeNacimiento');
const alertaTelefono = document.getElementById('alertaTelefono');
const alertaProfecion = document.getElementById('alertaProfecion');
const alertaCondLaboral = document.getElementById('alertaCondLaboral');
const alertaEnfermedad = document.getElementById('alertaEnfermedad');
const alertaEstatusVacuna = document.getElementById('alertaEstatusVacuna');
const alertaTipoVacuna = document.getElementById('alertaTipoVacuna');
const alertaCantDosis = document.getElementById('alertaCantDosis');
const alertaOtros = document.getElementById('alertaOtros');
const alertaAyuda = document.getElementById('alertaAyuda');
//rangos de campos
const regNombreIntFam = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const regApellidoIntegrante = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const regDocumentoInt = /^[0-9]{1,40}$/;
const regTelefono = /^[0-9]{1,40}$/;
const regProfecion = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const regEnfermedad = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const regAyuda = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const regCantDosis = /^[a-zA-ZÀ-ÿ0-9\s]{1,40}$/;
const regOtros=/^[a-zA-ZÀ-ÿ0-9\s]{1,40}$/;
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
    fetch('./sql_agregar/sen_integrante.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
           document.getElementById('NombreIntFam').value = '';
           document.getElementById('ApellidoIntegrante').value = '';
           document.getElementById('DocumentoInt').value = '';
           document.getElementById('Sexo').value = '';
           document.getElementById('Familia').value = '';
           document.getElementById('FechaDeNacimiento').value = '';
           document.getElementById('Telefono').value = '';
           document.getElementById('Profecion').value = '';
           document.getElementById('CondLaboral').value = '';
           document.getElementById('Enfermedad').value = '';
           document.getElementById('Ayuda').value = '';
           document.getElementById('EstatusVacuna').value = '';
           document.getElementById('TipoVacuna').value = '';
           document.getElementById('CantDosis').value = '';
           document.getElementById('Otros').value = '';
           //document.getElementsByName('Vacuna').value='';

        } else {
            console.log(data);
        }
    });
      Swal.fire({
        icon: 'success',
        title: '¡Se guardaron los datos! ¿Deseas Agregar Otro Integrante?',
        showConfirmButton: false,
        html:'<a class="btn btn-primary mx-1 py-2 px-3" href="./agre_integrante_familia.php">Si</a>'+
             '<a class="btn btn-danger mx-1 py-2 px-3" href="./integrante_familia.php" role="button">No</a>'
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

  // validar nombre
  if (!regNombreIntFam.test(NombreIntFam.value) || !NombreIntFam.value.trim()) {
    NombreIntFam.classList.add('is-invalid');

    errores.push({
        //tipo: alertaNombreIntFam,
        //msg: 'Formato no válido campo nombre, solo letras',
    });
  } else {
    NombreIntFam.classList.remove('is-invalid');
    NombreIntFam.classList.add('is-valid');
    alertaNombreIntFam.classList.add('d-none');
  }
  

  // validar apellido
  if (!regApellidoIntegrante.test(ApellidoIntegrante.value) || !ApellidoIntegrante.value.trim()) {
    ApellidoIntegrante.classList.add('is-invalid');

    errores.push({
    });
  } else {
    ApellidoIntegrante.classList.remove('is-invalid');
    ApellidoIntegrante.classList.add('is-valid');
    alertaApellidoIntegrante.classList.add('d-none');
  }
  // validar documento
  if (!regDocumentoInt.test(DocumentoInt.value) || !DocumentoInt.value.trim()) {
    DocumentoInt.classList.add('is-invalid');

    errores.push({
    });
  } else {
    DocumentoInt.classList.remove('is-invalid');
    DocumentoInt.classList.add('is-valid');
    alertaDocumentoInt.classList.add('d-none');
  }
// validar Select sexo
var optForm = document.forms["formulario"]["Sexo"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	Sexo.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Sexo.classList.remove('is-invalid');
    Sexo.classList.add('is-valid');
    alertaSexo.classList.add('d-none');
  }
  // validar Select familia
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
  // validar Fecha
if ((FechaDeNacimiento.value>=fechaActual || FechaDeNacimiento.value<"1943-01-01")) {
  FechaDeNacimiento.classList.add('is-invalid');

  errores.push({
  });
} else {
  FechaDeNacimiento.classList.remove('is-invalid');
  FechaDeNacimiento.classList.add('is-valid');
  alertaFechaDeNacimiento.classList.add('d-none');
}
  // validar Telefono
  if (!regTelefono.test(Telefono.value) || !Telefono.value.trim()) {
    Telefono.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Telefono.classList.remove('is-invalid');
    Telefono.classList.add('is-valid');
    alertaTelefono.classList.add('d-none');
  }
 // validar Profecion
 if (!regProfecion.test(Profecion.value) || !Profecion.value.trim()) {
  Profecion.classList.add('is-invalid');

  errores.push({
  });
} else {
  Profecion.classList.remove('is-invalid');
  Profecion.classList.add('is-valid');
  alertaProfecion.classList.add('d-none');
}
// validar Select CondLaboral
var optForm = document.forms["formulario"]["CondLaboral"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	CondLaboral.classList.add('is-invalid');

    errores.push({
    });
  } else {
    CondLaboral.classList.remove('is-invalid');
    CondLaboral.classList.add('is-valid');
    alertaCondLaboral.classList.add('d-none');
  }
  // validar Enfermedad
  if (!regEnfermedad.test(Enfermedad.value) && Enfermedad.value.trim()) {
    Enfermedad.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Enfermedad.classList.remove('is-invalid');
    Enfermedad.classList.add('is-valid');
    alertaEnfermedad.classList.add('d-none');
  }
  // validar Ayuda
  if (!regAyuda.test(Ayuda.value) && Ayuda.value.trim()) {
    Ayuda.classList.add('is-invalid');

    errores.push({
    });
  } else {
    Ayuda.classList.remove('is-invalid');
    Ayuda.classList.add('is-valid');
    alertaAyuda.classList.add('d-none');
  }
// validar Select Estatus Vacunado
var optForm = document.forms["formulario"]["EstatusVacuna"].selectedIndex;
if( optForm == null || optForm == 0 ) {
	EstatusVacuna.classList.add('is-invalid');

    errores.push({
    });
  } else {
    EstatusVacuna.classList.remove('is-invalid');
    EstatusVacuna.classList.add('is-valid');
    alertaEstatusVacuna.classList.add('d-none');
  }

  // validar Select Tipo Vacuna
var optForm = document.forms["formulario"]["TipoVacuna"].selectedIndex;

  if( optForm == "z" ) {
	TipoVacuna.classList.add('is-invalid');

    errores.push({
    });
  
  } else {
    TipoVacuna.classList.remove('is-invalid');
    TipoVacuna.classList.add('is-valid');
    alertaTipoVacuna.classList.add('d-none');
  }

// validar Cantidad de Dosis

  if (!regCantDosis.test(CantDosis.value)&& CantDosis.value.trim()) {
    CantDosis.classList.add('is-invalid');
  
    errores.push({
    });
  } else {
    CantDosis.classList.remove('is-invalid');
    CantDosis.classList.add('is-valid');
    alertaCantDosis.classList.add('d-none');
  }

// validar Otros


  if(!regOtros.test(Otros.value) && Otros.value.trim()) {
    Otros.classList.add('is-invalid');
  
    errores.push({
    });
  } else {
    Otros.classList.remove('is-invalid');
    Otros.classList.add('is-valid');
    alertaOtros.classList.add('d-none');
  
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