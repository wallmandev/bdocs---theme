const darkModeToogle = () => {

    // Get element from dom
    const body = document.querySelector('body')
    const themeToggleButton = document.querySelector('#theme-toggle-button')
    const themeToggleList = document.querySelector('.theme-toggle__list')
    const themeModeButtons = document.querySelectorAll('.theme-toggle__item .theme-toggle__button')

    // Function to toggle list visibility
    const toggleListVisibility = () => {
        themeToggleButton.classList.toggle('theme-toggle__button--active')
        themeToggleList.classList.toggle('theme-toggle__list--visible')
    }

    // Function to toggle theme mode
    const toggleThemeMode = (event) => {
        const buttonParent = event.currentTarget.parentNode 
        const theme = event.currentTarget.dataset.theme
        const themeToggleButtonIcon = themeToggleButton.querySelector('.material-symbols-outlined')
        const icon = event.currentTarget.querySelector('.material-symbols-outlined')
        const iconText = icon.innerText;
        themeToggleButtonIcon.innerText = iconText


        body.classList.remove('light', 'dark')

        if (theme === 'light') {
            body.classList.add('light')
        }

        if (theme === 'dark') {
            body.classList.add('dark')
        }

        if (theme === 'default') {
            body.classList.remove('light', 'dark')

        }

        themeModeButtons.forEach( button => {
            button.parentNode.classList.remove('theme-toggle__item--current')
        })

        buttonParent.classList.add('theme-toggle__item--current')
    }

    themeToggleButton.addEventListener('click', toggleListVisibility)
    themeModeButtons.forEach(button => button.addEventListener('click', toggleThemeMode))
}


darkModeToogle()