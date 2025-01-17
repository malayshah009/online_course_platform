var li_items = document.querySelectorAll(".sidebar ul li");
var hamburger = document.querySelector(".hamburger");
var wrapper = document.querySelector(".wrapper");
// let t4 = document.querySelector(".T-4");
// let tp4 = document.querySelector(".TP-4");
let topicSub = document.querySelectorAll(".topic-sub");
let topicMain = document.querySelectorAll(".content");

li_items.forEach((li_item) => {
  li_item.addEventListener("mouseenter", () => {
    if (wrapper.classList.contains("click_collapse")) {
      return;
    } else {
      li_item.closest(".wrapper").classList.remove("hover_collapse");
    }
  });
});

li_items.forEach((li_item) => {
  li_item.addEventListener("mouseleave", () => {
    if (wrapper.classList.contains("click_collapse")) {
      return;
    } else {
      li_item.closest(".wrapper").classList.add("hover_collapse");
    }
  });
});

// Optional Responsive

// hamburger.addEventListener("click", () => {
//     hamburger.closest(".wrapper").classList.toggle("click_collapse");
//     hamburger.closest(".wrapper").classList.toggle("hover_collapse");
// });

let arr = [1, 2, 3, 4];

topicSub.forEach((el, i) => {
  el.classList.add(`T-${i + 1}`);
});

topicMain.forEach((el, i) => {
  el.classList.add(`TP-${i + 1}`);
});

topicSub.forEach((el, i) => {
  el.addEventListener("click", (e) => {
    e.preventDefault();
    topicMain[i].scrollIntoView({ behavior: "smooth" });
    console.log(i + 1);
  });
});
