
  // Fetch news data and populate the Swiper carousel
  function fetchNews() {
    const apiKey = '802ff4436ceb402a9fba802915a47011';
    const url = `https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=${apiKey}`;

    fetch(url)
      .then(response => response.json())
      .then(data => {
        const newsArticles = data.articles.slice(0, 15); // Get first 15 articles

        const swiperWrapper = document.querySelector('.swiper-wrapper');
        swiperWrapper.innerHTML = ''; // Clear existing slides

        newsArticles.forEach(news => {
          const slide = document.createElement('div');
          slide.classList.add('swiper-slide', 'news-slide');

          slide.innerHTML = `
            <a href="${news.url}" target="_blank">
              <img src="${news.urlToImage}" alt="News Image here">
            </a>
            <div class="slide-text">${news.title}</div>
          `;

          swiperWrapper.appendChild(slide);
        });

        // Initialize Swiper carousel
        new Swiper('.mySwiper', {
          slidesPerView: 3,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          loop: true,
          spaceBetween: 50,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
        });
      })
      .catch(error => console.error('Error fetching news:', error));
  }

  // Call fetchNews initially
  fetchNews();

  // Call fetchNews every 24 hours
  setInterval(fetchNews, 24 * 60 * 60 * 1000);

