gsap.registerPlugin(ScrollTrigger);

var timeline = gsap.timeline();

timeline.from("#vertical-line-h2", {
  x: 100,
  duration: 0.5,
  opacity: 0,

})
timeline.from(".vertical-line", {
  height: 0,
  duration: 0.5,

})

timeline.from("#vertical-line-h1", {
  x: 100,
  duration: 0.5,
  opacity: 0,

})