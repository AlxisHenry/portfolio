import AOS from 'aos'
import 'aos/dist/aos.css'
import * as Menu from './components/burger-menu'

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
}

window.addEventListener('load', (e) => {

    AOS.init({ duration: 1800 })
    Themes()
    LoadingPosition(e)
    Menu.Burger()
    Menu.Hover()

})

window.addEventListener('scroll', (e) => {

    LoadingPosition(e)

})

window.addEventListener('resize', () => {

    Menu.Resize()

})

