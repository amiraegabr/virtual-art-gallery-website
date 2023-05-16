const pageBox = document.querySelector('.page-box');
const btnNext = document.querySelector('.btn-next');
const btnBack = document.querySelector('.btn-back');
const checkboxPass = document.querySelector('.checkbox-pass');
const passwordInput = document.querySelector('.password');
const email = document.querySelector('.email');

btnNext.onclick = (e) => {
    e.preventDefault();
    pageBox.classList.add('active-pass');
    setTimeout(() => passwordInput.focus, 500);
};

btnBack.onclick = (e) => {
    e.preventDefault();
    pageBox.classList.remove('active-pass');
};

checkboxPass.onclick = (e) => {
    if (checkboxPass.checked) {
        passwordInput.type='text';
    }
    else{
        passwordInput.type='password'
    }
};

btnBack.onclick = (e) => {
};
