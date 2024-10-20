const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});


let darkmode = localStorage.getItem('darkmode');
const temaChange = document.getElementById('dark-mode-toggle');

temaChange.addEventListener('click', () => {
    darkmode !== 'active' ? enabledarkmode() : disabledarkmode();

});

const enabledarkmode = () => {
    document.body.classList.add('darkmode');
    localStorage.setItem('darkmode', 'active');
    darkmode = localStorage.getItem('darkmode');
    
};

const disabledarkmode = () => {
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkmode', null);
    darkmode = localStorage.getItem('darkmode');
};


