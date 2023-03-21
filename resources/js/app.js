import './bootstrap';


//Spiner activation

const loader = document.getElementById('loader-overlay');
const loaderButtons = document.querySelectorAll('.btn-loader');

loaderButtons.forEach(b => {
    b.addEventListener('click', () => {
        loader.classList.remove('hidden');
        loader.classList.add('flex');
    });
})