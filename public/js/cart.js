window.onload = function(){

    let quantity = document.getElementById("quantity")
    let error = document.getElementById("errorQuantity")
    let subtotal = document.getElementById('subtotal')
    let total = document.getElementById('total')
​
    if (quantity.value === "" || quantity.value === null)
    {
​
        error.innerHTML = "Por favor, seleccione la cantidad deseada"
        error.setAttribute("class","invalid-feedback" )
        quantity.setAttribute("class", "form-control is-invalid")
        quantity.addEventListener("change", change)
        return false;
    }
    
    total.innerText = subtotal.value * quantity
​
​
        function change(){
        error.innerHTML = ""
        error.setAttribute("class","" )
        name.setAttribute("class", "form-control")
        return
       }
}
Contraer
