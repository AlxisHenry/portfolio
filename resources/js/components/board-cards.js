const BoardCardsAnimation = () => {

    const BoardCards = document.querySelectorAll('.__documentation__card__download__')
    const DownloadAnimationClass= 'up-animation'

    BoardCards.forEach((Card) => {

        const AnimationBar = Card.children[0].children[1].children[0]

        Card.addEventListener('click', () => {
            AnimationBar.classList.remove(DownloadAnimationClass)
            AnimationBar.classList.add(DownloadAnimationClass)

            setTimeout(() => {
                AnimationBar.classList.remove(DownloadAnimationClass)
            }, 1600)

        })

    })

}

module.exports = {
    BoardCardsAnimation: BoardCardsAnimation,
}