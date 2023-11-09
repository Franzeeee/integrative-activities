const themeSwitch = document.querySelector("#themeSwitch");
const container = document.querySelector(".container");

// Check if the user's theme preference is stored in localStorage
const userThemePreference = localStorage.getItem('themePreference');

if (userThemePreference === 'lightTheme') {
    container.classList.add('lightTheme');
    themeSwitch.classList.add('themeSwitchChanged');
}

themeSwitch.addEventListener('click', function () {
    // Toggle the theme classes as you were doing

    container.classList.toggle("lightTheme");
    themeSwitch.classList.toggle("themeSwitchChanged");

    // Store the user's theme preference in localStorage
    const themePreference = container.classList.contains("lightTheme") ? 'lightTheme' : 'darkTheme';
    localStorage.setItem('themePreference', themePreference);
});