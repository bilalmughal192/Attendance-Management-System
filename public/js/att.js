function attDetail() {
    let st = document.querySelector(".stDate").value;
    let ed = document.querySelector(".edDate").value;
    let days = calculateDays(st, ed)+1;
    console.log(days);
    printAtt(st, days);
}

function printAtt(st, days) {
    let res = document.querySelector(".attData");
    res.innerHTML = "";
    res.innerHTML = `<table class=" attData table table-light mb-2">`;
    let start = new Date(st); // starting date
    if (days > 0) {
        res.innerHTML += ` <tr>
                    <th>Sr No.</th>
                    <th>Date & Day</th>
                    <th>Shift</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Time In Status</th>
                    <th>Worked Hours</th>
                    <th>Diffrence</th>
                    <th>Status</th>
                </tr>`;
        for (let i = 0; i <days; i++) {
            
            const formattedDate = start.toLocaleDateString("en-GB", {
                day: "2-digit",
                month: "short",
                year: "numeric",
                weekday: "short",
            });
            res.innerHTML += `<tr class="bgcGreen">
                    <td>${i+1}</td>
                    <td>${formattedDate}</td>
                    <td>Morning(08:00-14:59)</td>
                    <td>8:10 AM</td>
                    <td>3:00 PM</td>
                    <td>In Time</td>
                    <td>7:25</td>
                    <td>0:-10</td>
                    <td>Present</td>
                </tr>`;
                start.setDate(start.getDate() + 1);
        }
    }
}
