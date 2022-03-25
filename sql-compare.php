
<?php 
include "header.php"; 
?>
    <style>
        .bg-theme-default{
            background-color: #031D44;
        }
        .contact-us-content{
            margin-top: 5%;
        }
        .contact-us-content h1, .contact-us-content p, .contact-us-content li, .contact-us-content .text, .contact-us-content .button-text{
            color: #ffffff;
            font-weight: bold;
        }
        
        .contact-us-content li{
            margin-bottom: 15px;
        }
        
        .contact-us-content li a:hover{
            color: #ffffff;
            /*text-decoration: underline;*/
            transform: scaleX(1.03);
        }
        
        .contact-us-content h1{
            padding-bottom: 20px;
            font-size: 40px;
            background: linear-gradient(269.98deg, #4FB948 -3.79%, #4B9CFF 110.61%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            
        }
        #trigger_chat{
            cursor: pointer;
        }
        .contact-us .header_sql_compare img {
            height: auto;
            position: absolute;
            top: 12vw;
            right: 0;
        }
        .contact-us .contact-us-form-wrapper img{
            height: auto;
        }
        .feature-overview{
            padding: 3% 15px 5%;
        }
        .feature-overview h2{
            font-weight: bold;
            font-size: 32px;
            line-height: 30px;
            letter-spacing: 0.01em;
            color: #031D44;
            padding: 3% 0;
        }
        .feature-overview h3{
            font-weight: bold;
            font-size: 22px;
            line-height: 30px;
            letter-spacing: 0.01em;
            color: #031D44;
            padding: 3% 0;
        }
        .feature-overview p{
            font-size: 18px;
            line-height: 32px;
            letter-spacing: 0.01em;
            color: rgba(0, 0, 0, 0.5);
        }
        .feature-overview p a{
            color: #031D44;
            text-decoration: underline;
        }
        .feature-overview .row{
            margin: 5% -15px;
        }
        .feature-overview .row div{
            margin-bottom: 3%;
        }
        .sql-compare-form h2{
            font-size: 36px;
            line-height: 52px;
            color: #FFFFFF;
        }
        .sql-compare-form img{
            position: static!important;
        }
        .form_sql_tool h3{
            font-size: 28px;
            line-height: 47px;
            color: #031D44;
        }
        .form_sql_tool label{
            font-weight: bold;
            font-size: 18px;
            line-height: 30px;
            color: #003E7F;
        }
        .form_sql_tool input{
            background: #FFFFFF;
            box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
        }
        .contact-form-service-wrap{
            border-radius: 0;
        }
        .or_span{
            margin: 0 5px;
            color: white;
        }
        .faq-two-wrapper .card{
            border: none;
        }
        .faq-two-wrapper .card-header h5 button[aria-expanded="true"], 
        .faq-two-wrapper .card-header h5 button:hover, 
        .faq-two-wrapper .card-header h5 button:focus,
        .faq-two-wrapper .card-header h5 button
        {
            color: rgba(0, 0, 0, 0.5);
            
        }
        @media only screen and (min-width: 768px) {
            .contact-us .header_sql_compare img {
                width: auto;
            }
        }
        @media only screen and (max-width: 600px) {
          .contact-us .contact-us-form-wrapper img{
              width: 100%;
              position: static;
              margin-top: 30px;
          }
          .sql-compare-form .contact-us-form-wrapper img{
              width: auto;
          }
          .contact-us-content h1{
              font-size: 26px;
          }
          .sql_header_tab{
              font-size: 12px;
          }
          .sql_header_tab .ht-btn.ht-btn-sm{
              padding: 0 10px;
              height: 35px;
              line-height: 35px;
          }
          .or_span{
                margin: 0;
            }
          .feature-overview{
                padding: 3% 2% 5%;
            }
            .sql-compare-form h2 {
                font-size: 30px;
                line-height: 44px;
            }
            .faq-two-wrapper .card-header h5 button{
                font-size: 16px;
            }
        }
    </style>

	
    <div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>    
