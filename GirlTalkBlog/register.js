let email = document.getElementById('email');
let phoneNumber = document.getElementById('phoneNumber');
let password = document.getElementById('password');
let retypePassword = document.getElementById('retypePassword');
let signInButton = document.getElementById('signInButton');

const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
    let message = [];
    if(email.value === '' || email.value === null) {
        message.push('*A Valid Email is required');
    }
    if(password.value === '' || password.value === null) {
        message.push('Password must be provided');
    }
    if (password.value.length <= 6) {
        message.push ('Password must be longer than 6 characters');
    }
    else if (password.value.length >= 20) {
        message.push ('Password must be less than 20 characters')
    }
    if(retypePassword.value === '' || retypePassword.value === null) {
        message.push('Retypepassword cannot be empty');
    }    
    else if(retypePassword.value !== password.value) {
        message.push ('Password must match');
    }
    if(message.length > 0) {
        e.preventDefault();
        errorElement.innerText = message.join(', ');
    } 
})



//ORIGINALLY WORKING ON;
// let isEmailValid = false;
// let isPhoneNumberValid = false;
// let isPasswordValid = false;
// let isRetypePasswordValid = false;


// email.addEventListener('change', (event) => {
//     let value = event.target.value;
//     isEmailValid = value.length > 7;

//     if (isEmailValid) {
//         document.getElementById('email-error').innerHTML = '';
//     } else {
//         document.getElementById('email-error').innerHTML = 'Invalid Email';
//     }

//     enableSignInButton();
// })


// phoneNumber.addEventListener('change', (event) => {
//     let value = event.target.value;
//     isPhoneNumberValid = value.length > 15;

//     if (isPhoneNumberValid) {
//         document.getElementById('phonenumber-error').innerHTML = '';
//     } else {
//         document.getElementById('phonenumber-error').innerHTML = 'Invalid Phone Number';
//     }

//     enableSignInButton();
// })

// password.addEventListener('change', (event) => {
//     let value = event.target.value;
//     isPasswordValid = value.length > 5;

//     if (isPasswordValid) {
//         document.getElementById('password-error').innerHTML = '';
//     } else {
//         document.getElementById('password-error').innerHTML = 'Invalid Password';
//     }

//     enableSignInButton();
// })

// retypePassword.addEventListener('change', (event) => {
//     let value = event.target.value;
//     isRetypePasswordValid = value.length > 5;

//     if (isRetypePasswordValid) {
//         document.getElementById('retypepassword-error').innerHTML = '';
//     } else {
//         document.getElementById('retypepassword-error').innerHTML = 'Invalid New Password';
//     }

//     enableSignInButton();
// })


// function enableSignInButton(); {
//     if (isEmailValid && isPasswordValid) {
//         signInButton.removeAttribute('disabled');
//     } else {
//         signInButton.setAttribute('disabled', '');
//     }
// }
// enableSignInButton();