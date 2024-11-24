function loaderAnnmation() {

    const tl = gsap.timeline();

    tl.to("nav", {
        opacity: 0,
        delay: -5,
    })

    tl.from(".loader h1", {
        x: 100,
        duration: 0.9,
        opacity: 0,
    })

    tl.to(".loader h1", {
        x: -70,
        duration: 0.8,
        opacity: 0,
    })

    tl.to(".loader", {
        opacity: 0,
        display: `none`,
        duration: 0.5
    })

    tl.to("nav", {
        opacity: 1,
        delay: -1
    })
}

loaderAnnmation();

function menuAnnimation() {

// menu bar scroll event

    window.addEventListener('wheel',(e) => {
        if(e.deltaY < 0){
            gsap.to("nav",{
                top:`0`,
                backgroundColor: `black`,
                duration:0.3,
            })

            gsap.to("nav .ptr3 button",{
                color:`white`,
                border: `1px solid white`,
            })
        }

        else if(e.deltaY > 0){
            gsap.to("nav",{
                top:`-75`,
                duration:0.3,
            })
        }
        
        
    })
}menuAnnimation();


// function profileAnnmation(){
//     const tl2 = gsap.timeline();

//     tl2.to("nav .fullprofile",{
//         zIndex: 99,
//         right: 0,
//         duration: 0.3, 
//         ease: "expo.out",
//     },'a')
    
//     tl2.from("nav .fullprofile i",{
//        x:100,
//        duration:0.3,
//        opacity:0,
//        ease:"expo.out" ,
//     },'a')

//     tl2.pause();

//     const profile = document.querySelector('nav #profile');

//     const corss = document.querySelector('.fullprofile i');

//     profile.addEventListener('click',function(){
//         tl2.play();
//     })
//     corss.addEventListener('click',function(){
//         tl2.reverse();
//     })
// }
// profileAnnmation();



