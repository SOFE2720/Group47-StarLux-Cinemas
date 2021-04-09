//Calculates the price that is to be paid for the tickets

var a = JSON.parse(localStorage.getItem('selectedSeats'));

function total(){
    var theatreLocation = document.getElementById('theatreLocation').value;
    price = (getNumOfTickets('generalS') * 14.99) + (getNumOfTickets('seniorS') * 9.99) + (getNumOfTickets('childS') * 8.99) + (getNumOfTickets('general3') * 19.99) + (getNumOfTickets('senior3') * 14.99) + (getNumOfTickets('child3') * 13.99) + (getNumOfTickets('generalI') * 24.99) + (getNumOfTickets('seniorI') * 19.99) + (getNumOfTickets('childI') * 18.99);
    
    if (theatreLocation == 'Markham' || theatreLocation == 'Brampton'){
        price += (getNumOfTickets('generalD') * 29.99) + (getNumOfTickets('seniorD') * 24.99) + (getNumOfTickets('childD') * 23.99);
    }
    if (theatreLocation == 'North York'){
        price += (getNumOfTickets('generalA') * 32.99) + (getNumOfTickets('seniorA') * 27.99) + (getNumOfTickets('childA') * 26.99);
    }
    if (theatreLocation != 'North York'){
        price += (getNumOfTickets('generalAX') * 34.99) + (getNumOfTickets('seniorAX') * 29.99) + (getNumOfTickets('childAX') * 28.99);
    }

    // if (getNumOfTickets('generalS') + getNumOfTickets('seniorS') + getNumOfTickets('childS') + getNumOfTickets('general3') + getNumOfTickets('senior3') + getNumOfTickets('child3') + getNumOfTickets('generalI') + getNumOfTickets('seniorI')  + getNumOfTickets('childI') + getNumOfTickets('generalD') + getNumOfTickets('seniorD') + getNumOfTickets('childD') + getNumOfTickets('generalA') + getNumOfTickets('seniorA') + getNumOfTickets('childA') + getNumOfTickets('generalAX') + getNumOfTickets('seniorAX') + getNumOfTickets('childAX') > a.length){
    //     alert ("You must choose exactly " + a.length + " ticket(s)");
    // }
    // else{
    //     var ST = document.getElementById("subtotal");
    //     ST.innerHTML = "$" + price.toFixed(2);

    //     var tax = price * 0.13;
    //     var T = document.getElementById("tax");
    //     T.innerHTML = "$" + tax.toFixed(2);

    //     var total = price * 1.13;
    //     var t = document.getElementById("total");
    //     t.innerHTML = "$" + total.toFixed(2);

    //     localStorage.clear();
    // }
    console.log(price);
}


// function Thanks(){
//     var total = document.getElementById('total').innerText;
//     //check if any inputs where made, if not then display a alert messsage
//     if (total == ""){
//         alert ("You didn't make a selection");
//     }
//     else{
//         var msg = document.getElementById("thanks");
//         msg.innerHTML = "Thank You for Purchasing Tickets from StarLux Cinemas. Enjoy Your Show!";
//     }
// }


function getNumOfTickets(idName){
    var SG = document.forms["ticketform"].elements[idName];
    if (SG.value !="")
    {
        return parseFloat(SG.value);
    }
    else{
        return 0;
    }   
}
