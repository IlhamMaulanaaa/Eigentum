const notificationCard = document.querySelectorAll(".notification_card");
const seen = document.querySelectorAll(".seen");
const bell = document.querySelectorAll(".bell");
const date = document.querySelector(".date");
const dateYesterday = document.querySelector(".date-yesterday");
const markAsAll = document.querySelector("#mark_as_all");
const notifications = document.querySelector("#notifications");

let today = new Date();
let dd = String(today.getDate()).padStart(2, "0");
let ddminone = String(today.getDate() - 1).padStart(2, "0");
let mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
let yyyy = today.getFullYear();
today = dd + "/" + mm + "/" + yyyy;
yesterday = ddminone + "/" + mm + "/" + yyyy;
date.innerHTML = today;
dateYesterday.innerHTML = yesterday;
//Length calculation of notification
let noti = bell.length;
notifications.innerText = noti;

notificationCard.forEach((notiCard) => {
  markAsAll.addEventListener("click", () => {
    notiCard.style.backgroundColor = "#151515";

    notifications.innerHTML = "0";
    bell.forEach((bells) => {
      bells.classList.add("active");
    });
    seen.forEach((see) => {
      see.innerHTML = "terlihat <i class='bx bx-check-double' ></i>";
    });
  });
});

notificationCard.forEach((noticard, index) => {
  noticard.addEventListener("click", () => {
    noticard.classList.remove("unseen");
    bells(index);
    seens(index);
    console.log(index);
  });
});
function bells(indexs) {
  bell.forEach((names, index) => {
    if (indexs === index) {
      noti--;
      if (noti >= 0) {
        notifications.innerHTML = noti;
        names.classList.add("active");
      }
    }
  });
}
function seens(indexs) {
  seen.forEach((names, index) => {
    if (indexs === index) {
      names.innerHTML = "terlihat <i class='bx bx-check-double' ></i>";
    }
  });
}
