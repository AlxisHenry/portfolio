import ScrollReveal from 'scrollreveal'
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 2000
});

const burgerButton = document.querySelector('.burger-button')
const burgerElement = document.querySelector('.burger-element')
const burgerMouvement = document.querySelector('.__presentation__')
const ArticleElement = document.querySelector('.__target__article__')
const LanguagesIcons = document.querySelectorAll('.language_icon')

function toggleNav() {

if (burgerButton) {
        burgerButton.addEventListener('click', (e) => {
            burgerButton.classList.toggle('is-active')
            if (burgerElement){
                if ((!burgerElement.classList.contains('NavbarUpAnimation'))) {
                    burgerElement.classList.remove('NavbarReverseAnimation')
                    burgerElement.classList.add('NavbarUpAnimation')
                    if (burgerMouvement) {
                        if (window.innerWidth <= 1500) {} else {
                            burgerMouvement.classList.remove('moov_this_element_reverse')
                            burgerMouvement.classList.add('moov_this_element')
                        }
                    }
                    if (ArticleElement) {
                        if (window.innerWidth <= 1500) {} else {
                        ArticleElement.classList.remove('reverse-moov-article-element')
                        ArticleElement.classList.add('moov-article-element')
                        }
                    }
                } else {
                    burgerElement.classList.add('NavbarReverseAnimation')
                    burgerElement.classList.remove('NavbarUpAnimation')
                    if (burgerMouvement) {
                        if (window.innerWidth <= 1500) {} else {
                            burgerMouvement.classList.remove('moov_this_element')
                            burgerMouvement.classList.add('moov_this_element_reverse')
                        }}
                    if (ArticleElement) {
                        if (window.innerWidth <= 1500) {} else {
                            ArticleElement.classList.add('reverse-moov-article-element')
                            ArticleElement.classList.remove('moov-article-element')
                    }       }
                }
            }
            e.preventDefault()

        }, false)
    }
}

function HoverNavbarMenu() {

    const NavTitle = document.querySelectorAll('.burger-element a:not(.nav-active)')

    if (NavTitle) {

        NavTitle.forEach(__NavTitle =>
            __NavTitle.addEventListener('mouseover', () => {

                const LoadingBar = __NavTitle.children[0].children[1]

                LoadingBar.classList.remove('loading__navbar_animation_down')
                LoadingBar.classList.add('loading__navbar_animation_up')

            }))

        NavTitle.forEach(__NavTitle =>
            __NavTitle.addEventListener('mouseout', () => {

                const LoadingBar = __NavTitle.children[0].children[1]

                LoadingBar.classList.add('loading__navbar_animation_down')

            }))

    }
}

function HomepageReveal() {

    let Icon = 0;
    for(let i = 125; i < (125 * (LanguagesIcons.length + 1)); i++) {
        ScrollReveal().reveal(LanguagesIcons[Icon], {delay: i})
        i = i+125
        Icon++
    }

}

window.addEventListener('resize', () => {
 if (burgerMouvement) {
     if (window.innerWidth <= 1500) {
     burgerMouvement.classList.remove('moov_this_element_reverse')
     burgerMouvement.classList.remove('moov_this_element')
     } else {
         if (burgerElement.classList.contains('NavbarUpAnimation')) {
             burgerMouvement.classList.add('moov_this_element')
         }
     }
 }
 if (ArticleElement) {
     if (window.innerWidth <= 1500) {
         ArticleElement.classList.remove('moov-article-element')
         ArticleElement.classList.remove('reverse-moov-article-element')
     } else {
         if (burgerElement.classList.contains('NavbarUpAnimation')) {
             ArticleElement.classList.add('moov-article-element')
         }
     }
 }
})

window.addEventListener('load', () => {

    HomepageReveal()
    toggleNav()
    HoverNavbarMenu()

})



