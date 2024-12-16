
// esse metodo se executa apenas uma vez, em contagem decrescente, ou seja não se repete.
// sintaxe: setTimeout(function callback, intervalo);

let label = document.getElementById('label');

setTimeout(mudarTexto, 3000)  // setTimeout é uma função global

function mudarTexto() {
    label.textContent = 'mudouu'
}

