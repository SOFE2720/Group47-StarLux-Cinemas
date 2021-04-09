//Calculates the price that is to be paid for the tickets

var a = JSON.parse(localStorage.getItem('selectedSeats'));

function total(){
    var theatreLocation = document.getElementById('theatreLocation').value;
    // price = (getNumOfTickets('generalS') * 14.99) + (getNumOfTickets('seniorS') * 9.99) + (getNumOfTickets('childS') * 8.99) + (getNumOfTickets('general3') * 19.99) + (getNumOfTickets('senior3') * 14.99) + (getNumOfTickets('child3') * 13.99) + (getNumOfTickets('generalI') * 24.99) + (getNumOfTickets('seniorI') * 19.99) + (getNumOfTickets('childI') * 18.99);
    
    // if (location == 'Markham' || 'Brampton'){
    //     price += (getNumOfTickets('generalD') * 29.99) + (getNumOfTickets('seniorD') * 24.99) + (getNumOfTickets('childD') * 23.99);
    // }
    // if (location == 'North York'){
    //     price += (getNumOfTickets('generalA') * 32.99) + (getNumOfTickets('seniorA') * 27.99) + (getNumOfTickets('childA') * 26.99);
    // }
    // if (location != 'North York'){
    //     price += (getNumOfTickets('generalAX') * 34.99) + (getNumOfTickets('seniorAX') * 29.99) + (getNumOfTickets('childAX') * 28.99);
    // }

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
    console.log(theatreLocation);
}

// function Btotal(){

//     var price = 0;
//     var msg = 0;

//     price = (standardG() * 14.99) + (seniorG() * 9.99) + (childG() * 8.99) + (standard3d() * 19.99) + (senior3d() * 14.99) + (child3d() * 13.99) + (standardIMAX() * 24.99) + (seniorIMAX() * 19.99) + (childIMAX() * 18.99) + (standardDBOX() * 29.99) + (seniorDBOX() * 24.99) + (childDBOX() * 23.99) + (standardAVX() * 32.99) + (seniorAVX() * 27.99) + (childAVX() * 26.99);

//     if((standardG() + seniorG() + childG() + standard3d() + senior3d() + child3d() + standardIMAX() + seniorIMAX() + childIMAX() + standardDBOX() + seniorDBOX() + childDBOX() + standardAVX() + seniorAVX() + childAVX()) > a.length){

//         alert ("You must choose exactly " + a.length + " ticket(s)");

//     }else{
//         var ST = document.getElementById("subtotal");
//         ST.innerHTML = "$" + price.toFixed(2);

//         var tax = price * 0.13;
//         var T = document.getElementById("tax");
//         T.innerHTML = "$" + tax.toFixed(2);

//         var total = price * 1.13;
//         var t = document.getElementById("total");
//         t.innerHTML = "$" + total.toFixed(2);

//         localStorage.clear();
//     }

// }

// function NYtotal(){

//     var price = 0;
//     var msg = 0;

//     price = (standardG() * 14.99) + (seniorG() * 9.99) + (childG() * 8.99) + (standard3d() * 19.99) + (senior3d() * 14.99) + (child3d() * 13.99) + (standardIMAX() * 24.99) + (seniorIMAX() * 19.99) + (childIMAX() * 18.99) + (standardATMOS() * 34.99) + (seniorATMOS() * 29.99) + (childATMOS() * 28.99);

//     if (price == 0){

//         alert ("You must purchase at least one ticket!");

//     }else if((standardG() + seniorG() + childG() + standard3d() + senior3d() + child3d() + standardIMAX() + seniorIMAX() + childIMAX() + standardATMOS() + seniorATMOS() + childATMOS()) > a.length){

//         alert ("You must choose exactly " + a.length + " ticket(s)");

//     }else{
//         var ST = document.getElementById("subtotal");
//         ST.innerHTML = "$" + price.toFixed(2);

//         var tax = price * 0.13;
//         var T = document.getElementById("tax");
//         T.innerHTML = "$" + tax.toFixed(2);

//         var total = price * 1.13;
//         var t = document.getElementById("total");
//         t.innerHTML = "$" + total.toFixed(2);

//         localStorage.clear();
//     }

// }

// function Mtotal(){

//     var price = 0;
//     var msg = 0;

//     price = (standardG() * 14.99) + (seniorG() * 9.99) + (childG() * 8.99) + (standard3d() * 19.99) + (senior3d() * 14.99) + (child3d() * 13.99) + (standardIMAX() * 24.99) + (seniorIMAX() * 19.99) + (childIMAX() * 18.99) + (standardAVX() * 32.99) + (seniorAVX() * 27.99) + (childAVX() * 26.99);

