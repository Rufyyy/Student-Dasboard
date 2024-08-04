<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
<title>Weekly Timetable</title>
<style>
Table {
Width: 100%;
Border-collapse: collapse;
}
Th, td {
Border: 1px solid #ddd;
Padding: 8px;
Text-align: center;
}
Button {
Margin-top: 20px;
Padding: 10px 20px;
Background-color: #007bff;
Color: #fff;
Border: none;
Cursor: pointer;
}
Button:hover {
Background-color: #0056b3;
}
</style>
</head>

<body>
<div class=”container”>
<h1>Class Timetable</h1>
<table id=”timetable”>
<tr>
<th>Day/Period</th>
<th>Period 1</th>
<th>Period 2</th>
<th>Period 3</th>
<th>Period 4</th>
<th>Period 5</th>
</tr>
</table>
<button onclick=”editTimetable()”>Edit Timetable</button>
<button onclick=”saveTimetable()”>Save Timetable</button>
</div>
<script>
Function editTimetable() {
Let timetable = document.getElementById(“timetable”);
Let days = [“Monday”, “Tuesday”, “Wednesday”, “Thursday”, “Friday”, “Saturday”];

Timetable.innerHTML = “”; // Clear existing timetable

For (let I = 0; I < days.length; i++) {
Let row = document.createElement(“tr”);
Row.innerHTML = `
<td>${days[i]}</td>
<td contenteditable=”true”>Class</td>
<td contenteditable=”true”>Class</td>

<td contenteditable=”true”>Class</td>
<td contenteditable=”true”>Class</td>
<td contenteditable=”true”>Class</td>
`;
Timetable.appendChild(row);
}
}

Function saveTimetable() {
Let timetable = document.getElementById(“timetable”);
Let data = [];

For (let I = 1; I < timetable.rows.length; i++) {
Let row = timetable.rows[i];
Let rowData = [];
For (let j = 1; j < row.cells.length; j++) {
rowData.push(row.cells[j].textContent.trim());
}
Data.push(rowData);
}

// Here, you can implement the functionality to save the data to a database or local storage
Console.log(“Timetable data:”, data);
Alert(“Timetable saved successfully!”);
}
</script>
</body>
</html>