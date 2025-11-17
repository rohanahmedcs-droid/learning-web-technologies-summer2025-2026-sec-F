// Function to save name field data into localStorage
function saveName() {
    localStorage.setItem("name", document.getElementById("name").value);
    window.location.href = "email.html"; // Move to the next page
}

// Function to save email field data into localStorage
if(localStorage.getItem("email")) {
    document.getElementById("email").value = localStorage.getItem("email");
}

function saveEmail() {
    localStorage.setItem("email", document.getElementById("email").value);
    window.location.href = "gender.html"; // Move to the next page
}

// Function to save gender field data into localStorage
if(localStorage.getItem("gender")) {
    document.getElementById(localStorage.getItem("gender")).checked = true;
}

function saveGender() {
    let gender = document.querySelector('input[name="gender"]:checked').value;
    localStorage.setItem("gender", gender);
    window.location.href = "dob.html"; // Move to the next page
}

// Function to save date of birth data into localStorage
if(localStorage.getItem("dob")) {
    document.getElementById("dob").value = localStorage.getItem("dob");
}

function saveDOB() {
    localStorage.setItem("dob", document.getElementById("dob").value);
    window.location.href = "bloodgroup.html"; // Move to the next page
}

// Function to save blood group field data into localStorage
if(localStorage.getItem("bloodGroup")) {
    document.getElementById("bloodGroup").value = localStorage.getItem("bloodGroup");
}

function saveBloodGroup() {
    localStorage.setItem("bloodGroup", document.getElementById("bloodGroup").value);
    window.location.href = "degree.html"; // Move to the next page
}

// Function to save degree field data into localStorage
if(localStorage.getItem("degree")) {
    let storedDegrees = JSON.parse(localStorage.getItem("degree"));
    storedDegrees.forEach(degree => {
        document.getElementById(degree).checked = true;
    });
}

function saveDegree() {
    let degreeSelected = [];
    let checkboxes = document.getElementsByName("degree");
    checkboxes.forEach(checkbox => {
        if(checkbox.checked) degreeSelected.push(checkbox.value);
    });
    localStorage.setItem("degree", JSON.stringify(degreeSelected));
    window.location.href = "photo.html"; // Move to the next page
}

// Function to save photo field data into localStorage
if(localStorage.getItem("photo")) {
    document.getElementById("photo").value = localStorage.getItem("photo");
}

function savePhoto() {
    localStorage.setItem("photo", document.getElementById("photo").value);
    window.location.href = "summary.html"; // Move to the next page
}

// On the summary page, retrieve all stored data and display it
if (document.getElementById("summaryName")) {
    document.getElementById("summaryName").innerText = localStorage.getItem("name");
    document.getElementById("summaryEmail").innerText = localStorage.getItem("email");
    document.getElementById("summaryGender").innerText = localStorage.getItem("gender");
    document.getElementById("summaryDob").innerText = localStorage.getItem("dob");
    document.getElementById("summaryBloodGroup").innerText = localStorage.getItem("bloodGroup");
    document.getElementById("summaryDegree").innerText = localStorage.getItem("degree");
    document.getElementById("summaryPhoto").innerText = localStorage.getItem("photo");
}