<!--====================  header area ====================-->
	
	<!--====================  End of header area  ====================-->
			<div class="contact-us">
			<div class="contact-us-form-wrapper header_sql_compare">
			    <div class="container">
    				<div class="row align-items-center">
    					<div class="col-12 col-sm-12 col-lg-6 contact-us-content">
    					    <p>Database Utitlity Product</p>
    					    <h1>Geo SQLCompare Tool</h1>
    					    <p class="mb-4">Having a tough time in managing multiple databases and table schema across instances ? With GeoSQLCompare Tool, never worry about comparing to ensure schemas are sync’d right, scheduling maintaince activities and automating email triggers as necessary for human intervention.</p>
    						
                                
                            <div class="tab-button mb-4 sql_header_tab">
                                <a href="#contact-form" class="ht-btn ht-btn-sm text-white">Get a Demo</a> <span class="or_span">(or)</span> 
                                <a class="btn-text" href="/contact">
                                    <span class="button-text" style="color: #3699FF; text-decoration: underline;">Contact Us For More Details.</span>
                                </a>
                            </div>
                            
                            <p><a href="#contact-form" style="text-decoration: underline;">Signup for a demo now and get FREE trial for 14 days.</a></p>
    					
    					</div>
				    </div>
				</div>
				<img src="assets/images/sqlcompare.png" alt="">
			</div>
        </div>
        <div class="container feature-overview">
            <h2>Features Overview</h2>
            <p>With this tool you will be able to leverage 4 macro level modules in terms of SQL Comapre use case.</p>
            <div class="row">
                <div class="col-md-6">
                    <h3>1 Maintain All DB Connections in One Place</h3>
                    <p>With the correct set of access permissions, our tool will help maintain all DB connections and status in one place.</p>
                </div>
                <div class="col-md-6">
                    <h3>3 Get Actionable Reports</h3>
                    <p>Get actionable reports across differences in Tables, Views, Stored Proc, Functions, Constraints, Indexes & Triggers with list of fixes.</p>
                </div>
                <div class="col-md-6">
                    <h3>2 Compare 1:1 or 1:N Databases</h3>
                    <p>At any point there should be a source database, while the target databases can be one or many. This can also be filtered with tags and pre-saved as a template to run future comparisons.</p>
                </div>
                <div class="col-md-6">
                    <h3>4 Schedule and Automation Integrations</h3>
                    <p>Want to run this maintaince activity and send appropriate error notifications to the right person ? Our scheduling helps you with one click scheduling and email automation.</p>
                </div>
            </div>
            <div class="toggles-wrapper mb-5">

                <div class="faq-two-wrapper">

                    <div id="faq-toggles">
                        <div class="card">
                            <div class="card-header" id="toggles_15">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq_15" aria-expanded="false" aria-controls="faq_15">
                                        How can we help your business?<span> <i class="far fa-caret-circle-down"></i>
                            <i class="far fa-caret-circle-right"></i>  </span>
                                    </button>
                                </h5>
                            </div>

                            <div id="faq_15" class="collapse" aria-labelledby="toggles_15" style="">
                                <div class="card-body">
                                    <p>This tool can be deployed on cloud / on prem instances with license procured. We are ISO 27001 Certified for Data & Information Security, we have ensured that connections can be made with the secure network methods, be it on cloud or on prem. Get in touch with us to know how secure this application is in terms of data schema access.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p><b>Looking for custom features ?  <a href="/contact">Connect with us</a></b></p>
        </div>
        <div class="contact-us sql-compare-form">
			<div class="contact-us-form-wrapper">
			    <div class="container">
    				<div class="row align-items-center">
    					<div class="col-12 col-md-12 col-lg-7 contact-us-content text-center">
    					    <h2>See why a lot of companies use Geo SQLCompare for automating one part of DBA Tasks</h2>
    					    <img src="assets/images/quote.png" alt="quote" class="my-3">
    					    <p>"We believe in the importance of communication and we have developed various touchpoints for all stakeholders to get in touch with us. We assure you will not be answered by a bot, but a real human. Please find details of the same here."</p>
    						<div class="mt-30">

                            </div>
    					
    					</div>
    					
    					<div class="col-12 col-sm-12 col-lg-5 form_sql_tool">
    						<div class="contact-form-service-wrap">
                                <div class="contact-title text-center section-space--mb_20">
                                    <h3>Get a Demo Now!</h3>
                                    <p class="text">Signup for a demo now and get FREE trial for 14 days.</p> 
                                </div>
                                <form id="contact-form" action="assets/php/mail.php" method="post">
                                    <div>
    									<div class="contact-inner">
    									    <label for="name">Your Name</label>
    										<input name="name" type="text" placeholder="Please enter your name" required="">
    									</div>
    									
    									<div class="contact-inner">
    									    <label for="email">Your Business Email</label>
    										<input name="email" type="email" placeholder="Please enter your email" required="">
    									</div>
    
    									<div class="contact-inner">
    									    <label for="organization">Organization Name</label>
    										<input name="organization" type="text" placeholder="Please enter your organization name">
    									</div>
    									
                                        <div class="submit-btn text-center">
                                            <button class="ht-btn ht-btn-md" type="submit">Submit Enquiry</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
    					</div>
				    </div>
				</div>
			</div>
        </div>
    
    
    <!--====================  footer area ====================-->
	<?php 
		include "footer.php"
		?>