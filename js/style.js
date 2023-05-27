const questionCards = document.querySelectorAll(".card");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");
currentpage  = document.querySelector(".currentpage");
const questionsPerPage = 10;
let currentPage = 0;

function showPage(pageIndex) {
  for (let i = 0; i < questionCards.length; i++) {
    currentpage.textContent = " Page " + (pageIndex + 1);
    if (i >= pageIndex * questionsPerPage && i < (pageIndex + 1) * questionsPerPage) {
      questionCards[i].style.display = "block";
    } else {
      questionCards[i].style.display = "none";
    }
  }
}

function setActiveButton(pageIndex) {
  const paginationLinks = document.querySelectorAll(".pagination a");
  for (let i = 0; i < paginationLinks.length; i++) {
    paginationLinks[i].classList.remove("active");
  }
  paginationLinks[pageIndex].classList.add("active");
}

function handlePrevButtonClick() {
  if (currentPage > 0) {
    currentPage--;
    showPage(currentPage);
    setActiveButton(currentPage);
  }
}

function handleNextButtonClick() {
  if (currentPage < Math.ceil(questionCards.length / questionsPerPage) - 1) {
    currentPage++;
    showPage(currentPage);
    setActiveButton(currentPage);
  }
}

showPage(currentPage);
setActiveButton(currentPage);
prevBtn.addEventListener("click", handlePrevButtonClick);
nextBtn.addEventListener("click", handleNextButtonClick);



