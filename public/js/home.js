//for different modes
function colorMode(){
    const lModeButton = document.getElementById('lMode-btn')
    const dModeButton = document.getElementById('dMode-btn')
    const bModeButton = document.getElementById('bMode-btn')
    const yModeButton = document.getElementById('yMode-btn')
    const body = document.body

    if(lModeButton && dModeButton && bModeButton && yModeButton && body){
        lModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            body.classList.remove('dark', 'blue', 'yellow')
            body.classList.add('light')
        });

        dModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            body.classList.remove('light', 'blue', 'yellow')
            body.classList.add('dark')
        });

        bModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            body.classList.remove('light', 'dark', 'yellow')
            body.classList.add('blue')
        });

        yModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            body.classList.remove('light', 'dark', 'blue')
            body.classList.add('yellow')
        });
    }
}
document.addEventListener('DOMContentLoaded', colorMode);



//for the sidebar transitions
const toggleButton = document.getElementById('toggle-btn')
const sidebar = document.getElementById('sidebar')

function toggleSidebar(){
    sidebar.classList.toggle('close')
    toggleButton.classList.toggle('rotate')

    closeAllSubMenus()
}

function toggleSubMenu(button){

    if(!button.nextElementSibling.classList.contains('show')){
        closeAllSubMenus()
    }

    button.nextElementSibling.classList.toggle('show')
    button.classList.toggle('rotate')

    if(sidebar.classList.contains('close')){
        sidebar.classList.toggle('close')
        toggleButton.classList.toggle('rotate')
    }
}

function closeAllSubMenus(){
    Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
        ul.classList.remove('show')
        ul.previousElementSibling.classList.remove('rotate')
    })
}
