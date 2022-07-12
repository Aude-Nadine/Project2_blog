let email = document.getElementById('email');
let phoneNumber = document.getElementById('phoneNumber');
let newPassword = document.getElementById('newPassword');
let retypePassword = document.getElementById('retypePassword');
let signInButton = document.getElementById('signInButton');

const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
    let message = [];
    if(email.value === '' || email.value === null) {
        message.push('*A Valid Email is required');
    }
    if(phoneNumber.value === '' || phoneNumber.value === null) {
        message.push('*A Valid Phone number is required');
    }
    if (newPassword.value.length <= 6) {
        message.push ('Password must be longer than 6 characters')
    }
    if (newPassword.value.length >= 20) {
        message.push ('Password must be less than 20 characters')
    }
    if (retypePassword.value !== newPassword.value ) {
        message.push ('Password must match')
    }
    if(message.length > 0) {
        e.preventDefault()
        errorElement.innerText = message.join(', ')
    }  
})






// let isEmailValid = false;
// let isPhoneNumberValid = false;
// let isNewPasswordValid = false;
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

// newPassword.addEventListener('change', (event) => {
//     let value = event.target.value;
//     isNewPasswordValid = value.length > 5;

//     if (isNewPasswordValid) {
//         document.getElementById('newpassword-error').innerHTML = '';
//     } else {
//         document.getElementById('newpassword-error').innerHTML = 'Invalid New Password';
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