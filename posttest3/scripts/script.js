const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});

let lightMode = localStorage.getItem('light-mode');
const temaChange = document.getElementById('tema-change');

temaChange.addEventListener('click', () => {
    lightMode !== 'active' ? enableLightMode() : disableLightMode();
});

const enableLightMode = () => {
    document.body.classList.add('light-mode');
    localStorage.setItem('light-mode', 'active');
    lightMode = localStorage.getItem('light-mode');
};

const disableLightMode = () => {
    document.body.classList.remove('light-mode');
    localStorage.setItem('light-mode', null);
    lightMode = localStorage.getItem('light-mode');
};
