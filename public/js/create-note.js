document.addEventListener('DOMContentLoaded', () => {
    let lMode = document.querySelector('.lMode');
    let dMode = document.querySelector('.dMode');
    let bMode = document.querySelector('.bMode');
    let yMode = document.querySelector('.yMode');
    let container = document.querySelector('.container');

    if (lMode && dMode && bMode && yMode && container){
        dMode.addEventListener('click', () => {
            container.classList.remove('container-lMode', 'container-bMode', 'container-yMode');
            container.classList.add('container-dMode');
        });

        lMode.addEventListener('click', () => {
            container.classList.remove('container-dMode', 'container-bMode', 'container-yMode');
            container.classList.add('container-lMode');
        })

        bMode.addEventListener('click', () => {
            container.classList.remove('container-dMode', 'container-lMode', 'container-yMode');
            container.classList.add('container-bMode');
        });

        yMode.addEventListener('click', () => {
            container.classList.remove('container-dMode', 'container-bMode', 'container-lMode');
            container.classList.add('container-yMode');
        })
    }
});
