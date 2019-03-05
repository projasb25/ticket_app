                </div><!-- /main -->
            </div><!-- /row -->
        </div><!-- /container-fluid -->
        <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            
            $(document).on("click",".hamburguer", function () {
                $('.sidebar').toggleClass('show');
            });
            $(document).ready(function () {
                if($(window).width() < 768) {
                    $(".short-brand").addClass("hamburguer");
                }
            });
            $(window).on('resize', function() {
                if($(window).width() < 768) {
                    $(".short-brand").addClass("hamburguer");
                }else{
                    $(".short-brand").removeClass("hamburguer");
                }
            });
            // function responsive_design(){
            //     if($(window).width() < 992) {
            //         $(".sidebar").addClass("active");
            //         $(".navbar-brand").addClass("active");
            //         $(".navbar-brand").html("TA");
            //         $(".main").addClass("active");
            //     }else{
            //         $(".sidebar").removeClass("active");
            //         $(".navbar-brand").removeClass("active");
            //         $(".navbar-brand").html("TicketAdmin");
            //         $(".main").removeClass("active");
            //     }
            // }
        </script>
    </body>
</html>