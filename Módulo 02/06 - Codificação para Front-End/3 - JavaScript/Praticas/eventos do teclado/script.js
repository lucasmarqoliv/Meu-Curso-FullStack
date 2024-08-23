

let input01 = document.getElementById('input01');
input01.addEventListener('keydown', function() {
    alert('Você digitou!');
});

//----------------------------------------------------------

let input02 = document.getElementById('input02');

input02.addEventListener('keydown', function(evento) {
    return teclaEnter(evento);
});

function teclaEnter(evento) {
    if (evento.key === "Enter") { // Propriedade key: Essa propriedade retorna uma string que representa a tecla que foi pressionada pelo usuário. Por exemplo, se o usuário pressionar a tecla "Enter", evento.key retornará "Você clicou no "ENTER!".
        alert('Você clicou no "ENTER!')
    };
};
