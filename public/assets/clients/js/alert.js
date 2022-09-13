const close = document.getElementById('close')
const alert = document.querySelector('.alert-error')

close.addEventListener('click', () => {
    alert.style.display = "none";
})