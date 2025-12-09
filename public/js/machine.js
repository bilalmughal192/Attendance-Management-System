function machineLog() {
    let st = document.querySelector(".stDate").value;
    let ed = document.querySelector(".edDate").value;
    let days = calculateDays(st, ed) + 1;
    printMachineLog(st, days);
}
function calculateDays(startDate, endDate) {
    let start = new Date(startDate);
    let end = new Date(endDate);
    let timeDifference = end - start;
    let daysDifference = timeDifference / (1000 * 3600 * 24);
    return daysDifference;
}
function printMachineLog(st, days) {
    let tab = document.querySelector(".machineData");
    tab.innerHTML = "";
    let start = new Date(st); // starting date
    for (let i = 0; i < days; i += 3) {
        let row = `<tr class="border-bottom">`;
        for (let j = 0; j < 3; j++) {
            if (i + j >= days) break;
            let currentDate = new Date(start);
            currentDate.setDate(start.getDate() + i + j);
            const formattedDate = currentDate.toLocaleDateString("en-GB", {
                day: "2-digit",
                month: "short",
                year: "numeric",
                weekday: "short",
            });
            row += `
                <td>
                    <p class="m-0 font-weight-bold">${formattedDate}</p>
                    <p class="m-0">Check In at 8:20 AM</p>
                    <p class="m-0">Check Out at 3:15 PM</p>
                </td>
            `;
        }
        row += `</tr>`;
        tab.innerHTML += row;
    }
}
