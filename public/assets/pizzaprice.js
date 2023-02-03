
//function price wise price
function updatePrice(id, value, price) {
    let newprice = 0.0;
    if (value == 'medium') {
        newprice = price
    } else if (value == 'large') {
        newprice = price * 1.2

    } else 
    {
        newprice = price * 0.8

    }
    document.getElementById(id).innerHTML = newprice.toFixed(2)
    document.getElementById("F"+id).value = newprice.toFixed(2)
}


//function add toppings 
function updatePrice(id, value, price) {
    let newprice = 0.0;


    if (value == 'medium') {
        newprice = price
    } else if (value == 'large') {
        newprice = price * 1.2

    } else {
        newprice = price * 0.8

    }
    document.getElementById(id).innerHTML = newprice.toFixed(2)
    document.getElementById("F" + id).value = newprice.toFixed(2)
}

function updatePriceTopping(id, value){
    let oldPriceStringWithEuro = document.getElementById(id).innerText;
    let oldPriceString =oldPriceStringWithEuro.substring(1, oldPriceStringWithEuro.length);
    // console.log(id, value, oldPriceStringWithEuro, oldPriceString);
    let newPrice = oldPriceString * 1.0;

    if (value == true){
        newPrice = newPrice + 1.0;
    } else {
        newPrice = newPrice - 1.0;
    }
    document.getElementById(id).innerHTML =  '€' + newPrice.toFixed(2);
    document.getElementById("F" + id).value = newPrice.toFixed(2)
}