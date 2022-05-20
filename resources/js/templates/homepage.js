import ScrollReveal from "scrollreveal";
import anime from "animejs";
import * as ProjectsCards from "../components/project-cards"
import * as global from "../main"

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

const HomepageReveal = () => {
    const LanguagesIcons = document.querySelectorAll('.language_icon')
    let Icon = 0
    for(let i = 0; i < (240 * (LanguagesIcons.length + 1)); i++) {
        ScrollReveal().reveal(LanguagesIcons[Icon], {delay: i})
        i = i+240
        Icon++
    }
}

const RevealYears = () => {
    const years = document.querySelector('.years')
    let state = true

    if (years) {
        document.addEventListener('scroll', () => {
            if (state) {
                if (global.inViewport(years)) {
                    setTimeout(() => {
                        anime({
                            targets: years,
                            innerHTML: [1980, 2022],
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

window.addEventListener('load', (e) => {

    writeName('Henry alexis', 0)
    writeJob('Web Developer', 0)
    HomepageReveal()
    anime({
        targets: document.querySelector('.years'),
        innerHTML: [1980, 2022],
        easing: 'linear',
        round: 1
    })
    RevealYears()
    ProjectsCards.InputAnimation(e)
    ProjectsCards.ProjectAnimation(e)

})