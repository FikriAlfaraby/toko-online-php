<?php 
 include "./header.php";
?>
    <section class="image-jumbotron"></section>
    <section class="home">
      <div class="slides-container">
        <div class="slide active">
          <div class="content">
            <span>Jacket Motor</span>
            <h3>up to 30% off</h3>
            <a href="#" class="btn">Shop Now</a>
          </div>
          <div class="image">
            <img
              src="./image/jaket motor.png"
              width="300"
              height="550"
              alt=""
            />
          </div>
        </div>

        <div class="slide">
          <div class="content">
            <span>Kemeja Hitam</span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
          </div>
          <div class="image">
            <img src="./image/kemeja hitam.png" alt="" />
          </div>
        </div>

        <div class="slide">
          <div class="content">
            <span>Kaos Polos Putih</span>
            <h3>up to 20% off</h3>
            <a href="#" class="btn">shop now</a>
          </div>
          <div class="image">
            <img src="image/baju putih.png" alt="" />
          </div>
        </div>
      </div>

      <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
      <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>
    </section>

    <section class="banner-container">
      <div class="banner">
        <img
          src="image/favpng_infant-clothing-designer-clothes-hanger.png"
          alt=""
        />
        <div class="content">
          <span>limited sales</span>
          <h3>up to 50% off</h3>
          <a href="#" class="btn">shop now</a>
        </div>
      </div>

      <div class="banner">
        <img src="image/kindpng_7791173.png" alt="" />
        <div class="content">
          <span>limited sales</span>
          <h3>up to 50% off</h3>
          <a href="#" class="btn">shop now</a>
        </div>
      </div>

      <div class="banner">
        <img
          src="image/favpng_clothes-hanger-floor-clothes-horse-clothing-wardrobe.png"
          alt=""
        />
        <div class="content">
          <span>limited sales</span>
          <h3>up to 50% off</h3>
          <a href="#" class="btn">shop now</a>
        </div>
      </div>
    </section>

<?php 
  include "./footer.php"
?>
