const userName = document.getElementsByName('userName')
const form = document.getElementsById('form')

form. addEventListener('submit', (e) =>{
if (userName.value ==='' || userName.value == null){
    alert("Name is required");
}

})