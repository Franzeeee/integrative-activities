const themeSwitch = document.querySelector("#themeSwitch");
const container = document.querySelector(".container");
const nav = document.querySelector("nav");

// Check if the user's theme preference is stored in localStorage
const userThemePreference = localStorage.getItem('themePreference');

// Apply the user's preferred theme (if stored)
if (userThemePreference === 'lightTheme') {
    container.classList.add('lightTheme');
    themeSwitch.classList.add('themeSwitchChanged');
    nav.classList.add('nav-light');
}

themeSwitch.addEventListener('click', function () {
    // Toggle the theme classes as you were doing

    container.classList.toggle("lightTheme");
    themeSwitch.classList.toggle("themeSwitchChanged");
    nav.classList.toggle("nav-light");

    // Store the user's theme preference in localStorage
    const themePreference = container.classList.contains("lightTheme") ? 'lightTheme' : 'darkTheme';
    localStorage.setItem('themePreference', themePreference);
});
