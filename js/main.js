var login = document.getElementById("login");

login.onclick = function () {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "oluwaseun" && password == "oluwaseun") {
        alert("Login succesful");
        window.location = "home.html";
    } else {
        alert("Incorrect username or password");
    }
}

function printcontent(el) {
    var restorepage = document.body.innerHTML;
    var printContent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = restorepage;

}

// function addCell(){
//     var table = document.getElementById("tt");
//     var row = table.insertRow(table.rows.length);
//     var cell1 = row.insertCell(0);
//     var cell2 = row.insertCell(1);
//     var cell3 = row.insertCell(2);
//     var cell4 = row.insertCell(3);
//     var cell5 = row.insertCell(4);
//     var cell6 = row.insertCell(5);
//     var cell7 = row.insertCell(6);
//     var cell8 = row.insertCell(7);
//     var cell9 = row.insertCell(8);
//     var cell10 = row.insertCell(9);
//     var cell11 = row.insertCell(9);
//     cell1.innerHTML = "seun";
//     cell2.innerHTML = "Dami";
//     cell3.innerHTML = "seun";
//     cell4.innerHTML = "Dami";
//     cell5.innerHTML = "seun";
//     cell6.innerHTML = "Dami";
//     cell7.innerHTML = "seun";
//     cell8.innerHTML = "Dami";
//     cell9.innerHTML = "seun";
//     cell10.innerHTML = "Dami";
//     cell11.innerHTML = "seun";
// }

