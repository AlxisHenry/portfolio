import ScrollReveal from "scrollreveal";
import anime from "animejs";
import * as ProjectsCards from "../components/project-cards"
import * as global from "../main"
import * as BoardCards from "../components/board-cards"
import * as Loader from "../components/loader"

const writeJob = (job, index) => {
    // Write Job on homepage
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
    // Write Name on homepage
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

const HomepageReveal = () => {
    // Animation on languages icons
    const LanguagesIcons = document.querySelectorAll('.language_icon')
    let Icon = 0
    for(let i = 0; i < (240 * (LanguagesIcons.length + 1)); i++) {
        ScrollReveal().reveal(LanguagesIcons[Icon], {delay: i})
        i = i+240
        Icon++
    }
}

const RevealYears = () => {
    // Try to make a good animation on years in about me spoiler (ok but have some bugs)
    const years = document.querySelector('.years')
    let state = true
    if (years) {
        document.addEventListener('scroll', () => {
            if (state) {
                if (global.inViewport(years)) {
                    setTimeout(() => {
                        anime({
                            targets: years,
                            innerHTML: [2003, 2022],
                            easing: 'linear',
                            round: 1
                        })
                    }, 400)
                    state = false
                }
            }
        })
    }
}

const MouseEvent = () => {
    const mouse = document.querySelector('.mouse')

    mouse.addEventListener('click', () => {
        window.scroll({
            top: 860,
            behavior: 'smooth'
        });
    })
}

window.addEventListener('load', (e) => {

    Loader.myScene();
    Loader.addHolder();
    Loader.animate();

    setTimeout(() => {
        Loader.RemoveLoader()
        writeName('Henry alexis', 0)
        writeJob('Web Developer', 0)
        HomepageReveal()
        MouseEvent()
        anime({
            targets: document.querySelector('.years'),
            innerHTML: [2003, 2022],
            easing: 'linear',
            round: 1
        })
        RevealYears()
        ProjectsCards.InputAnimation(e)
        ProjectsCards.ProjectAnimation(e)
        BoardCards.BoardCardsAnimation()
    }, 1800)

})

window.addEventListener('resize', () => {

    Loader.onWindowResize()

}, false)
