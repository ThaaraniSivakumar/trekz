// function pack(){
//     document.querySelector('.vacation').scrollIntoView({
//         behavior:'smooth'
//        });
// }

var empty = document.querySelectorAll(".fa-regular.fa-heart");
empty.forEach(function(emptyHeart) {
    emptyHeart.addEventListener("click", function() {
        var fullHeart = emptyHeart.nextElementSibling;
        var likeText = emptyHeart.parentElement.querySelector(".like");
        
        likeText.innerText = "Liked";
        fullHeart.style.display = "block";
        emptyHeart.style.display = "none";
    });
});
