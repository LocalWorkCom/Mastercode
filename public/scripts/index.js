//start  testomensials carousel code
  const reviews = Array.from(document.querySelectorAll(".testimonial-data"));
  let index = 0;

  const reviewText = document.getElementById("reviewText");
  const activeImg = document.getElementById("activeImg");
  const activeName = document.getElementById("activeName");
  const activeTitle = document.getElementById("activeTitle");
  const starsContainer = document.getElementById("starsContainer");

  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  function renderSlide() {
    const s = reviews[index];

    reviewText.innerHTML = s.dataset.text;
    activeImg.src = s.dataset.img;
    activeName.textContent = s.dataset.name;
    activeTitle.textContent = s.dataset.title;

    let starsHtml = "";
    const stars = parseInt(s.dataset.stars);

    for (let i = 0; i < 5; i++) {
      starsHtml += `<i class="fa-${i < stars ? "solid" : "regular"} fa-star text-warning"></i>`;
    }
    starsContainer.innerHTML = starsHtml;
  }

  nextBtn.addEventListener("click", () => {
    index = (index + 1) % reviews.length;
    renderSlide();
  });

  prevBtn.addEventListener("click", () => {
    index = (index - 1 + reviews.length) % reviews.length;
    renderSlide();
  });

  document.addEventListener("DOMContentLoaded", renderSlide);

  //end  testomensials carousel code

 window.addEventListener("load", function() {
  const preloader = document.getElementById("preloader");
  setTimeout(() => {
    preloader.style.opacity = "0";
    setTimeout(() => {
      preloader.style.display = "none";
    }, 500);
  }, 1000); //   3 ثواني ثم يختفي
});
