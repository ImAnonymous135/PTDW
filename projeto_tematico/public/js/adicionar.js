

let selectEscolha = document.getElementById("selectEscolha");
selectEscolha.addEventListener("change", function(event) {
    let quimico = document.querySelector(".quimico");
    let quimico1 = document.querySelector(".quimico1");
    console.log(quimico);
    let naoQuimico = document.querySelector(".naoQuimico");
    let naoQuimico1 = document.querySelector(".naoQuimico1");
    console.log(naoQuimico);
    if(selectEscolha.value == 0){
        quimico.style.display="block";
        quimico1.style.display="block";
        naoQuimico.style.display="none";
        naoQuimico1.style.display="none";
    }else{
        quimico.style.display="none";
        quimico1.style.display="none";
        naoQuimico.style.display="block";
        naoQuimico1.style.display="block";
    }
    
    })