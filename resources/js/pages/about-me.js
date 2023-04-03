import {
  CheckControllerScrollReturn,
  CountContactAreaLength,
} from "../components/contact-form";
import { AboutAnimation } from "../components/about";
import { CopyToClipboard } from "../components/copied-to-clipboard";
import { ScrollToContact } from "../components/to-contact";

const moreSkills = () => {
  let parts = document.querySelectorAll(".category-skills-parts .part");
  let _ = document.querySelector(".show-more-skills");
  const show = (el) => {
    el.style.display = "flex";
  };
  _.addEventListener("click", () => {
    for (const part of parts) {
      console.log(part, part.style.display);
      if (part.style.display === "none") {
        show(part);
        if (parts[parts.length - 1].style.display === "flex") {
          _.style.display = "none";
        }
        return;
      }
    }
  });
};

const Skills = () => {
  // Toggle menu/div of different skills categories
  const SkillCategory = document.querySelectorAll(".skill-category");
  SkillCategory.forEach((Category) => {
    Category.addEventListener("click", () => {
      SkillCategory.forEach((x) => x.classList.remove("selected"));
      Category.classList.add("selected");
      let CategoryName = Category.dataset.category;
      console.log(CategoryName);
      document
        .querySelectorAll(".all-skills .container")
        .forEach((x) => x.classList.add("hidden"));
      document
        .querySelector(`.all-skills .${CategoryName}-skills`)
        .classList.remove("hidden");
    });
  });
};

const MergeFooter = () => {
  const Footer = document.querySelector(".__footer__");
  const SectionToMerge = document.querySelector("#__MoreInformations");
  if (SectionToMerge) {
    Footer.style.marginTop = 0;
  }
};

const SetParallaxTiltEffect = () => {
  document.querySelectorAll(".skill-wrapper").forEach((element) => {
    new ParallaxElement({
      element: element,
      tiltEffect: ["normal", "reverse"][Math.floor(Math.random() * 2)],
    })
  });
}

window.addEventListener("load", (e) => {
  ScrollToContact(document.querySelector("#__ContactForm").offsetTop);
  CopyToClipboard();
  CountContactAreaLength();
  AboutAnimation(e);
  CheckControllerScrollReturn();
  Skills();
  MergeFooter();
  moreSkills();
  SetParallaxTiltEffect();
});
