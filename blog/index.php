

    

<!--==================== Blog Listing Page Code ====================-->

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog:  DB Management tips & Insights| GeoPITS</title>
	<meta name="description" content="Check out GeoPITS perspective on database, cloud, infrastructure, data management, business intelligence, and development by visiting our blog.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="Blog:  DB Management tips & Insights| GeoPITS">
    <meta property="og:description" content="Check out GeoPITS perspective on database, cloud, infrastructure, data management, business intelligence, and development by visiting our blog.">
    <meta property="og:image" content="/assets/images/home/home-banner.webp">
	
	      	<link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="../assets/images/favicon.png">
	<!-- CSS
        ============================================ -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
	<!-- Font Family CSS -->
	<link rel="stylesheet" href="../assets/css/vendor/cerebrisans.css">
	<!-- FontAwesome CSS -->
	<link rel="stylesheet" href="../assets/css/vendor/fontawesome-all.min.css">
	<!-- Swiper slider CSS -->
	<link rel="stylesheet" href="../assets/css/plugins/swiper.min.css">
	<!-- animate-text CSS -->
	<link rel="stylesheet" href="../assets/css/plugins/animate-text.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="../assets/css/plugins/animate.min.css">
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="../assets/css/select2.min.css">
	<!-- Light gallery CSS -->
	<link rel="stylesheet" href="../assets/css/plugins/lightgallery.min.css">
	<!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
	<!--
        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        -->
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="../assets/css/style.css"> 

	<!-- Start of Async Drift Code -->
<!-- End of Async Drift Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="../gtag/js.js?id=UA-100125040-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100125040-1');
</script>
<style>
    .categories-list{
        list-style: none;        
    }
    blockquote{
        border-left: none;
        margin: 0 !important;
        padding: 0;
        color: inherit;
        font-size: inherit;
        font-weight: inherit;
    }
    .ht-large-box-images.style-03 .content .heading{
        min-height: 90px !important;
    }
    .ht-large-box-images.style-03 .content .heading{
        -webkit-line-clamp: 3
    }
    div.text{
        display: -webkit-box;
        -webkit-line-clamp: 3 !important;
        overflow: hidden;
        -webkit-box-orient: vertical;
        font-weight: normal !important;
    }
    div.text strong{
        font-weight: normal;
    }
    h5.heading{
        text-transform: capitalize !important;
    }
    .box-images-arrow span.button-text{
        margin-right:4px;
    }
    .blog-thumbnail{
        height:250px !important; 
        object-fit:cover; 
        width:100%
    }
</style>
</head>
<body>
	
