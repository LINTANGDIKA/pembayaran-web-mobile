let log = document.getElementsByClassName('log')[0];
let reg = document.getElementsByClassName('reg')[0];
let btn = document.getElementsByClassName('butn')[0];
let login = document.getElementsByClassName('login')[0];
let register = document.getElementsByClassName('register')[0];
log.addEventListener('click', () => {
    btn.style.marginLeft = '0'
    register.style.display = 'none';
    login.style.display = 'block';
    // btn.style.right = '0'
    // btn.style.left = '0'
});
reg.addEventListener('click', () => {
    login.style.display = 'none';
    register.style.display = 'block';
    register.style.marginTop = '4rem';
    btn.style.marginLeft = '7rem'
    // btn.style.right = '15%'
    // btn.style.left = '50%'
});
