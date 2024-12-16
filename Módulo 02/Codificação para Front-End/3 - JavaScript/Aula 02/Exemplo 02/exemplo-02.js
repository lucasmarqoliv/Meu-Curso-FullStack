function interruptor(){
    let elemento = document.getElementById("luz")

    if(elemento.src.includes("pic_bulboff.gif")){
        elemento.src = "pic_bulbon.gif"
    }else{
        elemento.src = "pic_bulboff.gif"
    }
}
