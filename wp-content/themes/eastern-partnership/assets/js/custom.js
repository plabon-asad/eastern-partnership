

$(function (){
    console.log('Js Nice Working...');
    let bannerH2 = $('.banner-content h2'),
        bannerP = $('.banner-content p')



    gsap.fromTo(
        [bannerH2, bannerP],
        {x: -100, opacity: 0.5},
        {x: 0, opacity: 1, duration: 1, ease: "back.out(1.7)", stagger: 0.2 } )

    // let tl = gsap.timeline();
    // tl.fromTo( bannerH2, {x: -100}, {x: 0, ease: "back.out(1.7)" } )
    //     .fromTo(
    //         bannerP,
    //         {x: -100, opacity: 0.5},
    //         {x: 0, opacity: 1, ease: "back.out(1.7)"}
    //         )
    // gsap.fromTo( bannerContent, {x: -100}, {x: 0, ease: "back.out(1.7)" } )
})