<div class="call-button">
    

    <a href="tel:09124802295" class="btn btn-success">تماس <i class="fas fa-phone"></i></a>
</div>
<footer id="footer" class=""  >
    <div class="container">
        <div class="footer-widgets-wrap clearfix p-2" >
            <div class="col-md-3" >
                <div class="widget clearfix">
                    <div class="clearfix" style="padding: 0; ">
                            <strong>ایمیل:</strong> <span dir="ltr"> info@remotekhodro.com </span>
                    </div><br>
                </div>
            </div>
            <div class="col-md-3">
                <div>ما را در شبکه های اجتماعی دنبال کنید</div>
                <br>
                <a href="https://www.instagram.com/iranunlocks/" class=" topmargin-sm">
                    Instagram
                </a>
            </div>
            <div class="col-md-6" >
                تلفن های تماس:
                <br>
                <a href="tel:02144299069">021-44299069</a> , <a href="tel:02144299085">021-44299085</a> , <a href="tel:09124802295">09124802295</a> , <a href="tel:09385881754">09385881754</a>
                <br>
                 <a href="tel:02126154238">021-26154238</a> , <a href="tel:02122297397">021-22297397</a>
                <br>
                شعبه اصلی: تهران، آجودانیه(شهید سباری)، بلوار محمدی، خیابان البرز، مجتمع خودرویی البرز
                <br>
                شعبه ۲: جلال آل احمد شرق به غرب نرسیده به اشرفی اصفهانی خیابان شایق شمالی جنب کوچه هفتم نگین غرب
            </div>
        </div>
    </div>
    <div id="copyrights" class="p-1">
        <div class="container clearfix">

            <div class="col_full nomargin  center rtl">
                <div class="copyrights-menu copyright-links clearfix ">
                    <a href="<?=RELA_DIR?>">خانه</a>/<a href="<?=RELA_DIR?>contactus">تماس با ما</a>/<a href="<?=RELA_DIR?>aboutus">درباره ما</a>
                </div>
            </div>
            <div class="col_full nomargin  center rtl fontsize10">تمامی حقوق وبسایت متعلق با سایت ساخت ریموت می باشد.</div>
        </div>
    </div>
</footer>
</div>
<div id="gotoTop" class="icon-angle-up"></div>
 <script type="text/javascript" src="<?=TEMPLATE_DIR?>js/jquery.js"></script>
<? /* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> */?>
<? /* <script type="text/javascript" src="<?=TEMPLATE_DIR?>js/plugins.js"></script>*/?>
<? /*<script type="text/javascript" src="<?=TEMPLATE_DIR?>js/functions.js"></script> */ ?>
<? /*
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
 */?>
<? /*
 <script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

 <script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_DIR?>include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
 */?>
<script type="text/javascript">
    var tpj=jQuery;
    tpj.noConflict();
    tpj(document).ready(function() {
        tpj('#primary-menu-trigger').click(function () {
            tpj('ul.norightborder.norightpadding.norightmargin').toggleClass('show');
        })
    });
</script>
<? /*<script type="text/javascript">
    jQuery(document).ready(function($){
        var $faqItems = $('#faqs .faq');
        if( window.location.hash != '' ) {
            var getFaqFilterHash = window.location.hash;
            var hashFaqFilter = getFaqFilterHash.split('#');
            if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
                $('#portfolio-filter li').removeClass('activeFilter');
                $( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
                var hashFaqSelector = '.' + hashFaqFilter[1];
                $faqItems.css('display', 'none');
                if( hashFaqSelector != 'all' ) {
                    $( hashFaqSelector ).fadeIn(500);
                } else {
                    $faqItems.fadeIn(500);
                }
            }
        }

    });
</script> */?>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137723846-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-137723846-5');
    </script>

</body>
</html>