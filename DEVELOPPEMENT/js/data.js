const path = {
  imgs: {
    index: "./DEVELOPPEMENT/assets/img/",
    relat: "../assets/img/no-backgrounds/"
  },
  html: "./DEVELOPPEMENT/html/",
};

const images = {
  first_project: {
    title: "TIMKEN",
    alt: "TIMKEN",
    img: `${path.imgs.index}Timken.png`,
    href: `${path.html}projet-timken.html`,
    status: "Finished",
  },
  second_project: {
    title: "SNIPE-IT",
    alt: "SNIPE-IT",
    img: `${path.imgs.index}snipeit.png`,
    href: `${path.html}projet-snipe-it.html`,
    status: "Finished",
  },
  third_project: {
    title: "Sport Addict",
    alt: "SPORT-ADDICT",
    img: `${path.imgs.index}sport-addict.png`,
    href: `${path.html}inprogress.html`,
    status: "Not Started",
  },
  aleatory: {
    title: "ALEATORY",
    alt: "ALEATORY",
    img: `${path.imgs.relat}aleatory-removebg-preview.png`,
    status: "Loader",
  }
};

const style = {
  display: {
    flex: (id) => {
      id.style.display = "flex";
    },
    baptiste: "e",
    none: (id) => {
      id.style.display = "none";
    },
    toggle: (id) => {
      if (getComputedStyle(id).display != "none") {
        id.style.display = "none";
      } else {
        id.style.display = "flex";
      }
    },
  },
  filter: {
    blur: (id, value) => {
      id.style.filter = `blur(${value}px)`;
    },
    none: (id) => {
      id.style.filter = "none";
    },
  },
  opacity: (id, value) => {
    id.style.opacity = value;
  },
};
