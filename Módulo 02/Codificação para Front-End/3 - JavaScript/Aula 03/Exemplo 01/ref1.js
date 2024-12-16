function acionar(){
    let x = prompt("Digite o 1º número")
    let y = prompt("Digite o 2º número")

    if (x >= 0 && y >= 0){
        subtrair(x, y)
    }else{
        document.getElementById("t1").textContent = ""
    }
    
}

function subtrair(a, b){
    document.getElementById("t1").textContent = 
    a + " - " + b + " = " + (a-b);
}
