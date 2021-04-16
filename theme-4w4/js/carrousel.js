(function(){
    let bout1 = document.getElementById("un");
    console.log(bout1.id);
    let bout2 = document.getElementById("deux");
    console.log(bout2.id);
    let bout3 = document.getElementById("trois");
    console.log(bout3.id);
    let carrousel = document.querySelector(".carrousel");
    console.log(carrousel);

    bout1.addEventListener('mousedown', function() {
        carrousel.style.transform = "translate(0)"
    })
    bout2.addEventListener('mousedown', function() {
        carrousel.style.transform = "translate(-100vw)"
    })
    bout3.addEventListener('mousedown', function() {
        carrousel.style.transform = "translate(-200vw)"
    })
}())