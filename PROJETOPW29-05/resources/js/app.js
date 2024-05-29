const form = document.getElementById('form');
const name = document.getElementById('name');
const phone = document.getElementById('phone');
const address = document.getElementById('address');
const gender = document.getElementById('gender');

form.addEventListener('submit', (event) =>{
    event.preventDefault();
    Validate();
})

const sendData = (nameVal, sRate, Count) => {
    if(sRate === Count){
        swal("Olá " + nameVal , "Você está registrado", "success");
    }
}

const SuccessMsg = (nameVal) => {
    let formContr = document.getElementsByClassName('form-control');
    var Count = formContr.length - 1;
    for(var i = 0; i < formContr.length; i++){
        if(formContr[i].className === "form-control success"){
            var sRate = 0 + i;
            console.log(sRate);
            sendData(nameVal, sRate, Count);
        }
        else{
            return false;
        }
    }
}

function Validate(){
    const nameVal = name.value.trim();
    const phoneVal = phone.value.trim();
    const addressVal = address.value.trim();
    const genderVal = gender.value;

    // Nome
    if(nameVal === ""){
        setErrorMsg(name, 'Nome não pode estar em branco');
    } else if(nameVal.length <= 2){
        setErrorMsg(name, 'Mínimo 3 caracteres');
    } else {
        setSuccessMsg(name);
    }

    // Telefone
    if(phoneVal === ""){
        setErrorMsg(phone, 'Telefone não pode estar em branco');
    } else if(phoneVal.length < 10){
        setErrorMsg(phone, 'Número de telefone inválido');
    } else {
        setSuccessMsg(phone);
    }

    // Endereço
    if(addressVal === ""){
        setErrorMsg(address, 'Endereço não pode estar em branco');
    } else {
        setSuccessMsg(address);
    }

    // Sexo
    if(genderVal === ""){
        setErrorMsg(gender, 'Por favor, selecione o sexo');
    } else {
        setSuccessMsg(gender);
    }

    SuccessMsg(nameVal);
}

function setErrorMsg(input, errormsgs){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = "form-control error";
    small.innerText = errormsgs;
}

function setSuccessMsg(input){
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}

