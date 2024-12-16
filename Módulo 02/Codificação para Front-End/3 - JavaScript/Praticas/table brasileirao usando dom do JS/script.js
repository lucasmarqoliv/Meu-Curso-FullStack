
document.addEventListener('DOMContentLoaded', function(){ // evento de carregamento da pagina.
    const dados = [ // dados para alimentar a tabela.
        {time: 'Botafogo', pontos: 53, jogos: 26, vitorias: 16, empates: 5, derrotas: 5, GP: 45, GC: 25, SG: 20, '%': 67},
        {time: 'Palmeiras', pontos:50,	jogos: 26,	vitorias: 15,	empates: 5,derrotas: 6,	GP: 43,	GC: 19,	SG: 24,	'%': 64},
        {time: 'Fortaleza', pontos: 49, jogos: 26, vitorias: 14, empates: 7, derrotas: 5, GP: 32, GC: 25, SG: 7, '%': 62},
        {time: 'Flamengo', pontos: 45, jogos: 25, vitorias: 13, empates: 6, derrotas: 6, GP: 40, GC: 29, SG: 11, '%': 60},
        {time: 'São Paulo', pontos: 44, jogos: 26, vitorias: 13, empates: 5, derrotas: 8, GP: 34, GC: 26, SG: 8, '%': 56},
        {time: 'Bahia', pontos: 42, jogos: 26, vitorias: 12, empates: 6, derrotas: 8, GP: 37, GC: 27, SG: 10, '%': 53}
    ];

    const corpo_tabela = document.querySelector('#brasileirao tbody'); // seleciona o corpo da tabela.

    dados.forEach(dado => { // itera sobre os dados.
        const tr = document.createElement('tr'); // cria uma linha para cada item nos dados.

        // desse bloco para baixo se cria uma celula (td) para cada dado iterado de 'dados'.
        const tdTime = document.createElement('td');
        tdTime.textContent = dado.time; // preenche a celula com o valor do 'dado' correspondente.
        tr.appendChild(tdTime); // especifica a celula criada como filha da linha 'tr'.

        const tdPontos = document.createElement('td');
        tdPontos.textContent = dado.pontos;
        tr.appendChild(tdPontos);

        const tdJogos = document.createElement('td');
        tdJogos.textContent = dado.jogos;
        tr.appendChild(tdJogos);

        const tdVitorias = document.createElement('td');
        tdVitorias.textContent = dado.vitorias;
        tr.appendChild(tdVitorias);

        const tdEmpates = document.createElement('td');
        tdEmpates.textContent = dado.empates;
        tr.appendChild(tdEmpates);

        const tdDerrotas = document.createElement('td');
        tdDerrotas.textContent = dado.derrotas;
        tr.appendChild(tdDerrotas);

        const tdGP = document.createElement('td');
        tdGP.textContent = dado.GP;
        tr.appendChild(tdGP);

        const tdGC = document.createElement('td');
        tdGC.textContent = dado.GC;
        tr.appendChild(tdGC);

        const tdSG = document.createElement('td');
        tdSG.textContent = dado.SG;
        tr.appendChild(tdSG);

        const tdPorcentagem = document.createElement('td');
        tdPorcentagem.textContent = dado["%"];
        tr.appendChild(tdPorcentagem);


        corpo_tabela.appendChild(tr); // especifica que tr é filha do corpo da tabela
    })
})