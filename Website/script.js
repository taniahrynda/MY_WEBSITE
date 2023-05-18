const button = document.querySelector(".btn_nav");

// Додати обробник події "click" до кнопки
button.addEventListener("click", function () {
  // Перейти на іншу сторінку
  window.location.href = "sign.html";
});

const form = document.getElementById("registrationForm");

form.addEventListener("submit", (event) => {
  event.preventDefault(); // Зупинити стандартну поведінку форми

  const formData = new FormData(form);

  fetch("/register", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data); // Вивести отримані дані в консоль
      // Додаткові дії після обробки форми
      // ...
    })
    .catch((error) => {
      console.error("Помилка:", error);
    });
});
