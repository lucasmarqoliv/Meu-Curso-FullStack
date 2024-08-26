
//maneira de capturar um evento de tecla pressionada (keydown) em um campo de texto
let input01 = document.getElementById('input01');
input01.addEventListener('keydown', function() {
    alert('Você digitou!')
});

//---------------------------------------------------------

let input02 = document.getElementById('input02');
input02.addEventListener('keydown', function(event) { // parametro event recebe o primeiro pametro do metodo addEventListenner para que voce possa chama-lo posteriormente aplicando um outro metodo.
    return teclaEnter(event)
});

function teclaEnter(event) {
    if (event.key === "Enter") { // Propriedade key: Essa propriedade retorna uma string que representa a tecla que foi pressionada pelo usuário. Por exemplo, se o usuário pressionar a tecla "Enter", event.key retornará "Você clicou no "ENTER!".
        alert('Você clicou no "ENTER!')
    }
};

//---------------------------------------------------------
// detecta se a tecla Shift está pressionada ao pressionar outra tecla
arrTeclas = [];
let input03 = document.getElementById('input03'); 
input03.addEventListener('keydown', function(event){
    arrTeclas.push(event.key)
    return teclaShift(arrTeclas)
});


function teclaShift(arrTeclas) {

    if (arrTeclas.includes("Shift") && arrTeclas.includes("Enter")) {
        alert ('tecla Shift pressionada');
    }
    else{
        alert(arrTeclas)
    }
};

//-------------------------------------------------------
// código para prevenir a ação padrão de um evento de tecla
let input04 = document.getElementById('input04');
input04.addEventListener('keydown', function(event){
    event.preventDefault()
});

//------------------------------------------------------
// mostra a tecla pressionada ao pressionar qualquer tecla
let teclas = [];
let input05 = document.getElementById('input05');
input05.addEventListener('keydown', function(event){
    teclas.push(event.key)
    return mostraTecla(event)
});
function mostraTecla(event) {
    if (teclas !== "") {
        alert (teclas)
    }
}

//------------------------------------------------------
// detecta quando a tecla Esc é pressionada e exibe um alerta
let input06 = document.getElementById('input06');
input06.addEventListener('keydown', function(event){
    return teclaEsc(event)
});

function teclaEsc(event) {
    if (event.key === 'Escape') {
        alert ('Tecla ESC pressionada!')
    };
};
//------------------------------------------------------
//identifica e exibe o código da tecla pressionada
let input07 = document.getElementById('input07');
input07.addEventListener('keydown', function(event){
    return mostraCodTecla(event)

});
function mostraCodTecla(event) {
    alert(`Tecla: ${event.key} \nCódigo: ${event.code} \nkeyCode: ${event.keyCode}`);
}
//---------------------------------------------------
// questão 08
//-----------------------------------------------------
// desativa a tecla Backspace para um campo de entrada específico
let input09 = document.getElementById('input09');
input09.addEventListener('keydown', function(event){
   if (event.key === "Backspace") {
    event.preventDefault()
    alert('A tecla "Backspace" foi bloqueada!')
   }
});
//-----------------------------------------------------
//combina múltiplas teclas, como Ctrl + S, e realiza uma ação customizada
let input10 = document.getElementById('input10');
input10.addEventListener('keydown', function(event){
    return teclasConjuntas(event)
});

function teclasConjuntas(event) {
    if (event.ctrlKey && event.key === 's') {
        event.preventDefault()
        alert('teclas digitadas!')
    }
}
