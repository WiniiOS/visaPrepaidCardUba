// console.log('aMORE');
const idInput = document.querySelector("#niu")
const DeliverInput = document.querySelector('#livraison');
const segmentInput = document.querySelector('#segment');
const cityInput = document.querySelector('#citydelivery');



idInput.addEventListener('change', updateID);
DeliverInput.addEventListener('change', updateDeliver);
segmentInput.addEventListener('change', updateSegment);
cityInput.addEventListener('change', updateDeliveryPrice);


console.log('Alert');

let total = 0;
let segment = 0;
let livraison = 0;

const TotalValue = document.getElementById('total');

// Initialisation du panier
document.querySelector('#amountSeg').textContent = 0 ;
document.querySelector('#amountDeliver').textContent = 0 ;
document.querySelector('#amountNiu').textContent = 0 ;




function updateID() {
    if(idInput.value !== null ){
        document.querySelector('#amountNiu').textContent = 3000 ;
    }else{
        document.querySelector('#amountNiu').textContent = 0 ;
    }

    total = parseInt(document.querySelector('#amountNiu').textContent) + parseInt(document.querySelector('#amountDeliver').textContent) + parseInt(document.querySelector('#amountSeg').textContent);
    TotalValue.textContent = total;

    idInput.addEventListener('change', updateID);

}

function updateDeliver() {
    if(DeliverInput.value !== null ){
        document.querySelector('#amountDeliver').textContent = 1000 ;
    }else{
        document.querySelector('#amountDeliver').textContent = 0 ;
    }
    total = parseInt(document.querySelector('#amountNiu').textContent) + parseInt(document.querySelector('#amountDeliver').textContent) + parseInt(document.querySelector('#amountSeg').textContent);
    TotalValue.textContent = total;

    DeliverInput.addEventListener('change', updateDeliver);

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
    if(cityInput.value == 'autres' ){
        document.querySelector('#amountDeliver').textContent = 2000 ;
    }else{
        document.querySelector('#amountDeliver').textContent = 1000 ;
    }
    total = parseInt(document.querySelector('#amountNiu').textContent) + parseInt(document.querySelector('#amountDeliver').textContent) + parseInt(document.querySelector('#amountSeg').textContent);
    TotalValue.textContent = total;
}


// document.querySelector('#total').textContent = total;
TotalValue.textContent = total;