<section id="last">
        <div class="container">
           <div class="last">
               <p>&copy; 2018 <span class="diff">i</span> ntern Web Template By @ <span><a href="https://www.facebook.com/zahid.shuvro.5" target="_blank">Md. Zahid Hossain</a></span></p>
           </div>
            
        </div>
    </section>
    
    
    
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
-->
   
   

   
    <script src="js/owl.carousel.js"></script>
    <script src="js/isotop.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/isotope-docs.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                navigation: false, // Show next and prev buttons
                slideSpeed: 300
                , paginationSpeed: 400
                , singleItem: true
                    // "singleItem:true" is a shortcut for:
                    // items : 1, 
                    // itemsDesktop : false,
                    // itemsDesktopSmall : false,
                    // itemsTablet: false,
                    // itemsMobile : false
            });
        });
        // http://owlgraphic.com/owlcarousel/index.html#how-to
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination'
            , slidesPerView: 2
            , paginationClickable: true
            , spaceBetween: 30
            , autoplay: true
            , speed: 5000
        });
    </script>
    <script>
        /*-----for swiper----*/
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination'
            , paginationClickable: true
            , spaceBetween: 30
            , slidesPerView: 1
            , effect: ''
            , autoplay: true
            , speed: 4000
        });
    </script>
    
<script>
    $(document).ready(function(){
        
        setInterval(function(){
           
            update_last_activity();
            current_time();
            
        },500);
        
       function update_last_activity(){
           $.ajax({
               url: "chat_update_last_activity.php",
               success:function(){
                   
               }
           })
       }
        function current_time(){
            $.ajax({
                url: "includes/current_time.php",
                success: function(){
                    
                }
            })
        }
    
       
        
        
    });
</script>
</body>

</html>