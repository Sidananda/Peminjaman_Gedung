const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function () {
    console.log(window.scrollY);
    if (window.scrollY > 1) {
        navbar.classList.replace('bg-transparent', 'nav-color')
    } else if (window.scrollY <= 0) {
        navbar.classList.replace('nav-color', 'bg-transparent')
    }
});

// calendar
document.addEventListener('DOMContentLoaded', function () {
    const currentMonth = document.getElementById('current-month');
    const calendarDates = document.getElementById('calendar-dates');

    const date = new Date();
    let currentYear = date.getFullYear();
    let currentMonthIndex = date.getMonth();

    const months = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    function renderCalendar(year, month) {
        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const lastDateOfMonth = new Date(year, month + 1, 0).getDate();

        calendarDates.innerHTML = '';

        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyDiv = document.createElement('div');
            calendarDates.appendChild(emptyDiv);
        }

        for (let i = 1; i <= lastDateOfMonth; i++) {
            const dateDiv = document.createElement('div');
            dateDiv.style.display = 'flex';
            dateDiv.style.justifyContent = 'center';
            dateDiv.style.alignItems = 'center';
            dateDiv.style.padding = '10px';
            dateDiv.style.borderRadius = '50%';
            dateDiv.style.cursor = 'pointer';
            dateDiv.textContent = i;
            dateDiv.classList.add('calendar-date');
            dateDiv.addEventListener('click', function () {
                dateDiv.classList.toggle('selected');
            });
            calendarDates.appendChild(dateDiv);
        }

        currentMonth.textContent = `${months[month]} ${year}`;
    }

    document.getElementById('prev-month').addEventListener('click', function () {
        if (currentMonthIndex === 0) {
            currentMonthIndex = 11;
            currentYear--;
        } else {
            currentMonthIndex--;
        }
        renderCalendar(currentYear, currentMonthIndex);
    });

    document.getElementById('next-month').addEventListener('click', function () {
        if (currentMonthIndex === 11) {
            currentMonthIndex = 0;
            currentYear++;
        } else {
            currentMonthIndex++;
        }
        renderCalendar(currentYear, currentMonthIndex);
    });

    renderCalendar(currentYear, currentMonthIndex);
});

// form peminjaman
function selectForm() {
    var formType = document.getElementById('formType').value;
    if (formType === 'civitas_unud') {
        document.getElementById('civitasForm').style.display = 'block';
        document.getElementById('umumForm').style.display = 'none';
    } else if (formType === 'umum') {
        document.getElementById('umumForm').style.display = 'block';
        document.getElementById('civitasForm').style.display = 'none';
    }
}
