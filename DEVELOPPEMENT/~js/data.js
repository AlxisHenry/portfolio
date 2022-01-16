const path_to_imgs = "./DEVELOPPEMENT/assets/@img/",
  path_to_html = "./DEVELOPPEMENT/assets/~html/";

const timken = {
    title: "TIMKEN",
    alt: "TIMKEN",
    img: `${path_to_imgs}Timken.png`,
    href: `${path_to_html}projet-timken.html`,
    status: "Not Started",
  },
  snipeit = {
    title: "SNIPE-IT",
    alt: "SNIPE-IT",
    img: `${path_to_imgs}snipeit.png`,
    href: `${path_to_html}projet-snipe-it.html`,
    status: "Not Started",
  },
  aleatory = {
    title: "ALEATORY",
    alt: "ALEATORY",
    img: `${path_to_imgs}aleatory.png`,
    href: "none",
    status: "none",
  },
  style = {
    display: {
      flex: (id) => {
        id.style.display = "flex";
      },
      none: (id) => {
        id.style.display = "none";
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