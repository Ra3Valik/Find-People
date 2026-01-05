const STORAGE_KEY = 'theme';

function setTheme(theme) {
    const root = document.documentElement;

    if (theme === 'dark') {
        root.classList.add('dark');
    } else {
        root.classList.remove('dark');
    }

    localStorage.setItem(STORAGE_KEY, theme);
}

function toggleTheme() {
    const isDark = document.documentElement.classList.contains('dark');
    setTheme(isDark ? 'light' : 'dark');
}

function initThemeToggle() {
    document
        .querySelectorAll('[data-theme-toggle]')
        .forEach((btn) => {
            btn.addEventListener('click', toggleTheme);
        });
}

document.addEventListener('DOMContentLoaded', initThemeToggle);
