import { CountContactAreaLength } from "../components/contact-form"
import { InputAnimation } from "../components/about"

const Skills = () => {
    // Toggle menu/div of different skills categories
    const SkillCategory = document.querySelectorAll('.skill-category')
    SkillCategory.forEach((Category) => {
        Category.addEventListener('click', () => {
            SkillCategory.forEach(x => x.classList.remove('selected'))
            Category.classList.add('selected')
            let CategoryName = Category.dataset.category
            console.log(CategoryName)
            document.querySelectorAll('.category-skills').forEach(x => x.classList.add('hidden'))
            document.querySelector(`.${CategoryName}-skills`).classList.remove('hidden')
        })
    })
}

window.addEventListener('load', (e) => {
    CountContactAreaLength()
    InputAnimation(e)
    Skills()
})
