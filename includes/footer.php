   

      <!-- Start Footer 
         ============================================= -->
       <footer class="bg-dark1 text-black mt-5">
         <div class="container">
            <div class="f-items">
               <div class="row">
                <div class="col-md-3">
                    <div class="footer-logo text-center">
                        <img src="assets/img/alrahi-logo.png">
                    </div>
                    <p class="text-center footer-cot">Direct enough off others say eldest may exeter she. Possible all ignorant supplied get settling marriage recurred. Past add size game.Direct enough off others say eldest may exeter she. 
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="f-item contact">
                        <h4 class="widget-title">Links</h4>
                           <ul>
                           <li>
                              <a href="index.html">Home</a>
                           </li>
                           <li>
                              <a href="aboutus.html">About Us</a>
                           </li>
                           <li>
                              <a href="#">Services</a>
                           </li>
                           <li>
                              <a href="#">Employers</a>
                           </li>
                           <li>
                              <a href="#">Man-Power</a>
                           </li>
                           <li>
                              <a href="#">Jobs</a>
                           </li>
                           <li>
                              <a href="#">Temp. Staff</a>
                           </li>
                           <li>
                              <a href="#">Testimonials</a>
                           </li>
                           <li>
                              <a href="#">FAQs</a>
                           </li>
                        </ul>
                     </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="f-item contact">
                        <h4 class="widget-title">Services</h4>
                        <ul>
                           <li>
                              <a href="#">Construction</a>
                           </li>
                           <li>
                              <a href="#">Hospitality and F&B</a>
                           </li>
                           <li>
                              <a href="#">Operation & Maintenance</a>
                           </li>
                           <li>
                              <a href="#">Retail</a>
                           </li>
                           <li>
                              <a href="#">Logistic & Shipping</a>
                           </li>
                           <li>
                              <a href="#">Metro & Rail</a>
                           </li>
                           <li>
                              <a href="#">Facility Management</a>
                           </li>
                           <li>
                              <a href="#">Healthcare Hiring</a>
                           </li>
                           <li>
                              <a href="#">Guarding Service</a>
                           </li>
                        </ul>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="f-item link">
                        <h4 class="widget-title">Contact Us</h4>
                    </div>
                    <div class="adds_cont">
                        <p class="d-flex align-base">
                           <i class="fa-solid fa-location-dot"></i>
                           <span>Office no 504C, Ibn Batuta Gate Office, Dubai, UAE</span>
                        </p>
                        <p class="d-flex align-base">
                            <i class="fa-solid fa-phone"></i>
                            <span>+971529012662</span>
                        </p>
                        <p class="d-flex align-base">
                            <i class="fa-solid fa-envelope"></i>
                            <span>sandy@medictalent.com</span>
                        </p>
                    </div>
                </div>
                  

                

                  

               </div>
            </div>
         </div>
         <!-- Fixed Shape -->


         <!-- End Fixed Shape -->
      </footer>

      <!-- End Footer -->
      <!-- jQuery Frameworks
         ============================================= -->
         <script>
             const map = new L.Map('map');

const openStreetMap = new L.TileLayer(
    `https://tile.openstreetmap.org/{z}/{x}/{y}.png`);

map.setView(new L.LatLng(51.777889, -1.264773), 18);
map.addLayer(openStreetMap);

L.HtmlIcon = L.Icon.extend({
    options: {
        /*
        html: (String) (required)
        iconAnchor: (Point)
        popupAnchor: (Point)
        */
    },

    initialize: function (options) {
        L.Util.setOptions(this, options);
    },

    createIcon: function () {
        var div = document.createElement('div');
        div.innerHTML = this.options.html;
        return div;
    },

    createShadow: function () {
        return null;
    }
});

const markerLocation = new L.LatLng(51.777889, -1.264773);

const HTMLIcon = L.HtmlIcon.extend({
    options : {
        html : "<div class=\"map__marker\"></div>",
    }
});

const customHtmlIcon = new HTMLIcon();

const marker = new L.Marker(markerLocation, {icon: customHtmlIcon});
map.addLayer(marker);

</script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.appear.js"></script>
      <script src="assets/js/jquery.easing.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/modernizr.custom.13711.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/progress-bar.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/jquery.simpleLoadMore.js"></script>
      <script src="assets/js/gsap.min.js"></script>
      <script src="assets/js/jquery.MouseMove.js"></script>
      <script src="assets/js/count-to.js"></script>
      <script src="assets/js/bootsnav.js"></script>
      <script src="assets/js/main.js"></script>

      <script>
          $('i.iconHover').hover(function(){
            $(this).parent().find('.dataSection').toggleClass('active');
          });
      </script>
   </body>
</html>