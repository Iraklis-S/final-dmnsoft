<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('project/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('project/css/style1.css') }}">
    
  <script src="{{asset('project/js/jquery.min.js')}}"></script>
</head>

<body>

    <style>
        #popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s;
            overflow: hidden;
        }
        
        #popup.hidden {
            opacity: 0;
            pointer-events: none;
        }
        
        #clock {
            /* Styling for the ticking clock background */
            /* You can use CSS animations or JavaScript to implement the ticking effect */
        }
        
        #popup-content {
            text-align: center;
            color: white;
        }
        
        #popup-content h1 {
            font-size: 24px;
        }
        
        #popup-content h2 {
            font-size: 18px;
            margin-top: 10px;
        }
        
        #start-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #009688;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        #animated-gif {
            width: 350px;
             height: 200px;
         }
        </style>
        
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var popup = document.getElementById('popup');
            var startBtn = document.getElementById('start-btn');
        
            // Function to hide the popup when the start button is clicked
            function hidePopup() {
                popup.classList.add('hidden');
            }
        
            // Add an event listener to the start button
            startBtn.addEventListener('click', hidePopup);
        });
        </script>

<div id="popup">
    <div id="clock"></div>
    <div id="popup-content">
        <h1>CLOCK IS TICKING</h1>
        <img id="animated-gif" src="{{asset('project/images/clock.gif')}}" alt=""> 
       
          <h2 class="animate">WIN YOUR FINANCIAL FREEDOM</h2>
        <button id="start-btn">START NOW</button>
    </div>
</div>

  <section>
    <nav class="navbar navbar-expand-lg  fixed-top " data-bs-theme="dark">
      <div class="container-fluid "> 
        <a class="navbar-brand " href="index.html"><span class="sp-1">x-TREME </span><span class="sp-2" > TRADERS</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active " aria-current="page" href="#">Home</a>
            <a class="nav-link " href="#">Accounts</a>
            <a class="nav-link" href="about.html">About</a>
            <a class="nav-link" href="#">Contact Us</a>

          </div>
        
        </div>
        <button id="login-button">SIGN IN</button>
      </div>
    </nav>
  </section>






  <section>

    

    <div id="login-field" class="field">
      <div class="field-content">
        <span class="close">&times;</span>
        <h2>Log In</h2>
        <form>

          <div>
            <label for="userName">Name</label><br>
            <input type="text" id="userName">
          </div>
          <div>
            <label for="userLastName">lastName</label><br>
            <input type="text" id="userLastName">
          </div>
        </form>
      </div>
    </div>

  </section>









  <section id="section3">

    <video src="{{ asset('project/images/Moving Dots.mp4')}}" alt="" autoplay muted loop></video>

    



<h1 class="absol1" data-text="WE ARE THE INDUSTRY LEADERS"> WE ARE THE INDUSTRY LEADERS </h1>

  
  
  </div>
    <div class="option-contain">
      <div class="option-1">
        <button value="HELLO">
          OPEN DEMO ACCOUNT
        </button>
      </div>
      <div class="option-2">
        <button>
          OPEN LIVE ACCOUNT
        </button>
      </div>
    </div>


    <div class="second-absol">
      <div class="absol2">
        
        <div> <span class="class1"> 1000+ </span> <span class="class2">Trading Instruments </span></div>
        <div> <span class="class1">24/7 </span><span class="class2">Trading Crypto CFDs</span> </div>
      
      
         <div> <span class="class1">1000:1 </span><span class="class2">Leverage </span></div>
        <div> <span class="class1">Bonus </span><span class="class2">up to  $5,000</span> </div>
        </div>

  </section>

<br>


  <section id="section4">
<div class="all-contain">
    <div class="big-container">
      <div class="currency-container">



        
  

   
        <div class="c1"> <a href="#tradingview_2cd9b" onclick="changeSymbol('FX_IDC:USDEUR')">
          <i class="fa-solid fa-dollar-sign"></i> </a></div>
    
          

      
        <div class="c1"> <a href="#tradingview_2cd9b" onclick="changeSymbol('FX_IDC:EURUSD')">
          <i class="fa-solid fa-euro-sign"></i>
        </a></div>
     
    
        <div class="c1"> <a href="#tradingview_2cd9b" onclick="changeSymbol('FX_IDC:RUBUSD')">
          <i class="fa-solid fa-ruble-sign"></i> </a> </div>
       

      
        <div class="c1"><a href="#tradingview_2cd9b" onclick="changeSymbol('FX_IDC:GBPEUR')">
          <i class="fa-solid fa-sterling-sign"></i></a></div>
       


          
        <div class="c1"><a href="#tradingview_2cd9b" onclick="changeSymbol('FX_IDC:CHFEUR')">
          <i class="fa-solid fa-franc-sign"></i></a></div>
     


         
        <div class="c1"><a href="#tradingview_2cd9b" onclick="changeSymbol('FX_IDC:JPYUSD')">
          <i class="fa-solid fa-yen-sign"></i></a></div>
   
    

    </div>
 
      <div class="contain-1">
        <div>
          <div class="tradingview-widget-container">
            <div id="tradingview_2cd9b"></div>
            <div class="tradingview-widget-copyright"><a
                href="https://www.tradingview.com/symbols/EURUSD/?exchange=BITSTAMP" rel="noopener"
                target="_blank"><span class="blue-text">EURUSD chart</span></a> by TradingView</div>

          </div>
        </div>
      </div>

