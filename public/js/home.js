//getter and setter for color modes with cookies
function setCookie(name, value, days){
    const date = new Date();
    date.setTime(date.getTime() +(days * 24 * 60 * 60 * 1000));
    document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
    console.log(`Cookie set: ${name}=${value}`);
}

function getCookie(name){
    const cookies = document.cookie.split('; ');
    for (let i = 0; i < cookies.length; i++){
        const cookie = cookies[i].split('=');
        if (cookie[0] === name){
            console.log(`Cookie retrieved: ${name}=${cookie[1]}`);
            return cookie[1];
        }
    }
    return null
}

//for different modes with the cookie
function colorMode(){
    const lModeButton = document.getElementById('lMode-btn')
    const dModeButton = document.getElementById('dMode-btn')
    const bModeButton = document.getElementById('bMode-btn')
    const yModeButton = document.getElementById('yMode-btn')
    const body = document.body

    //applying the "save mode" for the prefered color mode

    const saveMode = getCookie('colorMode');
    if (saveMode){
        body.classList.add(saveMode);
    }

    function setMode(mode){
        body.classList.remove('light', 'dark', 'blue', 'yellow');
        body.classList.add(mode);

        setCookie('colorMode', mode, 365);
        console.log(`Mode applied: ${mode}`);
    }

    if(lModeButton && dModeButton && bModeButton && yModeButton && body){
        lModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            setMode('light');
        });

        dModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            setMode('dark');
        });

        bModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            setMode('blue');
        });

        yModeButton.addEventListener('click', (e) => {
            e.preventDefault()
            setMode('yellow');
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
