
const btnClose = document.getElementById('closeme');
const frmError = document.getElementById('error');
const formFieldName = document.getElementById('name');
const formFieldEmail = document.getElementById('email');


if (document.body.contains(frmError)) {

    
    btnClose.addEventListener('click', closeMe);

   
    const seconds = 5;
    
}


function closeMe() {
    frmError.style.display = 'none';
}


firebase.auth().onAuthStateChanged((user) => {
    if (user) {
        formFieldName.value = user.displayName;
        formFieldEmail.value = user.email;
    }
});