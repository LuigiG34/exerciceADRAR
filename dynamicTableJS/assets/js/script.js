let button = document.getElementById("submit");
let tableBody = document.querySelector("tbody");
let table = document.querySelector("table");

button.addEventListener("click", () => {
    let name = document.getElementById("nom").value;
    let firstname = document.getElementById("prenom").value;
    let age = document.getElementById("age").value;
    createRow(name,firstname,age);
})

function createRow(nom = "Doe", prenom = "John", age = 22){
    let tableRow = document.createElement("tr");
    let tableNom = document.createElement("td");
    let tablePrenom = document.createElement("td");
    let tableAge = document.createElement("td");
    let tableDelete = document.createElement("td");
    let deleteBtn = document.createElement("button");

    tableBody.append(tableRow);

    tableNom.textContent = nom;
    tableRow.append(tableNom);

    tablePrenom.textContent = prenom;
    tableRow.append(tablePrenom);

    tableAge.textContent = age;
    tableRow.append(tableAge);

    tableRow.append(tableDelete);
    deleteBtn.textContent = "Delete";
    tableDelete.append(deleteBtn);

    deleteBtn.addEventListener("click", () => {
        tableRow.remove();
    })

}