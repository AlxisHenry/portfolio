import {
  CheckControllerScrollReturn,
  CountContactAreaLength,
} from "../components/contact-form";
import { AboutAnimation } from "../components/about";
import { CopyToClipboard } from "../components/copied-to-clipboard";
import { ScrollToContact } from "../components/to-contact";

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
        .querySelectorAll(".category-skills")
        .forEach((x) => x.classList.add("hidden"));
      document
        .querySelector(`.${CategoryName}-skills`)
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

window.addEventListener("load", (e) => {
  ScrollToContact(document.querySelector("#__ContactForm").offsetTop);
  CopyToClipboard();
  CountContactAreaLength();
  AboutAnimation(e);
  CheckControllerScrollReturn();
  Skills();
  MergeFooter();
});
