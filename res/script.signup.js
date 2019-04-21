const registerBT = document.querySelector('#register-bt')

const error = document.querySelector('#error_box');
let email = document.querySelector('#email')
let user = document.querySelector('#username')
let pass = document.querySelector('#pass')
let cpass = document.querySelector('#cpass')


registerBT.addEventListener('click', validateInput)

function validateInput(e) {
    e.preventDefault()
    if(user.value == '') {
        error.innerHTML = 'Please Provide Username'
    } else if(email.value == ''){
        error.innerHTML = 'Please Provide Email'
    } else if(pass.value == ''){
        error.innerHTML = 'Please Enter Password'
    } else if(user.value == ''){
        error.innerHTML = 'Please Confirm Your Password'
    } else {
        error.innerHTML = ''
        document.querySelector('form').submit();
    }
    
}
