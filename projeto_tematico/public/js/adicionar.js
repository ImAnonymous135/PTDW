

let selectTipo = document.getElementById("selectTipo");
selectTipo.addEventListener("change", function (event) {
    let quimico = document.querySelector(".quimico");
    let quimico1 = document.querySelector(".quimico1");
    let quimico2 = document.querySelector(".quimico2");
    let quimico3 = document.querySelector(".quimico3");
    let quimico4 = document.querySelector(".quimico4");
    let quimico5 = document.querySelector(".quimico5");
    let quimico7 = document.querySelector(".quimico7");
    let quimico8 = document.querySelector(".quimico8");
    let quimico9 = document.querySelector(".quimico9");
    let quimico10 = document.querySelector(".quimico10");

    let naoQuimico = document.querySelector(".naoQuimico");
    let naoQuimico1 = document.querySelector(".naoQuimico1");

    if (selectTipo.value == 0) {
        quimico.style.display = "block";
        quimico1.style.display = "block";
        quimico2.style.display = "block";
        quimico3.style.display = "block";
        quimico4.style.display = "block";
        quimico5.style.display = "block";
        quimico7.style.display = "block";
        quimico8.style.display = "block";
        quimico9.style.display = "block";
        quimico10.style.display = "block";

        naoQuimico.style.display = "none";
        naoQuimico1.style.display = "none";

    } else {
        quimico.style.display = "none";
        quimico1.style.display = "none";
        quimico2.style.display = "none";
        quimico3.style.display = "none";
        quimico4.style.display = "none";
        quimico5.style.display = "none";
        quimico7.style.display = "none";
        quimico8.style.display = "none";
        quimico9.style.display = "none";
        quimico10.style.display = "none";

        naoQuimico.style.display = "block";
        naoQuimico1.style.display = "block";

    }

})
