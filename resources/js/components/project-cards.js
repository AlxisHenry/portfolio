const AboutAnimation = (e) => {
    const AboutButton = document.querySelectorAll('._up_project_ ')

    if (AboutButton) {

        AboutButton.forEach(Button => Button.classList.add('__arrow__animation__about__button__'))

        AboutButton.forEach(Button =>
            Button.addEventListener('mouseover', (e) => {
                let LoadTarget =  e.target.classList.contains('__arrow__left__') ?
                    e.target.parentNode.parentNode.parentNode.children[1] :
                    e.target.parentNode.parentNode.children[1]

                LoadTarget.classList.remove('__reverse__')
                LoadTarget.classList.add('__load__')
            }))

        AboutButton.forEach(Button =>
            Button.addEventListener('mouseout', (e) => {
                let LoadTarget =  e.target.classList.contains('__arrow__left__') ?
                    e.target.parentNode.parentNode.parentNode.children[1] :
                    e.target.parentNode.parentNode.children[1]

                LoadTarget.classList.add('__reverse__')
            }))

    }

}

const ProjectInformations = (e) => {

    const ProjectCards = document.querySelectorAll('._project_image_')
    const AboutProjectCard = document.querySelectorAll('._project_content_')

    if (ProjectCards) {
        ProjectCards.forEach(Cards =>
            Cards.addEventListener('mouseenter', (e) => {

                const ProjectContent = e.target.src ?
                    e.target.parentNode.parentNode.children[1] :
                    e.target.parentNode.children[1]

                ProjectContent.classList.remove('hide')
                ProjectContent.classList.add('show')

            }))
    }

    if (AboutProjectCard) {
        AboutProjectCard.forEach(Cards =>
            Cards.addEventListener('mouseleave', (e) => {

                const ProjectContent = e.target.src ?
                    e.target.parentNode.parentNode.children[1] :
                    e.target.parentNode.children[1]

                ProjectContent.classList.remove('show')
                ProjectContent.classList.add('hide')

            }))
    }

}

module.exports = {
    InputAnimation: AboutAnimation,
    ProjectAnimation: ProjectInformations
}