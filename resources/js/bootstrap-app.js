import * as bootstrap from 'bootstrap';

window.bootstrap = bootstrap;

const switcher = document.getElementById('themeSwitch');

if (switcher) {
    const savedTheme = localStorage.getItem('theme');

    const theme = savedTheme
        ? savedTheme
        : (window.matchMedia('(prefers-color-scheme: dark)').matches
            ? 'dark'
            : 'light');

    document.documentElement.setAttribute('data-bs-theme', theme);
    switcher.checked = theme === 'dark';

    updateThemeIcon(theme);

    switcher.addEventListener('change', function () {
        const theme = this.checked ? 'dark' : 'light';

        document.documentElement.setAttribute('data-bs-theme', theme);
        localStorage.setItem('theme', theme);

        updateThemeIcon(theme);
    });
}

function updateThemeIcon(theme) {
    const icon = document.getElementById('themeIcon');

    if (!icon) return;

    if (theme === 'dark') {
        icon.className = 'bi bi-moon-stars-fill';
    } else {
        icon.className = 'bi bi-sun-fill';
    }
}