<!--====================  header area ====================-->
	<div class="header-area header-area--default">
		<!-- Header Top Wrap Start -->
	        	<div class="header-top-wrap bg-theme-default border-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="text-center top-message text-white">
						    <a href="../sql-compare.html" target="_blank" rel="nofollow noopener"> Get a free demo of our new SQL Compare Tool ➔  </a>
						 </p>
					</div>
				</div>
			</div>
		</div>		<!-- Header Top Wrap End -->
		<!-- Header Bottom Wrap Start -->
		<div class="header-bottom-wrap  bg-white header-sticky">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="header position-relative">
							<!-- brand logo -->
							<div class="header__logo">
								<a href="../index.php"> <img src="../assets/images/logo/geopits-logo.svg" class="img-fluid" alt="GeoPITS Logo"> </a>
							</div>
							<div class="header-right">
								<!-- navigation menu -->
								<div class="header__navigation menu-style-three d-none d-xl-block">
									<nav class="navigation-menu">
										<ul class="d-flex align-items-center">
											<li class="has-children has-children--multilevel-submenu"> <a href="../services.html"><span>Services</span></a>
												<!-- multilevel submenu -->
												<ul class="submenu min-width-304">
                                                    <li><a href="../remote-support-dba-services.php"><span>SQL Server DBA Remote Support</span></a></li>
                                                    <li><a href="../sql-server-dba-managed-services.php"><span>SQL Server Managed Services</span></a></li>
                                                    <li><a href="../cloud-database-management-services.php"><span>SQL on Cloud</span></a></li>
                                                    <li><a href="../sql-server-consulting-services.php"><span>Database Consulting</span></a></li>
                                                    <li><a href="../data-engineering-services.php"><span>Data Engineering</span></a></li>
                                                    <li><a href="../database-migration-services.php"><span>Database Migration</span></a></li>
                                                    <li><a href="../sql-performance-tuning-and-analysis.php"><span>Database Performance Tuning</span></a></li>
                                                    <li><a href="../analytics-and-bi-services.php"><span>Analytics &amp; BI</span></a></li>
                                                    <li><a href="../data-integration-services.php"><span>Data Integration</span></a></li>
                                                    <li><a href="../application-development-services.php"><span>Enterprise Application Development</span></a></li>
                                                    <li><a href="../speedcloud-servers.php"><span>SpeedCloud™</span></a></li>
                                                    <li><a href="../sql-compare.php"><span>SQL Compare Tool</span></a></li>
                                                </ul>
											</li>
											<li class="has-children has-children--multilevel-submenu"><a><span>About</span></a>
												<!-- multilevel submenu -->
												<ul class="submenu">
													<li><a href="../our-story.php"><span>The startup story</span></a></li>
													<li><a href="../about-our-team.php"><span>Our Team</span></a></li>
													<li><a href="../clients.php"><span>Clients</span></a></li>
													
													<li><a href="../recognition.php"><span>Recognition</span></a></li>
													<li><a href="../careers/index.php" class="hover-style-link"><span>Careers</span></a></li>
												</ul>
											</li>
											<li><a href="../case-studies/index.php"><span>Case Studies</span></a></li>
											<li class="has-children has-children--multilevel-submenu"><a><span>Resources</span></a>
												<!-- multilevel submenu -->
												<ul class="submenu">
													<li><a href="index.php"><span>Blog</span></a></li>
													<li><a href="../sql-server/index.php"><span>SQL Features Explorer</span></a></li>
												</ul>
											</li>
											<!--<li><a href=""><span>Blog</span></a></li>-->
											<li><a href="/contact"><span>Contact Us</span></a></li>
											<li><a href="../get-free-db-audit.php" class="ht-btn ht-btn-sm text-white">Get Free DB Audit</a></li>
										</ul>
									</nav>
								</div>
								<!-- mobile menu -->
								<div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger"><i></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Bottom Wrap End -->
	</div>
	<!--====================  End of header area  ====================-->
		<div class="site-wrapper-reveal">
		<div class="section-space--pt_80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- section-title-wrap Start -->
						<div class="section-title-wrap text-center section-space--mb_40">
							<h1 class="mb-20"><span class="text-color-primary">
							    Blogs							</span></h1>
						
						</div>
						<!-- section-title-wrap Start -->
					</div>
				</div>
			</div>
		</div>

		<div class="section-space--ptb_80">
			<div class="container">
			    <div class="row">
			        <div class="col-lg-8 col-md-8">
			        <div class="row">
			         
			        			            
			            				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="top-7-things-to-look-for-in-a-managed-dba-service-provider.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/copying-multiple-tables-from-one-database-to-another-database-using-import-or-export-wizard/01.jpeg" class="img-fluid" alt="Placeholder Image">
                				     
                				<div class="content">
                					<h5 class="heading">Top 7 things to look for in a Managed DBA service provider</h5>
                					<div class="text"> To ensure database security, support, and maintenance, most businesses are turning to Managed Services Providers . GeoPITS has come up with 7 factors to help you evaluate and choose the best service provider</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="top-5-new-features-of-sql-server-2019.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/copying-multiple-tables-from-one-database-to-another-database-using-import-or-export-wizard/01.jpeg" class="img-fluid" alt="Placeholder Image">
                				     
                				<div class="content">
                					<h5 class="heading">Top 5 New Features of SQL Server 2019</h5>
                					<div class="text"> SQL Server 2019 is available for both Linux and Windows versions with added support for Kubernetes and containers.With the support for big data built-in, SQL 2019 brings added security and compliance features, improved availability, performance, and advanced analytics to all your data workload.</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="what-is-a-cloud-database.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/copying-multiple-tables-from-one-database-to-another-database-using-import-or-export-wizard/01.jpeg" class="img-fluid" alt="Placeholder Image">
                				     
                				<div class="content">
                					<h5 class="heading">What is a Cloud Database?</h5>
                					<div class="text"> A cloud database is basically a type of database service built, deployed, accessed,  and delivered through a private, public, or hybrid cloud computing platform.</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="top-5-cloud-databases-of-2021.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/top-5-cloud-databases-of-2021/top5-cover-image.jpeg" alt="">
                				         
                				<div class="content">
                					<h5 class="heading">Top 5 Cloud Databases of 2021</h5>
                					<div class="text"> Cloud databases help reduce database cost and complexity. This blog lists the top five cloud databases to look for in 2021.</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="outsourcing-database-administration-everything-you-must-know.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/outsourcing-database-administration-everything-you-must-know/01.jpg" alt="">
                				         
                				<div class="content">
                					<h5 class="heading">Outsourcing Database Administration: Everything you must know</h5>
                					<div class="text"> In today&#039;s data driven world, companies need databases to handle all the data. Maintaining a database is expensive for company. Solution - Outsourcing databases to experts.</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="important-aspects-of-database-security.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/important-aspects-of-database-security/01.jpg" alt="">
                				         
                				<div class="content">
                					<h5 class="heading">Important aspects of database security</h5>
                					<div class="text"> This article outlines how a company can make sure that their database is fully managed and secured against data breaches.</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="when-to-perform-a-sql-server-health-check.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/performance-health-check-img.jpeg" alt="">
                				         
                				<div class="content">
                					<h5 class="heading">When to perform a SQL server health check?</h5>
                					<div class="text"> A healthy database is essential for staff productivity, customer satisfaction and keeping your company’s efficiency high</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="copying-multiple-tables-from-one-database-to-another-database-using-import-export-wizard.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/copying-multiple-tables-from-one-database-to-another-database-using-import-or-export-wizard/01.jpeg" alt="">
                				         
                				<div class="content">
                					<h5 class="heading">COPYING MULTIPLE TABLES FROM ONE DATABASE TO ANOTHER DATABASE USING IMPORT / EXPORT WIZARD</h5>
                					<div class="text"> SQL Server Import Export Wizard is one of the many ways to perform table’s data and schema copy process from one DB to another.</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="sql-server-integration-services-ssis-etl-process-basics-part-1.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/sql-server-integration-services-ssis-etl-process-basics-part-1/01.jpeg" alt="">
                				         
                				<div class="content">
                					<h5 class="heading">SQL Server Integration Services (SSIS) ETL Process -Basics Part 1</h5>
                					<div class="text"> This article is for beginners and outlines the basics of SSRS to create reports.</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                     				        				                            <div class="col-lg-6 col-md-6 wow move-up animated" style="visibility: visible;">
                	<!-- ht-box-icon Start -->
                		<a href="backing-up-a-single-table-with-its-data-from-a-database-and-restoring-it-on-different-database.html" class="ht-large-box-images style-03">
                			<div class="large-image-box">
                				                				        <img class="blog-thumbnail" src="../howdymanage/uploads/image/blogs/backing-up-a-single-table-with-its-data-from-a-database-and-restoring-it-on-different-database/01.jpeg" alt="">
                				         
                				<div class="content">
                					<h5 class="heading">Backing up a single table with its data from a database and restoring it on different database</h5>
                					<div class="text"> This article outlines one of the many ways of backing up a single table with its data from a database and restore it into another in SQL Server</div>
                					<div class="box-images-arrow"><span class="button-text">Read More</span><i class="far fa-long-arrow-right"></i> </div>
                				</div>
                			</div>
                		</a>
                		<!-- ht-box-icon End -->
                	</div>
                	                	    
                        <div class="col-lg-12 wow move-up animated" style="visibility: visible;">
                		    <div class="ht-pagination mt-30 pagination justify-content-center">
                                <div class="pagination-wrapper">
                                    <ul class="page-pagination">
                                                                                
                                                                                    <li><a class="next page-numbers" href="index-1.htm?pg=2">Next</a></li>
                                                                                
                                    </ul>
                                </div>
                            </div>
                        </div>
                	                     				         				    					
				</div>
			    </div>
			    <div class="col-lg-3 col-md-4 offset-md-1 text-center">
			        <h6 class="mb-3">Categories</h6>
			        <ul class="list-group">
			            			                <li> <a href="categories/general.html" class="list-group-item">General</a> </li> 
			            			                <li> <a href="categories/configuration.html" class="list-group-item">Configuration</a> </li> 
			            			                <li> <a href="categories/migration.html" class="list-group-item">Migration</a> </li> 
			            			                <li> <a href="categories/etl.html" class="list-group-item">ETL</a> </li> 
			            			                <li> <a href="categories/security.html" class="list-group-item">Security</a> </li> 
			            			                <li> <a href="categories/new-features.html" class="list-group-item">New Features</a> </li> 
			            			                <li> <a href="categories/high-availability.html" class="list-group-item">High Availability</a> </li> 
			            			                <li> <a href="categories/replication.html" class="list-group-item">Replication</a> </li> 
			            			                <li> <a href="categories/backup.html" class="list-group-item">Backup</a> </li> 
			            			                <li> <a href="categories/alerts.html" class="list-group-item">Alerts</a> </li> 
			            			                <li> <a href="categories/troubleshooting.html" class="list-group-item">Troubleshooting</a> </li> 
			            			                <li> <a href="categories/performance-tuning.html" class="list-group-item">Performance Tuning</a> </li> 
			            			                <li> <a href="categories/mongodb.html" class="list-group-item">MongoDB</a> </li> 
			            			                <li> <a href="categories/azure.html" class="list-group-item">Azure</a> </li> 
			            			        </ul>
			    </div>
			    </div>
			</div>
		</div>
		
		<!--========== Call to Action Area Start ============-->
		<div class="cta-image-area_one service-contact-bg section-space--ptb_80">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-8 col-lg-7">
						<div class="cta-content md-text-center">
							<h3 class="heading text-white">We run all kinds of Database services that vow your <span class="text-black"> success</span></h3> </div>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="cta-button-group--one text-center"> <a href="/contact" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span>Schedule Free Consultation</a> <a href="/contact" class="btn btn--secondary  btn-two"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span>Get Quote</a> </div>
					</div>
				</div>
			</div>
		</div>
		<!--========== Call to Action Area End ============-->
	</div>

    <!--====================  footer area ====================-->
	<div class="footer-area-wrapper bg-gray">
		<div class="footer-area section-space--ptb_80">
			<div class="container">
				<div class="row footer-widget-wrapper">
					<div class="col-sm-6 col-md-3 col-lg-3 footer-widget">
						<div class="footer-widget__logo mb-30"> <img src="../assets/images/logo/geopits-logo.svg" height="48" alt=""> </div>
						<a href="../maps/place/Geo Platinum IT Services - GeoPITS/@13.0251289,77.6590475,15z/data=!4m5!3m4!1s0x00x5c431b47e03582ec!8m2!3d13.0251289!4d77.6590475.html" target="_blank">
						<ul class="footer-widget__list">
							<li>Geo Platinum IT Services,</li>
							<li>No 3, 5th Cross, 1stFloor, P &amp; T Layout,</li>
							<li>Horamavu, Kalyan Nagar Post,</li>
							<li>Bengaluru, Karnataka 560043</li>
						</ul>
						</a>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-2 footer-widget">
						<h6 class="footer-widget__title mb-20">Quick links</h6>
						<ul class="footer-widget__list">
							<li><a href="../remote-support-dba-services.html" class="hover-style-link">SQL Server Remote Support</a></li>
							<li><a href="../sql-server-dba-managed-services.html" class="hover-style-link">SQL Server Managed Services</a></li>
							<li><a href="../sql-performance-tuning-and-analysis.html" class="hover-style-link">Performance Tuning</a></li>
							<li><a href="../database-migration-services.html" class="hover-style-link">Database Migration</a></li>
							<li><a href="../speedcloud-nxtgen-cost-calculator.html" class="hover-style-link">SpeedCloud™ Cost Calculator</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-2 footer-widget">
						<h6 class="footer-widget__title mb-20">Resources</h6>
						<ul class="footer-widget__list">
							<li><a href="../view/ypy9kjpvygmtwtse.html" target="_blank" class="hover-style-link">Company Brochure</a></li>
							<li><a href="../view/m8tfufz6pdw6gu7m.html" target="_blank" class="hover-style-link">Managed Services Portfolio</a></li>
							<li><a href="../view/gnubq5zu95hran8g.html" target="_blank" class="hover-style-link">Performance Tuning Portfolio</a></li>
							<li><a href="../sql-server/index.htm"><span>SQL Features Explorer</span></a></li>
							<li><a href="../sql-compare.html"><span>SQL Compare Tool</span></a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-2 footer-widget">
						<h6 class="footer-widget__title mb-20">More About Us</h6>
						<ul class="footer-widget__list">
							<li><a href="../our-story.html" class="hover-style-link">Our Startup Story</a></li>
							<li><a href="../about-our-team.html" class="hover-style-link">Our Team</a></li>
							<li><a href="../clients.html" class="hover-style-link">Our Clients</a></li>
							<li><a href="../careers/index.htm" class="hover-style-link">Careers</a></li>
							<li><a href="../privacy-policy.html" class="hover-style-link">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-2 footer-widget">
						<h6 class="footer-widget__title mb-20">Contact</h6>
						<ul class="footer-widget__list">
							<li><a href="tel:+919600153444" class="hover-style-link text-color-primary font-weight--bold"><i class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;(+91)96001 53444</a></li>
							<li><a href="mailto:info@geopits.com" class="hover-style-link text-color-primary"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;info@geopits.com</a></li>
							<li><a href="mailto:sales@geopits.com" class="hover-style-link text-color-primary"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;sales@geopits.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright-area section-space--pb_30">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-center text-md-left"> <span class="copyright-text">&copy; 2022 GeoPITS <a href="#">All Rights Reserved.</a></span> </div>
					<div class="col-md-6 text-center text-md-right">
						<ul class="list ht-social-networks solid-rounded-icon">
							<li class="item">
								<a href="../geopits_dbas.html" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary"> <i class="fab fa-twitter link-icon"></i> </a>
							</li>
							<li class="item">
								<a href="../geopitsOfficial/index.htm" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary"> <i class="fab fa-facebook-f link-icon"></i> </a>
							</li>
							<li class="item">
								<a href="https://www.linkedin.com/company/geopits" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary"> <i class="fab fa-linkedin link-icon"></i> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--====================  End of footer area  ====================-->

	<!--====================  scroll top ====================-->
	<!--<a href="#" class="scroll-top" id="scroll-top"> <i class="arrow-top fal fa-long-arrow-up"></i> <i class="arrow-bottom fal fa-long-arrow-up"></i> </a>-->
	<!--====================  End of scroll top  ====================-->
	    	<!--====================  mobile menu overlay ====================-->
	<div class="mobile-menu-overlay" id="mobile-menu-overlay">
		<div class="mobile-menu-overlay__inner">
			<div class="mobile-menu-overlay__header">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-6 col-8">
							<!-- logo -->
							<div class="logo">
								<a href="../index.htm"> <img src="../assets/images/logo/geopits-logo.svg" class="img-fluid" alt=""> </a>
							</div>
						</div>
						<div class="col-md-6 col-4">
							<!-- mobile menu content -->
							<div class="mobile-menu-content text-right"> <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile-menu-overlay__body">
				<nav class="offcanvas-navigation">
					<ul>
						<li class="has-children"><a href="../services.html">Services</a>
							<ul class="sub-menu">
									                <li><a href="../remote-support-dba-services.html"><span>SQL Server DBA Remote Support</span></a></li>
                                                    <li><a href="../sql-server-dba-managed-services.html"><span>SQL Server Managed Services</span></a></li>
                                                    <li><a href="../cloud-database-management-services.html"><span>SQL on Cloud</span></a></li>
                                                    <li><a href="../sql-server-consulting-services.html"><span>Database Consulting</span></a></li>
                                                    <li><a href="../data-engineering-services.html"><span>Data Engineering</span></a></li>
                                                    <li><a href="../database-migration-services.html"><span>Database Migration</span></a></li>
                                                    <li><a href="../sql-performance-tuning-and-analysis.html"><span>Database Performance Tuning</span></a></li>
                                                    <li><a href="../analytics-and-bi-services.html"><span>Analytics &amp; BI</span></a></li>
                                                    <li><a href="../data-integration-services.html"><span>Data Integration</span></a></li>
                                    <li><a href="../application-development-services.html"><span>Enterprise Application Development</span></a></li>
                                    <li><a href="../speedcloud-nxtgen-cost-calculator.html"><span>SpeedCloud™ Cost Calculator</span></a></li>
							</ul>
						</li>
						<li class="has-children"><a>About</a>
							<ul class="sub-menu">
								<li><a href="../our-story.html"><span>The startup story</span></a></li>
								<li><a href="../about-our-team.html"><span>Our Team</span></a></li>
								<li><a href="../clients.html"><span>Clients</span></a></li><li><a href="../recognition.html"><span>Recognition</span></a></li>
								<li><a href="../careers/index.htm" target="_blank" class="hover-style-link"><span>Careers</span></a></li>
							</ul>
						</li>
						<li><a href="../case-studies/index.htm">Case Studies</a></li>
						<li class="has-children"><a>Resources</a>
							<ul class="sub-menu">
								<li><a href="index.htm"><span>Blog</span></a></li>
								<li><a href="../sql-server/index.htm"><span>SQL Features Explorer</span></a></li>
								<li><a href="../sql-compare.html"><span>SQL Compare Tool</span></a></li>
							</ul>
						</li>
						<!--<li><a href="/blog/" target="_blank"><span>Blog</span></a></li>-->
						<li><a href="/contact">Contact Us</a></li>
						<li><a href="../get-free-db-audit.html">Get Free DB Audit</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!--====================  End of mobile menu overlay  ====================-->    	<!-- JS ============================================ -->
	<!-- Modernizer JS -->
	<script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<!-- jQuery JS -->
	<script src="../assets/js/vendor/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="../assets/js/vendor/bootstrap.min.js"></script>
	<!-- Swiper Slider JS -->
	<script src="../assets/js/plugins/swiper.min.js"></script>
	<!-- Light gallery JS -->
	<script src="../assets/js/plugins/lightgallery.min.js"></script>
	<!-- Waypoints JS -->
	<script src="../assets/js/plugins/waypoints.min.js"></script>
	<!-- Counter down JS -->
	<script src="../assets/js/plugins/countdown.min.js"></script>
	<!-- Isotope JS -->
	<script src="../assets/js/plugins/isotope.min.js"></script>
	<!-- Masonry JS -->
	<script src="../assets/js/plugins/masonry.min.js"></script>
	<!-- ImagesLoaded JS -->
	<script src="../assets/js/plugins/images-loaded.min.js"></script>
	<!-- Wavify JS -->
	<script src="../assets/js/plugins/wavify.js"></script>
	<!-- jQuery Wavify JS -->
	<script src="../assets/js/plugins/jquery.wavify.js"></script>
	<!-- circle progress JS -->
	<script src="../assets/js/plugins/circle-progress.min.js"></script>
	<!-- counterup JS -->
	<script src="../assets/js/plugins/counterup.min.js"></script>
	<!-- wow JS -->
	<script src="../assets/js/plugins/wow.min.js"></script>
	<!-- animation text JS -->
	<script src="../assets/js/plugins/animation-text.min.js"></script>
	<!-- Vivus JS -->
	<script src="../assets/js/plugins/vivus.min.js"></script>
	<!-- Some plugins JS -->
	<script src="../assets/js/plugins/some-plugins.js"></script>
	<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
	<!--
    <script src="/assets/js/plugins/plugins.min.js"></script>
    -->
	<!-- Main JS -->
	<script src="../assets/js/main.js"></script>
	
	<!-- Select2 JS -->
	<script src="../assets/js/select2.min.js"></script>
	<script type="text/javascript">
_linkedin_partner_id = "3609132";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="../d/px/index.htm.gif?pid=3609132&fmt=gif">
</noscript></body>

</html>


<!-- Page generated by CouchCMS - Simple Open-Source Content Management -->
