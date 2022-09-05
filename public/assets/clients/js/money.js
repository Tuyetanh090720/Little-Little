const totalMoney = document.getElementById('totalMoney')
const money = document.getElementById('money')
const quantity = document.getElementById('quantity')


function ChangeQuantity(e) {
    quantity.value = Number(e.target.value)
    totalMoney.value = quantity.value * money.value

    console.log(totalMoney.value)

}