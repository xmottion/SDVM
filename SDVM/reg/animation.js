document.addEventListener('DOMContentLoaded', function() {
    anime.timeline({loop: false})
      .add({
        targets: 'body',
        opacity: [0, 1],
        easing: 'easeInOutQuad',
        duration: 1500,
      });
  });