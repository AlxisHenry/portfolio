console.log('App js')


function toggleNav() {

const button = document.querySelector('.burger-button');

if (button) {
        button.addEventListener('click', (e) => {
            button.classList.toggle('is-active');
            e.preventDefault();
        }, false);
    }
}

toggleNav();

