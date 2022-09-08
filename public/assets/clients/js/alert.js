const close = document.getElementById('close')
const alert = document.querySelector('.alert')

close.addEventListener('click', () => {
    alert.style.display = "none";
})