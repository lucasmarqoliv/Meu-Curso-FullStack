
// esse metodo usa da incrementação, onde os comandos se repetem a cada intervalo definido.
// sintaxe: setInterval(function callback, intervalo);

let label = document.getElementById('label');
        let textos = ['mudou 1x', 'mudou 2x', 'mudou 3x'];  // Array com os textos
        let indice = 0;  // Índice para controlar o texto atual
        
        function mudarTextoDaLabel() {
            label.textContent = textos[indice];  // Atualiza o texto da label
            indice = (indice + 1) % textos.length;  // Incrementa o índice e volta ao início se necessário
        }

        setInterval(mudarTextoDaLabel, 3000);  // Chama a função a cada 3 segundos