// Hiển thị tên tháng năm
const monthEle = document.querySelector('.month');
const yearEle = document.querySelector('.year');

var currentMonth = new Date().getMonth();
var currentYear = new Date().getFullYear();

monthEle.innerText = currentMonth + 1;
yearEle.innerText = currentYear;


// chuyển tháng
const btn_prev = document.getElementById('prev');
const btn_next = document.getElementById('next');
var dateEle = document.getElementById('days');

renderDate(currentYear, currentMonth)
btn_prev.addEventListener("click", () => {
    // xóa ngày của tháng trước
    // có thể sử dụng e.firstElementChild
    let child = dateEle.lastElementChild;

    // loop cho đến khi child không tồn tại thì dừng lại
    while (child) {
        // xóa child
        dateEle.removeChild(child);

        // gán child bằng phần tử con cuối cùng mới
        child = dateEle.lastElementChild;
    }

    // hiện ngày của tháng hiện tại
    currentMonth = currentMonth - 1
    console.log(currentMonth)
    if ((currentMonth) < 0) {
        currentMonth = 11
        console.log(currentMonth)
        currentYear = currentYear - 1
    }
    monthEle.innerText = currentMonth + 1;
    yearEle.innerText = currentYear;
    renderDate(currentYear, currentMonth);

})

btn_next.addEventListener("click", () => {
    // xóa ngày của tháng trước
    // có thể sử dụng e.firstElementChild
    let child = dateEle.lastElementChild;

    // loop cho đến khi child không tồn tại thì dừng lại
    while (child) {
        // xóa child
        dateEle.removeChild(child);

        // gán child bằng phần tử con cuối cùng mới
        child = dateEle.lastElementChild;
    }

    // hiện ngày của tháng hiện tại
    currentMonth = currentMonth + 1

    if ((currentMonth) > 11) {
        currentMonth = 0
        currentYear = currentYear + 1
    }
    monthEle.innerText = currentMonth + 1;
    yearEle.innerText = currentYear;
    renderDate(currentYear, currentMonth);
})

// Lấy số ngày của 1 tháng
function getDaysInMonth(y, m) {
    d = new Date(y, m + 1, 0)
    return d.getDate();
}

// Lấy ngày bắt đầu của tháng
function getStartDayInMonth(y, m) {
    d = new Date(y, m, 1)
    return d.getDay();
}

// Hiển thị ngày trong tháng lên trên giao diện
function renderDate(y, m) {
    let daysInMonth = getDaysInMonth(y, m);
    let daysStart = getStartDayInMonth(y, m);

    for (var s = 0; s < daysStart; s++) {
        dateEle.innerHTML += `<li></li>`
    }

    for (var i = 0; i < daysInMonth; i++) {
        dateEle.innerHTML += `<li id="day${i}">${i + 1}</li>`;
    }
}


// hiển thị lịch
const btn_calendar = document.getElementById('btn-calendar')
const calendar = document.getElementById('calendar')

let click = 0

btn_calendar.addEventListener("click", () => {
    click += 1
    if (click % 2 == 1) {
        calendar.style.display = "block"
    }
    if (click % 2 == 0) {
        calendar.style.display = "none"
        click = 0
    }
})