function verificar(){
    let elemento = document.getElementById("titulo")

    if(elemento.textContent.toLowerCase().includes("o")){
        alert("Tem a letra O")
    }else{
        alert("Não tem a letra O")
    }
}