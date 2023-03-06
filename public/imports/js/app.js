
// Initialisation du panier
document.querySelector('#amountSeg').textContent = 0 ;
document.querySelector('#amountDeliver').textContent = 0 ;
document.querySelector('#amountNiu').textContent = 0 ;
document.getElementById('total').textContent = 0;

const idInput = document.getElementsByName('hasUniqueIdNumber');
const deliverInput = document.getElementsByName('hasDelivery');
const segmentInput = document.querySelector('#segment');
const cityInput = document.querySelector('#citydelivery');

const deliveryAddressInput = document.querySelector('#deliveryDiv');


for(let i = 0; i < idInput.length; i++){
    idInput[i].addEventListener('change', updateID);
}

for(let i = 0; i < idInput.length; i++){
    deliverInput[i].addEventListener('change', updateDeliver);
}


segmentInput.addEventListener('change', updateSegment);
cityInput.addEventListener('change', updateDeliveryPrice);

let total = 0;
let segment = 0;
let livraison = 0;

const TotalValue = document.getElementById('total');

// Initialisation du panier
document.querySelector('#amountSeg').textContent = 0 ;
document.querySelector('#amountDeliver').textContent = 0 ;
document.querySelector('#amountNiu').textContent = 0 ;




function updateID() {

    for(let i = 0; i < idInput.length; i++){
        if(idInput[i].checked){
            niuInputValue = idInput[i].value;
        }
    }

    if(niuInputValue == 'oui' ){
        document.querySelector('#amountNiu').textContent = 3000 ;
    }else{
        document.querySelector('#amountNiu').textContent = 0 ;
    }

    total = parseInt(document.querySelector('#amountNiu').textContent) + parseInt(document.querySelector('#amountDeliver').textContent) + parseInt(document.querySelector('#amountSeg').textContent);
    TotalValue.textContent = total;

}

function updateDeliver() {

    for(let i = 0; i < deliverInput.length; i++){
        if(deliverInput[i].checked){
            deliverInputValue = deliverInput[i].value;
        }
    }

    if(deliverInputValue == 'oui' ){
        document.querySelector('#amountDeliver').textContent = 1000 ;
        deliveryAddressInput.style.display = "block";
    }else{
        document.querySelector('#amountDeliver').textContent = 0 ;
        // element.remove();
        deliveryAddressInput.style.display = "none";
    }

    total = parseInt(document.querySelector('#amountNiu').textContent) + parseInt(document.querySelector('#amountDeliver').textContent) + parseInt(document.querySelector('#amountSeg').textContent);
    TotalValue.textContent = total;

}

function updateSegment() {
    if(segmentInput.value == 1 ){
        document.querySelector('#amountSeg').textContent = 12500 ;
    }
    if(segmentInput.value == 2 ){
        document.querySelector('#amountSeg').textContent = 17500 ;
    }
    if(segmentInput.value == 3 ){
        document.querySelector('#amountSeg').textContent = 30000 ;
    }
    total = parseInt(document.querySelector('#amountNiu').textContent) + parseInt(document.querySelector('#amountDeliver').textContent) + parseInt(document.querySelector('#amountSeg').textContent);
    TotalValue.textContent = total;

}


function updateDeliveryPrice() {

    for(let i = 0; i < deliverInput.length; i++){
        if(deliverInput[i].checked){
            deliverInputValue = deliverInput[i].value;
        }
    }

    if(deliverInputValue == 'oui' ){
        if(cityInput.value == 'autres' ){
            document.querySelector('#amountDeliver').textContent = 2000 ;
        }else{
            document.querySelector('#amountDeliver').textContent = 1000 ;
        }
    }else{
        document.querySelector('#amountDeliver').textContent = 0 ;
    }

    total = parseInt(document.querySelector('#amountNiu').textContent) + parseInt(document.querySelector('#amountDeliver').textContent) + parseInt(document.querySelector('#amountSeg').textContent);
    TotalValue.textContent = total;
}


// document.querySelector('#total').textContent = total;
TotalValue.textContent = total;