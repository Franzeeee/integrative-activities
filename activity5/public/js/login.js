const themeSwitch = document.getElementById('themeSwitch');

themeSwitch.addEventListener('click', function () {
    const rootStyles = getComputedStyle(document.documentElement);
    const rootBgColor = rootStyles.getPropertyValue('--bg-color').trim();


    if (rootBgColor === 'rgb(255, 255, 255)') {
        document.documentElement.style.setProperty('--bg-color', 'rgb(0, 0, 0)');
        themeSwitch.innerText = "Go to Light Mode";
    } else {
        document.documentElement.style.setProperty('--bg-color', 'rgb(255, 255, 255)');
        themeSwitch.innerText = "Go to Dark Mode";
    }
});