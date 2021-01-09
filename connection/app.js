document.getElementById('btn1').addEventListener('click', loadData);
document.getElementById('btn2').addEventListener('click', login);
function loadData() {
    // Create an XHR Object
    const xhr = new XMLHttpRequest();
 
    // OPEN
    xhr.open('POST', 'http://127.0.0.1:8000/', true);
 
    xhr.onload = function () {
        if (this.status === 200) {
            const customer = JSON.parse(this.responseText);
 
            const output = `
          <ul>
            <li>ID: ${customer.value.joke}</li>
          </ul>
        `;
            document.getElementById('output').innerHTML = output;
        }
        
    }
 
    xhr.send();
 
}
async function submitForm(e,form){
  e.preventDefault();
  const btnSubmit = document.getElementById('btnSubmit');
  btnSubmit.disabled = true;
  setTimeout(() => btnSubmit.disabled = false ,2000);
  const jsonFormData = buildJsonFormData
}
const sampleForm = document.querySelector('#sampleForm')
if(sampleForm){
  sampleForm.addEventListener("submit",function(e){
    submitForm(e,this);
  });
}
function register() {
  fetch('http://127.0.0.1:8000/api/register', {
    method: 'post',
    headers: {
      'Accept': 'application/json, text/plain, */*',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      "name":"Hesam",
      "email": "hesam@gmail.com",
      "mobile":"09123456789",
      "password": "123456",
      "password_confirmation":"123456"
  })
  }).then(res=>res.json())
    .then(res => console.log(res));
}
function login() {
  fetch('http://127.0.0.1:8000/api/login', {
    method: 'post',
    headers: {
      'Accept': 'application/json, text/plain, */*',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      "mobile": "09120245821",
      "password": "123456"
  })
  }).then(res=>res.json())
    .then(res => console.log(res));
}