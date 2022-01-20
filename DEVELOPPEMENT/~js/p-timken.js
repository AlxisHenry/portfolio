let video = document.getElementById("video_projet"),
  frame = document.getElementById("frame_projet"),
  ico_video = document.getElementById("file-video"),
  ico_frame = document.getElementById("file-code"),
  ico_video_info = document.getElementById("info-circle"),
  ico_frame_info = document.getElementById("info-circle_code"),
  info_frame = document.getElementById("infodivframe"),
  info_video = document.getElementById("infodivvideo");

function toggle() {
  if (getComputedStyle(video).display != "none") {
    style.display.none(video);
    style.display.flex(frame);
    style.display.none(ico_video);
    style.display.flex(ico_frame);
    style.display.none(ico_video_info);
    style.display.flex(ico_frame_info);
  } else {
    style.display.flex(video);
    style.display.none(frame);
    style.display.flex(ico_video);
    style.display.none(ico_frame);
    style.display.flex(ico_video_info);
    style.display.none(ico_frame_info);
  }
}

function info_video_up() {
  style.display.flex(info_video);
  sleepFor(100);
  style.filter.blur(video, 4);
  style.opacity(video, 0.5);
}
function info_video_down() {
  style.display.none(info_video);
  sleepFor(100);
  style.filter.none(video);
  style.opacity(video, 1);
}

function info_frame_up() {
  style.display.flex(info_frame);
  sleepFor(100);
  style.filter.blur(frame, 4);
  style.opacity(frame, 0.1);
}
function info_frame_down() {
  style.display.none(info_frame);
  sleepFor(100);
  style.filter.none(frame);
  style.opacity(frame, 1);
}

console.timeEnd("Exécution script JS");
