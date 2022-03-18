
let intro = document.querySelector(".intro");
let logo = document.querySelector(".logo-intro");
let logoSpan = document.querySelectorAll(".pokeball");

/*Nesse caso o window é pq vai sair da área da tela?*/ /*O que seria esse DOMContentLoaded?*/

window.addEventListener("DOMContentLoaded", ()=>{

/*Se quiser dar uma clareado sobre esse setTimeout eu aceito também kkkkk */

    setTimeout(() => {

        /*Aqui esse idx é uma tag ou um nome que ele inventou?*/ 
        logoSpan.forEach((span, idx)=>{
        setTimeout(() => {

            span.classList.add("active");  

        }, (idx + 1) * 400)
        });

        setTimeout((span, idx) => {

            logoSpan.forEach((span, idx)=>{

                setTimeout(() => {
                    
                /*classList é tipo um addEventListener?*/
                span.classList.remove("active");
                span.classList.add("fade");

                    
        }, (idx + 1) * 50); /*Não entendi esses números*/

        });
        },2000);/*Não entendi esses números*/

        setTimeout(() => {

            intro.style.top ="-100vh"

        },2300);
    });
});