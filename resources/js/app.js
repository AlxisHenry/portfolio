import ScrollReveal from 'scrollreveal'
import AOS from 'aos'
import 'aos/dist/aos.css'
import anime from 'animejs/lib/anime.es.js'
import Typed from 'typed.js'

const writeJob = (job, index) => {
    const Job = document.querySelector('.job p')
    if(index < job.length) {
        setTimeout(() => {
            Job.innerHTML += `<span>${job[index]}</span>`
            writeJob(job, index + 1)
        }, 125)
    } else {
        Job.classList.add('disabled-animation-writer')
    }
}

const writeName = (name, index) => {
    const Name = document.querySelector('.name p')
    if(index < name.length) {
        setTimeout(() => {
            Name.innerHTML += `<span>${name[index]}</span>`
            writeName(name, index + 1)
        }, 125)
    } else {
        Name.classList.add('disabled-animation-writer')
    }
}

const toggleNav = () => {

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

const ResizeNavAnimation = () => {
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
}

const HoverNavbarMenu = () => {

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

const HomepageReveal = () => {

    let Icon = 0
    for(let i = 0; i < (240 * (LanguagesIcons.length + 1)); i++) {
        ScrollReveal().reveal(LanguagesIcons[Icon], {delay: i})
        i = i+240
        Icon++
    }

}

const Themes = () => {

    const SwapThemeElement = document.querySelector('.__theme__main__')
    const Theme = SwapThemeElement.children[0]

    if (SwapThemeElement) {
        SwapThemeElement.addEventListener('click', () => {
            if (Theme) {
                const ActualTheme = SwapThemeElement.id
                const SwapTo = Theme.dataset.next
                SwapThemeElement.id = SwapTo.toLowerCase()
                Theme.id = SwapTo.toLowerCase()
                Theme.title = SwapTo
                Theme.alt = SwapTo
                Theme.dataset.next = ActualTheme
                Theme.src = Theme.src.replace(ActualTheme, SwapTo.toLowerCase())
            }
        })
    }

}

const LoadingPosition = (e) => {
    const LoadingIndicator = document.querySelector('.__state__indicator__')
    const TotalHeight = document.body.offsetHeight
    const PassedHeight = Math.round(window.scrollY + window.innerHeight)
    const LoadingState = Math.round((PassedHeight / TotalHeight) * 100)
    LoadingIndicator.style.height = LoadingState + '%'
    console.log(TotalHeight,PassedHeight, LoadingState)

}

const burgerButton = document.querySelector('.burger-button')
const burgerElement = document.querySelector('.burger-element')
const burgerMouvement = document.querySelector('.__presentation__')
const ArticleElement = document.querySelector('.__target__article__')
const LanguagesIcons = document.querySelectorAll('.language_icon')

window.addEventListener('load', (e) => {

    AOS.init({
        duration: 1100
    })

    writeName('Henry alexis', 0)
    writeJob('Web Developer', 0)
    HomepageReveal()
    Themes()
    toggleNav()
    HoverNavbarMenu()
    LoadingPosition(e)

})

window.addEventListener('resize', () => {

    ResizeNavAnimation()

})

window.addEventListener('scroll', (e) => {

    LoadingPosition(e)

})