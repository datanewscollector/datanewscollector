<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			DNC | Dashboard
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
        <?php
	include 'modules/user.php'?>
    <?php
    include "db.php"
    ?>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->

<!--begin:: Widgets/Best Sellers-->
<div class="m-portlet m-portlet--full-height ">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Latest News
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                        Last Month
                    </a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
                        last Year
                    </a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
                        All time
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        <!--begin::Content-->
        <div class="tab-content">
            <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">
                <!--begin::m-widget5-->
                <div class="m-widget5">
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Great Logo Designn
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-label">
                                    author:
                                </span>
                                <span class="m-widget5__info-author-name">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                19,200
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                1046
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Branding Mockup
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                24,583
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                3809
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Awesome Mobile App
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                10,054
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                1103
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::m-widget5-->
            </div>
            <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">
                <!--begin::m-widget5-->
                <div class="m-widget5">
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Branding Mockup
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                24,583
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                3809
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Great Logo Designn
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                19,200
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                1046
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Awesome Mobile App
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                10,054
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                1103
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::m-widget5-->
            </div>
            <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">
                <!--begin::m-widget5-->
                <div class="m-widget5">
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Branding Mockup
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                10.054
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                1103
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Great Logo Designn
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                24,583
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                sales
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                3809
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                    <div class="m-widget5__item">
                        <div class="m-widget5__pic">
                            <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                        </div>
                        <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                                Awesome Mobile App
                            </h4>
                            <span class="m-widget5__desc">
                                Make Metronic Great  Again.Lorem Ipsum Amet
                            </span>
                            <div class="m-widget5__info">
                                <span class="m-widget5__author">
                                    Author:
                                </span>
                                <span class="m-widget5__info-author m--font-info">
                                    Fly themes
                                </span>
                                <span class="m-widget5__info-label">
                                    Released:
                                </span>
                                <span class="m-widget5__info-date m--font-info">
                                    23.08.17
                                </span>
                            </div>
                        </div>
                        <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                                19,200
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                                1046
                            </span>
                        </div>
                        <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                                1046
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                                votes
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::m-widget5-->
            </div>
        </div>
        <!--end::Content-->
    </div>
</div>
<!--end:: Widgets/Best Sellers-->
</div>
     		<!-- begin::Quick Nav -->
		<!--begin::Base Scripts -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Snippets -->
		<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>