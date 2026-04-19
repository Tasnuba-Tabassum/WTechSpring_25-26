const unitPrice = 1000;
const days = 30;

let quantityInput = document.getElementById("quantity");
let totalPriceBox = document.getElementById("totalprice");

quantityInput.addEventListener("input", function()
{
    let quantity = Number(quantityInput.value);
    if(quantity < 0)
        {
            document.getElementById("QuantityError").innerHTML="Quantity can not be less than 0";
            quantityInput.value = 0;
            quantity=0;
        }
    let total = unitPrice * quantity * days;
    totalPriceBox.value = total;
    if(total > 1000)
        {
            alert("You are eligible for a gift coupon!");
        }

});