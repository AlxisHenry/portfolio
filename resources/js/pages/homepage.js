import ScrollReveal from "scrollreveal";
import anime from "animejs";
import { AboutAnimation } from "../components/about";
import { ProjectInformations } from "../components/project-cards";
import { debug, elementInViewport } from "../main";
import { BoardCardsAnimation } from "../components/board-cards";
import { RemoveLoader } from "../components/loader";
import { CopyToClipboard } from "../components/copied-to-clipboard";
import {
  CheckControllerScrollReturn,
  CountContactAreaLength,
} from "../components/contact-form";
import { ScrollToContact } from "../components/to-contact";
import { ArrowEvent } from "../components/to-about";

const writeJob = (job, index) => {
  // Write Job on homepage
  const Job = document.querySelector(".job p");
  if (index < job.length) {
    setTimeout(() => {
      Job.innerHTML += `<span>${job[index]}</span>`;
      writeJob(job, index + 1);
    }, 125);
  } else {
    Job.classList.add("disabled-animation-writer");
  }
};
const writeName = (name, index) => {
  // Write Name on homepage
  const Name = document.querySelector(".name p");
  if (index < name.length) {
    setTimeout(() => {
      Name.innerHTML += `<span>${name[index]}</span>`;
      writeName(name, index + 1);
    }, 125);
  } else {
    Name.classList.add("disabled-animation-writer");
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
    writeName("Henry alexis", 0);
    writeJob("Developer", 0);
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
