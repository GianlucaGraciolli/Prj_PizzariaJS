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
let valor = parseFloat(document.getElementById('valorao').innerHTML);


menos.addEventListener('click', ()=> {
    if (valor == 1) {
        
    } else{
        valor = valor - 1;
        document.getElementById('valorao').innerHTML = valor;
        console.log(valor);
    }
})
mais.addEventListener('click', ()=> {
    valor = valor + 1;
    document.getElementById('valorao').innerHTML = valor;
    console.log(valor);
})

//--------------------------------------------------------------------------

const modalS = document.querySelector('.modal__hover-small');
const modalM = document.querySelector('.modal__hover-medium');
const modalL = document.querySelector('.modal__hover-large');

modalS.addEventListener('click', ()=> {
    console.log(modalS);
    modalS.classList.add('modal__hover--selected');
    modalM.classList.remove('modal__hover--selected');
    modalL.classList.remove('modal__hover--selected');
})
modalM.addEventListener('click', ()=> {
    console.log(modalM);
    modalM.classList.add('modal__hover--selected');
    modalS.classList.remove('modal__hover--selected');
    modalL.classList.remove('modal__hover--selected');
})
modalL.addEventListener('click', ()=> {
    console.log(modalL);
    modalL.classList.add('modal__hover--selected');
    modalS.classList.remove('modal__hover--selected');
    modalM.classList.remove('modal__hover--selected');
})

//--------------------------------------------------------------------------

const  btnAddToKart = document.querySelector('#modal__btn-add-pizza');
const btnCloseKart = document.querySelector('#shopcart-area-btn--close');
function fecharModal(){
    const modal = document.querySelector('.bkg-modal');
    modal.classList.remove('bkg-modal--ativo');
}

function abrirCarrinho(){
    const carrinho = document.querySelector('.shopcart-area');
    carrinho.classList.add('shopcart-area--active');
}

function fecharCarrinho(){
    const carrinho = document.querySelector('.shopcart-area');
    carrinho.classList.remove('shopcart-area--active');
}
btnAddToKart.addEventListener('click', ()=> {
    fecharModal();
    abrirCarrinho();
})

btnCloseKart.addEventListener('click', ()=> {
    fecharCarrinho();
    console.log(btnCloseKart);
})

