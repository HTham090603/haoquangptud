<div class="nav">
      <a class="new" href="#">
        <img alt="New Icon" height="30" src="img/New.png" width="30" />
        Món Mới
      </a>
      <a href="#">
        <img alt="Burger Icon" height="30" src="img/P-BURGER.jpg" width="30" />
        Burger
      </a>
      <a href="#">
        <img alt="Combo Icon" height="30" src="img/P-VALUE-MEALS.jpg" width="30" />
        Combo
      </a>
      <a href="#">
        <img alt="Chicken Icon" height="30" src="img/P-GA-RAN.jpg" width="30" />
        Gà Rán
      </a>
      <a href="#">
        <img alt="Rice Icon" height="30" src="img/P-RICE-KING.png" width="30" />
        Cơm Vui
      </a>
      <a href="#">
        <img alt="Snack Icon" height="30" src="img/P-MON-AN-KEM.png" width="30" />
        Món Ăn Kèm
      </a>
      <a href="#">
        <img alt="Drink Icon" height="30" src="img/P-THUC-UONG.jpg" width="30" />
        Thức Uống
      </a>
      <a href="#" class="contact"> 1900 6960</a>

  </div>
 </div>


  <!-- slide -->
  <div class="slider-container">
    <div class="slides">
        <div class="slide slide-1"></div>
        <div class="slide slide-2"></div>
        <div class="slide slide-3"></div>
    </div>
    <div class="navigation">
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
</div>

  <div class="main container">
    <h1>MENU</h1>
    <div class="product">
      <img alt="Combo Chicken Lover 1P" height="300"
      src="img/burger-american-jr.jpg"
        width="300" />
      <h3>
        COMBO CHICKEN LOVER 1P
      </h3>
      <p>
        1 Miếng gà Giòn (cay/không cay) hoặc 1 Cánh gà BBQ + 1 Burger Bò Phô Mai + 1 Nước ngọt
      </p>
      <div class="price">
        125.000 VND
      </div>
      <a class="cart" href="#">
        <i class="fas fa-shopping-cart">
        </i>
      </a>
    </div>

    <div class="product">
      <img alt="Combo Chicken Lover 2P" height="300"
      src="img/burger-american-jr.jpg"
        width="300" />
      <h3>
        COMBO CHICKEN LOVER 2P
      </h3>
      <p>
        2 Miếng gà Giòn (cay/không cay) hoặc 2 Cánh gà BBQ + 1 Burger Bò Phô Mai + 2 Nước ngọt
      </p>
      <div class="price">
        125.000 VND
      </div>
      <a class="cart" href="#">
        <i class="fas fa-shopping-cart">
        </i>
      </a>
    </div>
    <div class="product">
      <img alt="Combo Family Chicken Lovers" height="300"
      src="img/burger-american-jr.jpg"
        width="300" />
      <h3>
        COMBO FAMILY CHICKEN LOVERS
      </h3>
      <p>
        8 Cánh Gà BBQ + 2 Khoai Tây Chiên (L) + 3 Nước ngọt
      </p>
      <div class="price">
        265.000 VND
      </div>
      <a class="cart" href="#">
        <i class="fas fa-shopping-cart">
        </i>
      </a>
    </div>
    <div class="product">
      <img alt="Gà Giòn Crispy" height="300"
      src="img/burger-american-jr.jpg"
        width="300" />
      <h3>
        GÀ GIÒN CRISPY
      </h3>
      <p>
        1 Miếng Gà Giòn Crispy (không cay)
      </p>
      <div class="price">
        45.000 VND
      </div>
      <a class="cart" href="#">
        <i class="fas fa-shopping-cart">
        </i>
      </a>
    </div>
    <div class="product">
      <img alt="Gà Giòn Flamin'" height="300"
      src="img/burger-american-jr.jpg"
        width="300" />
      <h3>
        GÀ GIÒN FLAMIN'
      </h3>
      <p>
        1 Miếng Gà Giòn
      </p>
      <div class="price">
        45.000 VND
      </div>
      <a class="cart" href="#">
        <i class="fas fa-shopping-cart">
        </i>
      </a>
    </div>
    <div class="product">
      <img alt="Gà BBQ (1 Miếng)" height="300"
      src="img/burger-american-jr.jpg"
        width="300" />
      <h3>
        GÀ BBQ (1 Miếng)
      </h3>
      <p>
        1 Miếng Gà BBQ
      </p>
      <div class="price">
        45.000 VND
      </div>
      <a class="cart" href="#">
        <i class="fas fa-shopping-cart">
        </i>
      </a>
    </div>
  </div>
</body>
<footer>
  <div class="ft row">
    <div class="footer1 col-3">
      <div class="icon"><i class="fas fa-drumstick-bite"></i></div>
      <h2>GÀ GIÒN CHUẨN TƯƠI 100%</h2>
      <p>Thưởng thức gà rán giòn tan, sử dụng gà tươi 100% từ nông trại</p>
  </div>
  <div class="footer1 col-3">
      <div class="icon"><i class="fas fa-glass-whiskey"></i></div>
      <h2>NƯỚC NGỌT UỐNG KHÔNG GIỚI HẠN</h2>
      <p>Uống nước ngọt thoải mái với concept refill miễn phí</p>
  </div>
  <div class="footer1 col-3">
      <div class="icon"><i class="fas fa-store"></i></div>
      <h2>DỊCH VỤ CHUYÊN NGHIỆP & KHÔNG GIAN HIỆN ĐẠI</h2>
      <p>Trải nghiệm phong cách phục vụ chuyên nghiệp & không gian cực kool</p>
  </div>
  </div>

<script>
  let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }
    
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
}

// Tự động chuyển slide mỗi 3 giây
setInterval(() => {
    changeSlide(1);
}, 3000);
</script>