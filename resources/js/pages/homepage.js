import ScrollReveal from "scrollreveal";
import anime from "animejs";
import { AboutAnimation } from "../components/about";
import { ProjectInformations } from "../components/project-cards";
import { debug, elementInViewport } from "../main";
import { RemoveLoader } from "../components/loader";
import { CopyToClipboard } from "../components/copied-to-clipboard";
import {
  CheckControllerScrollReturn,
  CountContactAreaLength,
} from "../components/contact-form";
import { ScrollToContact } from "../components/to-contact";
import { ArrowEvent } from "../components/to-about";

const write = (e, i = 0) => {
  const $ = document.querySelector(`.${e} p`);
  console.log(e, $)
  const value = $.dataset.value;
  if (i < value.length) {
    setTimeout(() => {
      $.innerHTML += `<span>${value[i]}</span>`;
      write(e, i + 1);
    }, 125);
  } else {
    $.classList.add("disabled-animation-writer");
  }
};

const HomepageReveal = () => {
  // Animation on languages icons
  const LanguagesIcons = document.querySelectorAll(".language_icon");
  let Icon = 0;
  for (let i = 0; i < 240 * (LanguagesIcons.length + 1); i++) {
    ScrollReveal().reveal(LanguagesIcons[Icon], { delay: i });
    i = i + 240;
    Icon++;
  }
};

const RevealYears = () => {
  // Try to make a good animation on years in about me spoiler (ok but have some bugs)
  const years = document.querySelector(".years");
  let state = true;
  if (years) {
    document.addEventListener("scroll", () => {
      if (state) {
        if (elementInViewport(years)) {
          setTimeout(() => {
            anime({
              targets: years,
              innerHTML: [2003, 2022],
              easing: "linear",
              round: 1,
            });
          }, 400);
          state = false;
        }
      }
    });
  }
};

window.addEventListener("load", (e) => {
  setTimeout(() => {
    RemoveLoader();
    write("name");
    write("job");
    HomepageReveal();
    ArrowEvent(document.querySelector("#__spoilerAbout").offsetTop);
    ScrollToContact(document.querySelector("#__ContactForm").offsetTop);
    CopyToClipboard();
    CountContactAreaLength();
    anime({
      targets: document.querySelector(".years"),
      innerHTML: [2003, 2022],
      easing: "linear",
      round: 1,
    });
    RevealYears();
    AboutAnimation(e);
    ProjectInformations(e);
    BoardCardsAnimation();
    CheckControllerScrollReturn();
  }, 800);
});
