document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll(".rating .fa-star");

    stars.forEach((star, index) => {
        star.addEventListener("click", function () {
            resetStars(); // Reset semua bintang ke keadaan semula
            setRating(index + 1); // Atur peringkat berdasarkan indeks bintang yang diklik
        });
    });

    function setRating(rating) {
        for (let i = 0; i < rating; i++) {
            stars[i].classList.add("checked");
        }
        // Simpan nilai rating di dalam atribut data
        document.querySelector(".rating").setAttribute("data-rating", rating);
    }

    function resetStars() {
        stars.forEach((star) => {
            star.classList.remove("checked");
        });
    }
});
