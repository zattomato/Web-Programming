// Selectors

const registerInput = document.querySelector('.register-btn');
const deleteInput = document.querySelector('#delete-btn');
const submitButton = document.querySelector('#submit-btn');
const closeButton = document.querySelector('#cancel-btn');
const regForm = document.querySelector(".reg-form");
//let indexNumValue = parseInt(document.querySelector('.index-num').innerText);
// const fname = document.querySelector('#name');
// const email = document.querySelector('#email');
// const phone = document.querySelector('#phone');
// const unit = document.querySelector('#unit');
// const indexNum = document.querySelector('.index-num');
//console.log(fname.value, email.value, phone.value, unit.value, indexNum.value);
// Event listeners
submitButton.addEventListener("click", add);
closeButton.addEventListener("click", closeForm);

//editInput.addEventListener("click", edit);



// Functions
//open forma
function openForm(){
    document.querySelector(".form-container").style.display = "flex";
}
//Close form
function closeForm(e) {
    e.preventDefault();
    document.querySelector(".form-container").style.display = "none";
  }
// Register new resident

function add(e) {
    e.preventDefault();
       const fnameValue = document.querySelector('#name');
       const emailValue = document.querySelector('#email');
       const phoneValue = document.querySelector('#phone');
       const unitValue = document.querySelector('#unit');
       
    
    const tableBody = document.querySelector(".residents-data");
    const tableRow = document.createElement('tr');
    const indexNum = document.createElement('td');
    const fName = document.createElement('td');
    fName.contentEditable = "true";
    const email = document.createElement('td');
    email.contentEditable = "true";
    const phone = document.createElement('td');
    phone.contentEditable = "true";
    const unit = document.createElement('td');
    unit.contentEditable = "true";
    const actionsBtn = document.createElement('td');
    fName.innerText =  fnameValue.value;
    email.innerText =  emailValue.value;
    unit.innerText =  unitValue.value;
    actionsBtn.innerHTML =  '<td></button> <button id="delete-btn" type="submit" onclick="deleteResident(this)"><i class="fas fa-trash-alt"></i></button></td>  ';
    phone.innerText =  phoneValue.value;
    tableRow.appendChild(indexNum);
    tableRow.appendChild(fName);
    tableRow.appendChild(phone);
    tableRow.appendChild(email);
    tableRow.appendChild(unit);
    tableRow.appendChild(actionsBtn);
    tableBody.appendChild(tableRow);
    closeForm(e);
    regForm.reset();
}

// Delete resident

function deleteResident(e) {
    let td = e.parentNode;
    let tr = td.parentNode;
    tr.parentNode.removeChild(tr);
}



