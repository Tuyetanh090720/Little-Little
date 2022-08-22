const slides = document.getElementById('slide')
const leftBt = document.getElementById('left-arrow')
const rightBt = document.getElementById('right-arrow')


const div = document.querySelectorAll('#slide .pro-loop')

let i = 0

let interval = setInterval(run, 2000)

function run() {
    i++
    changeSlide()
}

function changeSlide() {
    if (i > div.length - 4) {
        i = 0
    } else if (i < 0) {
        i = div.length - 4
    }
    slides.style.transform = `translateX(${-i *25}%)`
}

function resetInterval() {
    clearInterval(interval)
    interval = setInterval(run, 2000)
}

rightBt.addEventListener('click', () => {
    i++

    changeSlide()
    resetInterval()
})


leftBt.addEventListener('click', () => {
    i--

    changeSlide()
    resetInterval()
})