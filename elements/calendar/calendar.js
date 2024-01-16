let nowDate = new Date(),
    nowDateNumber = nowDate.getDate(),
    nowMonth = nowDate.getMonth(),
    nowYear = nowDate.getFullYear(),
    container = document.getElementById('month-calendar'),
    monthContainer = container.getElementsByClassName('month-name')[0],
    yearContainer = container.getElementsByClassName('year-name')[0],
    daysContainer = container.getElementsByClassName('days')[0],
    prev = container.getElementsByClassName('prev')[0],
    next = container.getElementsByClassName('next')[0],
    monthName = ['январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];


let curDate = nowDate.setMonth(nowDate.getMonth() - 1);
console.log(nowDate.getFullYear());

// закрашивание
function setHollydays(){
    let q = 1;
    let m = 0;
    let arr = daysContainer.getElementsByTagName("li");
    if(arr.length > 0) {
        for (let i = 0; i < arr.length; i++) {
            if ((arr[i].textContent == 1 || arr[i].textContent == 9 || (arr[i + 1].textContent == 9 && i == 7)) && monthContainer.textContent == "май") {
                arr[i].style = "color: red";
            }
            if ((i + 1) % 6 == 0) {
                arr[i + m].style = "color: red";
                arr[i + m + 1].style = "color: red";
                m++;
            }
            if (arr[i].textContent == 13 && (arr[i - 5].textContent == 8 && arr[i - 4].textContent == 9 && monthContainer.textContent == "май")) {
                arr[i].style = "color: #999";
            }

        }
    }
}

setHollydays();

function setMonthCalendar(year,month) {

    let monthDays = new Date(year, month + 1, 0).getDate(),
        monthPrefix = new Date(year, month, 0).getDay(),
        monthDaysText = '';

    monthContainer.textContent = monthName[month];
    yearContainer.textContent = year;
    daysContainer.innerHTML = '';

    if (monthPrefix > 0){
        for (let i = 1  ; i <= monthPrefix; i++){
            monthDaysText += '<li></li>';
        }
    }

    for (let i = 1; i <= monthDays; i++){
        monthDaysText += '<li>' + i + '</li>';
    }

    daysContainer.innerHTML = monthDaysText;


    if (month == nowMonth && year == nowYear){
        days = daysContainer.getElementsByTagName('li');
        days[monthPrefix + nowDateNumber - 1].classList.add('date-now');
    }

}

setMonthCalendar(nowYear,nowMonth);

prev.onclick = function () {

    let curDate = new Date(yearContainer.textContent,monthName.indexOf(monthContainer.textContent));

    curDate.setMonth(curDate.getMonth() - 1);

    let curYear = curDate.getFullYear(),
        curMonth = curDate.getMonth();

    setMonthCalendar(curYear,curMonth);
    setHollydays();
}

next.onclick = function () {
    let curDate = new Date(yearContainer.textContent,monthName.indexOf(monthContainer.textContent));

    curDate.setMonth(curDate.getMonth() + 1);

    let curYear = curDate.getFullYear(),
        curMonth = curDate.getMonth();

    setMonthCalendar(curYear,curMonth);
    setHollydays();
}
