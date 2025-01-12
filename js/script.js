// const select = document.getElementById('language-select');

// select.addEventListener('change', (event) => {
//     const selectedOption = event.target.options[event.target.selectedIndex];
//     const image = selectedOption.getAttribute('data-image');
//     select.style.backgroundImage = `url(${image})`;
// });



const select = document.getElementById('language-select');

// Establece una imagen inicial
const setInitialBackground = () => {
    const selectedOption = select.options[select.selectedIndex];
    const image = selectedOption.getAttribute('data-image');
    if (image) {
        select.style.backgroundImage = `url(${image})`;
    }
};

// Escucha el cambio del select
select.addEventListener('change', () => {
    const selectedOption = select.options[select.selectedIndex];
    const image = selectedOption.getAttribute('data-image');
    if (image) {
        select.style.backgroundImage = `url(${image})`;
    }
});

// Llama a la función inicial
setInitialBackground();


/**/
// setInterval(() => {
//     window.location.reload();
// }, 5000);