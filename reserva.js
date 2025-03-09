const reservations = [];

function reserveLab() {
  const lab = document.getElementById("lab").value;
  const date = document.getElementById("date").value;
  const startTime = document.getElementById("startTime").value;
  const endTime = document.getElementById("endTime").value;
  const user = document.getElementById("user").value;

  // AquÃ­, en una aplicaciÃ³n real, deberÃ­as enviar estos datos a un servidor y almacenarlos en una base de datos.

  // En este ejemplo, simplemente agregamos la reserva al array y actualizamos la tabla.
  reservations.push({ lab, date, startTime, endTime, user });
  updateTable();
}

function updateTable() {
  const tableBody = document.querySelector("#reservationTable tbody");
  tableBody.innerHTML = ""; // Limpiamos la tabla

  for (const reservation of reservations) {
    const row = document.createElement("tr");
    const labCell = document.createElement("td");
    labCell.textContent = reservation.lab;
    const dateCell = document.createElement("td");
    dateCell.textContent = reservation.date;
    const startTimeCell = document.createElement("td");
    startTimeCell.textContent = reservation.startTime;
    const endTimeCell = document.createElement("td");
    endTimeCell.textContent = reservation.endTime;
    const userCell = document.createElement("td");
    userCell.textContent = reservation.user;

    row.appendChild(labCell);
    row.appendChild(dateCell);
    row.appendChild(startTimeCell);
    row.appendChild(endTimeCell);
    row.appendChild(userCell);

    tableBody.appendChild(row);
  }
}
