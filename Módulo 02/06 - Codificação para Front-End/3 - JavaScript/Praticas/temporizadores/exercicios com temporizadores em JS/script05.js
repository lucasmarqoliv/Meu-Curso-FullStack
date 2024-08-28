let segundos = 0;

setInterval(() =>{
    segundos = segundos + 1;
    document.getElementById('contador').textContent = segundos;
}, 1000);
