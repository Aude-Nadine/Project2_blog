const email = document.getElementById('email');
const password = document.getElementById('password');
const signInButton = document.getElementById('signInButton');
const errorElement = document.getElementById('error');


form.addEventListener('submit', (e) => {
    let message = [];
    if(email.value === '' || email.value === null) {
        message.push('*A Valid Email is required');
    }
    if (password.value.length <= 4 ) {
        message.push ('*Password must be longer than 4 characters');
    } else {
        password.length = " ";
        message.push('*Must Enter Valid password');
    }
    if (password.value.length >= 20) {
        message.push ('*Password must be less than 20 characters');
    }
    
    if(message.length > 0) {
        e.preventDefault();
        errorElement.innerText = message.join(', ');
    }
    
})






//WHAT I WAS WORKINING ON;
// let isEmailValid = false;
// let isPasswordValid = false;

// email.addEventListener('change', (event) => {
//     let value = event.target.value;
//     isEmailValid = value.length > 7;

//     if (isEmailValid) {
//         document.getElementById('email-error').innerHTML = '';
//     } else {
//         document.getElementById('email-error').innerHTML = 'Invalid Email';
//     }

//     // ***isEmailValid = value.length > 6; same as below explained;
//     // if(value.length > 6) {
//     //     isEmailValid = true;
//     // }   else{
//     //     isEmailValid = false;
//     // }
//     enableSignInButton();
// })

// password.addEventListener('change', (event) => {
//     let value = event.target.value;
//     isPasswordValid = value.length > 3;

//     if (isEmailValid) {
//         document.getElementById('password-error').innerHTML = '';
//     } else {
//         document.getElementById('password-error').innerHTML = 'Invalid Password';
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