</div>
      
      <div class="inside-container">
      
        <div class="question">
          WHY US?
        </div>
        <div class="box"> 

          <div class="normal">
          <span><i class="fa-regular fa-square-check"></i></span> 
          <div class="inside-normal">Low Fees
          <div class="abnormal">0.1% Spread</div>
        </div>
        </div>

        <div class="normal">
          <span><i class="fa-regular fa-square-check"></i></span> 
          <div class="inside-normal">WELCOME BONUS
          <div class="abnormal">UP TO 5K$</div>
        </div>
        </div>

        <div class="normal">
          <span><i class="fa-regular fa-square-check"></i></span> 
          <div class="inside-normal">SECURE
          <div class="abnormal">HIGH-END ENCRYPTION</div>
        </div>
        </div>


        <div class="normal">
          <span><i class="fa-regular fa-square-check"></i></span> 
          <div class="inside-normal">TRUSTWORTHY
          <div class="abnormal">FCA LICENSED</div>
        </div>
        </div>

        <div class="normal">
          <span><i class="fa-regular fa-square-check"></i></span> 
          <div class="inside-normal">DIVERSIFIED
          <div class="abnormal">1000+ TRADING INSTRUMENTS</div>
        </div>
        </div>


        </div>
      </div>
    </div>
</section>
       

    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
      new TradingView.widget(
        {
          "autosize": true,
          "symbol": "BITSTAMP:EURUSD",
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
    </script>

 


<section>

  <div class="container-neon">
    <div>
       <div class="neons ">
        <div class="m-news"><em>MARKET NEWS</em>
          <hr></div>
     
       </div>
    </div>
 </div>
 





  <div class="swiper mySwiper first-swiper">
    <div class="swiper-wrapper">

    <div class="swiper-slide news1"> 
      <a href="https://www.investing.com/news/stock-market-news/us-stocks-are-mixed-as-amazons-cloud-outlook-weighs-on-tech-3067715">
      <img src="images/LYNXNPEB8R0JA_L.jpg"  alt="" ></a>
    <div class="slide-text">U.S. stocks are rising as inflation data meets expectations</div>
  </div>
  
 
  
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>


<hr>

<!-- Swiper -->
<div class="positioned-swiper">
<div class="swiper mySwiper2">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <img src="images/john.PNG" alt="">
        <div class="card-body">
          <h5 class="card-title">REVIEW</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="card-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
</div>












<br>



  <footer>
    <p>INVEST <span>IN</span> YOUR <span>FUTURE</span> NOW ! </p>
<div class="footer-container">
   

<div class="part-1">
  
  <div class="inside1">

    <ul>
      <li>Services</li>
      <li>Email Newsletter</li>
      <li>Trading Campaigns</li>
      <li>Branding</li>
    </ul>
  </div>


  <div class="inside2">
    <ul>
      <li>About</li>
      <li>Our Story</li>
      <li>Benefits</li>
      <li>Team</li>
    </ul>
  </div>


  <div class="inside3">
    <ul>
      <li>Legal</li>
      <li>Privacy Policy</li>
      <li>Terms of Use</li>
      <li>Risk Disclosure</li>
    </ul>
  </div>
</div>


<div class="part-2">
  <div class="login-box ">

  
    <form>
    <div class="card">
      <span class="card__title">Subscribe</span>
      <p class="card__content">Subscribe to our Newsletter for weekly Trading signals.
      </p>
      <div class="card__form">
          <input placeholder="Your Email" type="text">
          <button class="sign-up"> Sign up</button>
      </div>
  </div>
    </form>
  </div>


  
  </div>


</div>





  </footer>
  
  <div class="risk">Risk Disclosure Statement:
    CFDs (Contracts for Difference) are complex financial products and can be risky. 
    It is important to fully understand the risks involved before deciding to trade. 
    CFDs are leveraged products which amplifies potential losses. 
    The underlying markets can be highly volatile, subject to sudden changes in supply and demand, 
    as well as economic and political events. Stop loss orders may not necessarily limit losses. 
    Past performance does not guarantee future results. Trading involves costs such as spreads, 
    commissions, and financing charges. The majority of retail clients lose money trading CFDs. 
    Trade only what you can afford to lose. If in doubt, seek independent advice.
  </div>



 
</div>



  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  
    <script src="{{ asset('project/js/fetch.js') }}"></script>
    <script src="{{ asset('project/js/app.js') }}"></script>

</body>

</html>