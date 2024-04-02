const btnsAddPizza = document.querySelectorAll(".card-area__button-add");
console.log(btnsAddPizza);

const modal = document.querySelector('.bkg-modal');

const cancelmodal = document.querySelector('.btn__red-btn');

for (let i = 0; i < btnsAddPizza.length; i++) {
    btnsAddPizza[i].addEventListener('click', ()=> {
        //abrirModal();
        console.log("Clicaro no botaum");
        modal.classList.add("bkg-modal--ativo");
    })
}

cancelmodal.addEventListener('click', ()=> {
    console.log("botão clicado");
    modal.classList.remove("bkg-modal--ativo");
})

//--------------------------------------------------------------------------

const menos = document.querySelector('.modal__btn-remove');
const mais = document.querySelector('.modal__btn-add');
const valor = document.getElementById('valorao').innerHTML;


menos.addEventListener('click', ()=> {
    console.log(valor);
    if (valor == 0) {
        
    } else{
    valor.innerHTML = valor.innerHTML - 1;
    }
})
mais.addEventListener('click', ()=> {
    console.log(valor.innerHTML);
    valor.innerHTML = valor.innerHTML + 1;
})

