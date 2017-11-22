<footer id="footer" class="footer bg-white">
            <div class="container p-2 p-md-3">
                <div class="image-container d-none d-md-block text-center p-2">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img style="height: 60px;" src="img/as_seen_in.png" alt="image">
                        </li>
                        <li class="list-inline-item">
                            <img style="height: 60px;" src="img/today_show.png" alt="image">
                        </li>
                        <li class="list-inline-item">
                            <img style="height: 60px;" src="img/us_weekly.png" alt="image">
                        </li>
                        <li class="list-inline-item">
                            <img style="height: 60px;" src="img/cosmopolotian.png" alt="image">
                        </li>
                        <li class="list-inline-item">
                            <img style="height: 60px;" src="img/refinery_29.png" alt="image">
                        </li>
                        <li class="list-inline-item">
                            <img style="height: 60px;" src="img/InStyle.png" alt="image">
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" target="_blank"><img src="img/btn_inst.png" alt="Instagram"></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="pin-it-button" href="http://sugarwish.dev/images/sugarwishpins" target="_blank"><img src="img/btn_pntrst.png" alt="Pintrest"></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank"><img src="img/btn_twit.png" alt="Twitter "></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank"><img src="img/btn_facbk.png" alt="Facebook "></a>
                        </li>
                    </ul>
                </div>
                <address class="text-center mb-0 mb-md-2">
                    © 2017 Sugarwish™. All Rights Reserved.
                </address>
                <ul class="list-inline text-right mb-0">
                    <a class="list-inline-item text-dark small" href="#">Privacy Policy</a>
                    <a class="list-inline-item text-dark small" href="#">Terms of Use</a>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/tooltip.min.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(function() {
        // alert($('#footer').outerHeight());
        $('#footer').height($('#footer').outerHeight());
        $('#page-content').css('padding-bottom', $('#footer').outerHeight());
    })
    </script>
</body>

</html>