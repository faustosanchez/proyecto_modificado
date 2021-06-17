const R  = document.getElementById('input-group');
const inputs = document.querySelectorAll('#Registro input');
 
const expresiones={
  Nombre: /^[a-zA-Z0-9\_\-]{4,9}$/,
  Correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  Contraseña:/^.{4,10}$/
}

const vaidarformulario = (e) => {
    switch(e.target.name){
        case"Nombre":
        if(expresiones.Nombre.test(e.target.value)){
        }
        else{
            document.getElementById('Nombre').classList.add('GrupoIn-incorrecto');
        }
        break;

        case"Correo":
        break;

        case"Contraseña":
        break;
    }
}
inputs.forEach((input) => {
    input.addEventListener('keyup', vaidarformulario);
    input.addEventListener('blur',vaidarformulario)
    
});

Registro.addEventListener('submit', (e)=>{
    e.preventDefault();
})