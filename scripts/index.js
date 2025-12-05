//start  testomensials carousel code
  const slides = [
    {
      text: "“Participating in Paper Middle East exceeded our expectations.<br>we’ll definitely be back next year!”",
      name: "AHMED EL–SAYED",
      title: "SALES DIRECTOR",
      img: "./assets/images/person.png",
      stars: 5
    },
    {
      text: "“MasterCode helped us scale our business with top-notch technology solutions.”",
      name: "SALMA HASSAN",
      title: "PROJECT MANAGER",
      img: "./assets/images/person2.png",
      stars: 4
    },
    {
      text: "“Great team, fast delivery, and excellent quality! Highly recommended.”",
      name: "MOHAMED KHALED",
      title: "OPERATION MANAGER",
      img: "./assets/images/person3.png",
      stars: 5
    }
  ];

  let index = 0;

  const reviewText = document.getElementById("reviewText");
  const activeImg = document.getElementById("activeImg");
  const activeName = document.getElementById("activeName");
  const activeTitle = document.getElementById("activeTitle");
  const starsContainer = document.getElementById("starsContainer");

  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  function renderSlide() {
    const s = slides[index];

    reviewText.innerHTML = s.text;
    activeImg.src = s.img;
    activeName.textContent = s.name;
    activeTitle.textContent = s.title;

    let starsHtml = "";
    for (let i = 0; i < 5; i++) {
      starsHtml += `<i class="fa-${i < s.stars ? "solid" : "regular"} fa-star text-warning"></i>`;
    }
    starsContainer.innerHTML = starsHtml;
  }

  nextBtn.addEventListener("click", () => {
    index = (index + 1) % slides.length;
    renderSlide();
  });

  prevBtn.addEventListener("click", () => {
    index = (index - 1 + slides.length) % slides.length;
    renderSlide();
  });

  renderSlide();

  //end  testomensials carousel code

 window.addEventListener("load", function() {
  const preloader = document.getElementById("preloader");
  setTimeout(() => {
    preloader.style.opacity = "0";
    setTimeout(() => {
      preloader.style.display = "none";
    }, 500);
  }, 1000); // preloader يظل 3 ثواني ثم يختفي
});