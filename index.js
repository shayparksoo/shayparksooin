function pageTransition() {
    var tl = gsap.timeline();
    tl.to(".loading-screen", {
        duration: 0.5,
        scaleX: -1,
        transformOrigin: "bottom left",
        stagger: .2,
        width: "100%",
        left: "0%",
        ease: "expo.easeInOut"
    });

    // Hiding the elements
    tl.to(".loading-screen", {
        duration: 1,
        width: "100%",
        left: "100%",
        ease: "Expo.easeInOut",
    });
    tl.set(".loading-screen", { left: "-100%" });
}

function contentAnimation() {
    var tl = gsap.timeline();
    tl.from('.fade-in', { 
        duration: .5, 
        x:-30, 
        opacity: 0, 
        stagger: 0.125, 
    });
}

$(function() {
    barba.init({
        sync: true, 
        
        transitions: [
            {   // current page leave 
                async leave(data) {
                    const done = this.async();
                    pageTransition();
                    // await delay(50);
                    done();
                },
                // next page transition
                async enter(data) {
                    contentAnimation();
                },
                // current page once transition
                async once(data) {
                    contentAnimation();
                },
            },
        ],
    });
});


// $(function() {

//     var lazyLoadInstance = new LazyLoad({

//     });
// });


// window.onscroll = function() {myFunction()};

// var gn = document.getElementById("gn");

// var sticky = gn.offsetTop;

// function myFunction() {

//     if (window.pageYOffset >= sticky) {
//     gn.classList.add("sticky")
//   } else {
//     gn.classList.remove("sticky");
//   }

// }