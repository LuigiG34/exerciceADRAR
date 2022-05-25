// the carouselIndex[0] now starts at carouselIndex[1]
let carouselIndex = 1;

// next img
let nextBtn = document.getElementById('next');

// previous img
let previousBtn = document.getElementById('previous');

// on click show next img
nextBtn.addEventListener("click", () => {
    showCarousel(carouselIndex += 1);
})

// on click show previous img
previousBtn.addEventListener("click", () => {
    showCarousel(carouselIndex -= 1);
})

// show img n = index
function showCarousel(n) {
    
    // declare i
    let i;
    
    // array of carousel images
    let carouselArray = document.querySelectorAll('.carousel-img');

    // if index is bigger than the arrays length than go back to start
    if (n > carouselArray.length){
        carouselIndex = 1;
    }

    // if index is smaller than 1 than go to the last image
    if (n < 1){
        carouselIndex = carouselArray.length;
    }

    // each time remove the class ".active" from the last/previous img
    for(i = 0; i < carouselArray.length; i++){
        carouselArray[i].classList.remove("active");
    }

    // adds the class ".active" to each new img
    carouselArray[carouselIndex-1].classList.add("active");
}