//     if (price == 0){

//         alert ("You must purchase at least one ticket!");

//     }else if((standardG() + seniorG() + childG() + standard3d() + senior3d() + child3d() + standardIMAX() + seniorIMAX() + childIMAX() + standardAVX() + seniorAVX() + childAVX()) > a.length){

//         alert ("You must choose exactly " + a.length + " ticket(s)");

//     }else{
        
//     var ST = document.getElementById("subtotal");
//     ST.innerHTML = "$" + price.toFixed(2);

//     var tax = price * 0.13;
//     var T = document.getElementById("tax");
//     T.innerHTML = "$" + tax.toFixed(2);

//     var total = price * 1.13;
//     var t = document.getElementById("total");
//     t.innerHTML = "$" + total.toFixed(2);

//     localStorage.clear();
    

//     }

// }


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
    if (generalS.value !="")
    {
        return parseFloat(SG.value);
    }
    else{
        return 0;
    }   
}

// function standardG(){
//     var SG = document.forms["ticketform"].elements["generalS"];
//     if (generalS.value !="")
//     {
//         return parseFloat(SG.value);
//     }
//     else{
//         return 0;
//     }
// }

// function seniorG(){
//     var SG = document.forms["ticketform"].elements["seniorS"];

//     if (seniorS.value !="")
//     {
//         return parseFloat(SG.value);
//     }
//     else{
//         return 0;
//     }
// }

// function childG(){
//     var SG = document.forms["ticketform"].elements["childS"];

//     if (childS.value !="")
//     {
//         return parseFloat(SG.value);
//     }
//     else{
//         return 0;
//     }
// }

// function standard3d(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["general3"];

//     var n = 0;

//     if (general3.value !="")
//     {
//         n = parseFloat(general3.value);
//     }

//     return n;

// }

// function senior3d(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["senior3"];

//     var n = 0;

//     if (senior3.value !="")
//     {
//         n = parseFloat(senior3.value);
//     }

//     return n;

// }

// function child3d(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["child3"];

//     var n = 0;

//     if (child3.value !="")
//     {
//         n = parseFloat(child3.value);
//     }

//     return n;

// }

// function standardIMAX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["generalI"];

//     var n = 0;

//     if (generalI.value !="")
//     {
//         n = parseFloat(generalI.value);
//     }

//     return n;

// }

// function seniorIMAX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["seniorI"];

//     var n = 0;

//     if (seniorI.value !="")
//     {
//         n = parseFloat(seniorI.value);
//     }

//     return n;

// }

// function childIMAX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["childI"];

//     var n = 0;

//     if (childI.value !="")
//     {
//         n = parseFloat(childI.value);
//     }

//     return n;

// }

// function standardDBOX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["generalD"];

//     var n = 0;

//     if (generalD.value !="")
//     {
//         n = parseFloat(generalD.value);
//     }

//     return n;

// }

// function seniorDBOX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["seniorD"];

//     var n = 0;

//     if (seniorD.value !="")
//     {
//         n = parseFloat(seniorD.value);
//     }

//     return n;

// }

// function childDBOX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["childD"];

//     var n = 0;

//     if (childD.value !="")
//     {
//         n = parseFloat(childD.value);
//     }

//     return n;

// }

// function standardATMOS(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["generalA"];

//     var n = 0;

//     if (generalA.value !="")
//     {
//         n = parseFloat(generalA.value);
//     }

//     return n;

// }

// function seniorATMOS(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["seniorA"];

//     var n = 0;

//     if (seniorA.value !="")
//     {
//         n = parseFloat(seniorA.value);
//     }

//     return n;

// }

// function childATMOS(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["childA"];

//     var n = 0;

//     if (childA.value !="")
//     {
//         n = parseFloat(childA.value);
//     }

//     return n;

// }

// function standardAVX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["generalAX"];

//     var n = 0;

//     if (generalAX.value !="")
//     {
//         n = parseFloat(generalAX.value);
//     }

//     return n;

// }

// function seniorAVX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["seniorAX"];

//     var n = 0;

//     if (seniorAX.value !="")
//     {
//         n = parseFloat(seniorAX.value);
//     }

//     return n;

// }

// function childAVX(){

//     var form = document.forms["ticketform"];
//     var SG = form.elements["childAX"];

//     var n = 0;

//     if (childAX.value !="")
//     {
//         n = parseFloat(childAX.value);
//     }

//     return n;

// }