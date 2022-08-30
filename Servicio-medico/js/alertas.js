//FUNCION PARA OBTENER LA ID CON 66.1
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
///////// ALERTAS

/// ALERTA DE GREAR USUARIO
var res = getParameterByName('res');

if(res=="jd"){
  Swal.fire({
    icon: 'success',
    title: 'Proceso Exitoso',
    text: ' Usuario Registrado',
    footer: '<a usuario registrado</a>'
  })
}
// ALERTA DE ELIMINAR USUARIO
if(res=="as"){
    Swal.fire({
      icon: 'error',
      title: 'Proceso Exitoso',
      text: 'Material Registrado',
      footer: '<a Usuario Eliminado </a>'
    })
  }

  ////// ALERTA DE EDITAR USUARIO

  if(res=="jp"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Registro Editado!',
      footer: '<a usuario registrado</a>'
    })
  }

  /////ELIMINAR MATERIAL
  if(res=="ug"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Material Eliminado!',
      footer: '<a Material Eliminado</a>'
    })
  }
  ////MATERIAL REGISTRADO
  if(res=="cc"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Material Registrado',
      footer: '<a Material Registrado</a>'
    })
  }
  ///////EDITAR MATERIAL
  if(res=="ag"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Material Editado!',
      footer: '<a usuario registrado</a>'
    })
  }

  ///////CEDULA REPETIDA
  if(res=="no"){
    Swal.fire({
      icon: 'error',
      title: 'ADVERTENCIA',
      text: ' CEDULA YA REGISTRADA',
      footer: '<a Cedula ya Registrada</a>'
    })
  }

  ///////MATERIAL  REPETIDA
  if(res=="as"){
    Swal.fire({
      icon: 'error',
      title: 'ADVERTENCIA',
      text: ' MATERIAL YA REGISTRADA',
      footer: '<a Material  ya Registrada</a>'
    })
  }
  ///////REPETICO  REPETIDA
  if(res=="rc"){
    Swal.fire({
      icon: 'warning',
      title: 'ADVERTENCIA',
      text: ' INSUMO YA REGISTRADA',
      footer: '<a Insumo  ya Registrada</a>'
    })
  }
  ///////REPETIDO  REPETIDA
  if(res=="eu"){
    Swal.fire({
      icon: 'warning',
      title: 'ADVERTENCIA',
      text: ' Maca YA Tiene un Registro',
      footer: '<a Marca tiene   un Registrada</a>'
    })
  }
   ///////REGISTRO DE MARCA
   if(res=="hilo"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Marca Registrada!',
      footer: '<a Marca Registrada</a>'
    })
  }

   ///////REGISTRO DE GERENCIA
   if(res=="jm"){
    Swal.fire({
      icon: 'error', 
      title: 'Alerta',
      text: '  Gerencia ya  Existe!',
      footer: '<a  Gerencia ya  Existe</a>'
    })
  }
  ///////REPETIDO  REPETIDA
  if(res=="jc"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: 'Registro Exitiso',
      footer: '<a Registro</a>'
    })
  }

  /////ELIMINAR MATERIAL
  if(res=="05"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Gerencia Eliminada!',
      footer: '<a Gerencia Eliminada</a>'
    })
  }

  ///////EDITAR MATERIAL
  if(res=="17"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Gerencia Editado!',
      footer: '<a Registrado Editado</a>'
    })
  }

    / ///////REGISTRO DE DIVISION
   if(res=="20a"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Division Registrada!',
      footer: '<a Division Registrada</a>'
    })
  }

  ////ELIMINAR DIVISION
  if(res=="YES"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Division  Eliminada!',
      footer: '<a Divisiom Eliminada</a>'
    })
  }

   ///////EDITAR MATERIAL
   if(res=="20"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Division Editada!',
      footer: '<a Division Editada</a>'
    })
  }

   ///////REGISTRO  REPETIDA
   if(res=="asb"){
    Swal.fire({
      icon: 'success',
      title: 'ADVERTENCIA',
      text: 'Registro Repetido',
      footer: '<a Registro  Repetido</a>'
    })
  } 

    /////// MATERIAL INCREMENTADO
    if(res=="HC"){
      Swal.fire({
        icon: 'success',
        title: 'Proceso Exitoso',
        text: '  Material Incrementado!',
        footer: '<a </a>'
      })
    }

       ///////CANTIDAD DE MATERIAL INSUFICIENTA
   if(res=="HA"){
    Swal.fire({
      icon: 'error',
      title: 'ADVERTENCIA',
      text: 'Cantidad de Material Insuficiente',
      footer: '<a </a>'
    })
  } 

   /////// MATERIAL DECREMENTADO
   if(res=="SJ"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: '  Material Decrementado!',
      footer: '<a </a>'
    })
  }

   /////// INSUMO INCREMENTADO
   if(res=="84"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: '  Insumo Incrementado!',
      footer: '<a </a>'
    })
  }

  /////// MATERIAL DECREMENTADO
  if(res=="27"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: '  Insumo Decrementado!',
      footer: '<a </a>'
    })
  }

       ///////CANTIDAD DE INSUMO INSUFICIENTA
       if(res=="10"){
        Swal.fire({
          icon: 'success',
          title: 'ADVERTENCIA',
          text: 'Cantidad de Material Insuficiente',
          footer: '<a </a>'
        })
      } 

  ////MATERIAL REGISTRADO
  if(res=="vc"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Insumo Registrado',
      footer: '<a Material Registrado</a>'
    })
  }

  // ALERTA DE ELIMINAR TIPO DE INSUMO
