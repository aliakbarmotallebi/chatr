import "./bootstrap";
import "./slider";
import Alpine from "alpinejs";

Alpine.data("video", () => ({
  play: false,
  toggleVideo(video) {
    if (video.paused) {
      this.play = true;
      video.play();
      return;
    }

    this.play = false;
    video.pause();
    return;
  },
  pauseVideo(video) {
    this.play = false;
    video.pause();
    return;
  }
}));

Alpine.start();
