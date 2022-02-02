const video = document.getElementById("video_projet"),
  frame = document.getElementById("demo_projet"),
  ico_video = document.getElementById("file-video"),
  ico_frame = document.getElementById("file-code"),
  ico_video_info = document.getElementById("info-circle"),
  ico_frame_info = document.getElementById("info-circle_code"),
  info_frame = document.getElementById("infodivframe"),
  info_video = document.getElementById("infodivvideo"),
  togglefunction = document.querySelectorAll(".togglefunction"),
  fainfocircle = document.querySelectorAll(".fa-info-circle"),
  info_projet = document.querySelectorAll('.info-projet');

togglefunction.forEach((this_toggle) =>
  this_toggle.addEventListener("click", () => {
    toggle();
  })
);

fainfocircle.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseover", () => {
    if (getComputedStyle(video).display != "none") {
      display_flex_Video();
    } else {
      display_flex_Frame();
    }
  })
);

info_projet.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseover", () => {
    if (getComputedStyle(video).display != "none") {
      style.display.flex(info_video);
      style.display.none(info_frame);
      style.filter.blur(video, 4);
      style.opacity(video, 0.1);
      fainfocircle[1].classList.add('research-info-function-hover')
    } else {
      style.display.none(info_video);
      style.display.flex(info_frame);
      style.filter.blur(frame, 4);
      style.opacity(frame, 0.1);
      fainfocircle[0].classList.add('research-info-function-hover')
    }
  })
);

fainfocircle.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseout", () => {
    if (getComputedStyle(video).display != "none") {
      display_none_Video();
    } else {
      display_none_Frame();
    }
  })
);

info_projet.forEach((this_toggle) =>
  this_toggle.addEventListener("mouseout", () => {
    style.display.none(info_video);
    style.display.none(info_frame);
    style.filter.blur(frame, 0);
    style.opacity(frame, 1);  
    style.filter.blur(video, 0);
    style.opacity(video, 1);
    fainfocircle[0].classList.remove('research-info-function-hover')
    fainfocircle[1].classList.remove('research-info-function-hover')
  })
);

function toggle() { 
  style.display.toggle(video);
  video.animate([{ opacity: 0 }, 
    { }], 
    {duration: 800,});
  style.display.toggle(frame);
  style.display.toggle(ico_video);
  style.display.toggle(ico_frame);
  style.display.toggle(ico_video_info);
  style.display.toggle(ico_frame_info);
}

function display_none_Video() {
  style.display.none(info_video);
  sleepFor(100);
  style.filter.none(video);
  style.opacity(video, 1);
}

function display_flex_Video() {
  style.display.flex(info_video);
  info_video.animate([{ opacity: 0 }, 
    { }], 
    {duration: 800,});
  sleepFor(100);
  style.filter.blur(video, 4);
  style.opacity(video, 0.1);
}

function display_none_Frame() {
  style.display.none(info_frame);
  sleepFor(100);
  style.filter.none(frame);
  style.opacity(frame, 1);
}

function display_flex_Frame() {
  style.display.flex(info_frame);
  info_frame.animate([{ opacity: 0 }, 
    { }], 
    {duration: 800,});
  sleepFor(100);
  style.filter.blur(frame, 4);
  style.opacity(frame, 0.1);
}

console.timeEnd("Exécution script JS");