if(res=="16"){
  Swal.fire({
    icon: 'success',
    title: 'Proceso Exitoso',
    text: ' Tipo de Insumo Eliminado ',
    footer: '<a </a>'
  })
}

/ ///////REGISTRO DE DIVISION
if(res=="66"){
 Swal.fire({
   icon: 'success',
   title: 'Proceso Exitoso',
   text: ' Tipo de Insumo  Registrado!',
   footer: '<a </a>'
 })
}

///////REGISTRO  REPETIDA
if(res=="66.1"){
  Swal.fire({
    icon: 'error',
    title: 'Registro Repetido',
    text: 'Registro Repetido',
    footer: '<a </a>'
  })
} 

  ///////EDITAR MATERIAL
  if(res=="50"){
    Swal.fire({
      icon: 'success',
      title: 'Proceso Exitoso',
      text: ' Tipo de Insumo Editada!',
      footer: '<a </a>'
    })
  }

   ///////REPETIDO  T.material
   if(res=="88"){
    Swal.fire({
      icon: 'error',
      title: 'Material ya Registro',
      text: ' Material ya Registro',
      footer: '<a </a>'
    })
  }

////MATERIAL REGISTRADO
if(res=="99"){
  Swal.fire({
    icon: 'error',
    title: 'Tipo de Material Registradoo',
    text: ' Tipo de Material Registrado',
    footer: '<a </a>'
  })
}

 /////ELIMINAR MATERIAL
 if(res=="100"){
  Swal.fire({
    icon: 'success',
    title: 'Proceso Exitoso',
    text: ' Tipo de Material  Eliminada!',
    footer: '<a </a>'
  })
}

 ///////EDITAR TIPO DE MATERIAL
 if(res=="101"){
  Swal.fire({
    icon: 'success',
    title: 'Proceso Exitoso',
    text: ' Tipo de Maerial Editado!',
    footer: '<a </a>'
  })
}

///EDITAR DIVISION
if(res=="1984"){
  Swal.fire({
    icon: 'success',
    title: 'Proceso Exitoso',
    text: ' Division  Editada!',
    footer: '<a </a>'
  })
}
////HISTORIA REGISTRADO
if(res=="R"){
  Swal.fire({
    icon: 'success',
    title: 'Proceso Exitoso',
    text: ' Historia Registrado',
    footer: '<a  </a>'
  })
}
///MATERIAL REGISTRADO
if(res=="REPI"){
  Swal.fire({
    icon: 'error',
    title: 'Paciente ya Registrado',
    text: ' Historia ya Existe',
    footer: '<a </a>'
  })
}
 /////ELIMINAR HISTORIA
 if(res=="E"){
  Swal.fire({
    icon: 'success',
    title: 'Historia Eliminada!',
    text: ' Historia Eliminada!',
    footer: '<a </a>'
  })
}