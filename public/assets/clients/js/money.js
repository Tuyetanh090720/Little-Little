var totalMoney = document.getElementById('totalMoney')
var money = document.getElementById('money')
var quantity = document.getElementById('quantity')
var package = document.getElementById('package-option')
var ticketTypeName = document.getElementById('ticketTypeName')

function ChangeQuantity(e) {
    quantity.value = Number(e.target.value)
    totalMoney.value = quantity.value * money.value
}