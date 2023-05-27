////////////////////Code for the log in button screen/////////////////////////////////////



// Get the login button and the login modal
const loginButton = document.getElementById("login-button");
const loginField = document.getElementById("login-field");

// When the user clicks the login button, display the login modal
loginButton.addEventListener("click", () => {
  // Lower the visibility of the main page
  document.body.style.opacity = "0.5";
  // Display the login modal
  loginField.style.display = "block";
});

// When the user clicks the "X" button, hide the login modal
const closeButton = document.querySelector(".close");
closeButton.addEventListener("click", () => {
  // Restore the visibility of the main page
  document.body.style.opacity = "";
  // Hide the login modal
  loginField.style.display = "none";
});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/// optimised the code > with the symbol parameter so that it can be called with different parameters from the onclick in HTML

function changeSymbol(symbol) {
  var widget = new TradingView.widget(
    {
      "autosize": true,
      "symbol": symbol,
      "interval": "45",
      "timezone": "Etc/UTC",
      "theme": "dark",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": false,
      "container_id": "tradingview_2cd9b"
    }
  );
}


let swiper = new Swiper(".mySwiper2", {
  slidesPerView: 3,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  loop: true,
  spaceBetween: 50,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
