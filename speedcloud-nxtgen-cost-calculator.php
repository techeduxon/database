
    
<?php 
include "header.php"; 
?>
	
<!--====================  header area ====================-->
	
	<!--====================  End of header area  ====================-->
		<!--====================  End of header area  ====================-->
     <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb_box text-center">
                <h1>SpeedCloud&#x2122; Cost Calculator</h1>
                <p>Please fill in your requirements below to get a ball park estimation right away!</p>
                <p>To more about the different type of cloud and infrastructure services offered by GeoPITS, <a href="speedcloud-servers.html" class="text-center top-message text-white" style="text-decoration: underline;">click here know more.</a></p>
                <a href="/contact" class="ht-btn ht-btn-md">Get Quote</a>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="app_calculator ht-box-images style-02 next_gen_calc">
        <div class="image-box-wrap">
            <div class="container">
                <section class="config">                        
                    <h6>Cloud Cost Calculator ( For 1 Virtual Machine / Per Month ) </h6>

                    <div class="row service-hero-text">
                        <!--Region -->
                        <div class="col-md-6">
                            <p>Region</p>
                            <form action="#" method="post">
                                <div class="contact-form__two">
                                    <div class="form-item contact-inner">
                                        <span class="inquiry">
                                            <select name="inquiry" class="select-item">
                                                <option>Select a Region</option>
                                                <option value="chennai">Banglore</option>
                                                <option value="mumbai">Mumbai</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Operating System  -->
                        <div class="col-md-6">
                            <p>Operating System</p>
                            <form action="#" method="post">
                                <div class="contact-form__two">
                                    <div class="form-item contact-inner">
                                        <span class="inquiry">
                                            <select name="inquiry" class="select-item" onchange="handleConfiguration()" id="os">
                                                <option>Select an Operating System</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <!-- Configuration -->
                        <div class="col-md-6">
                            <p>Configuration</p>
                            <form action="#" method="post">
                                <div class="contact-form__two">
                                    <div class="form-item contact-inner">
                                        <span class="inquiry">
                                            <select name="inquiry" class="select-item" onchange="handleConfigurationChange()" id="configuration">
                                                <option>Select a configuration</option>
                                                <option>Select an Operating System to get options</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 bandwidth_cost">
                            <p><span>=</span> <span id="configuration-price">0</span> <span>INR</span> </p>
                        </div>
                    </div>
                </section>
                
                <div class="row mb-5">
                    <div class="col-md-6">
                        
                        <label for="customRange3" class="form-label">Bandwidth</label>
                        
                        <input type="range" class="form-range d-block" min="1000" max="100000" value="1000" step="1000" id="bandwidth-bar" onchange="handleBandwidth('bar')">
                        <input type="text" id="bandwidth-display" min="1000" onkeyup="handleBandwidth()" onchange="handleBandwidth()" disabled="" value="1000">
                        <p id="error-bandwidth" class="error-text"> The Bandwidth must be a minimum of 1000 GB</p>
                        <div class="btn-group btn-toggle"> 
                            <!--<button class="btn btn-sm btn-default" id="tb-button" onclick='updateTextInput(true)' >TB</button>-->
                            <button class="btn btn-sm btn-primary active" id="gb-button" onclick='updateTextInput()'>GB</button>
                        </div>   
                    </div>
                    <div class="col-md-6 bandwidth_cost">
                        <p><span>=</span><span id="bandwidth-price">0</span> <span>INR</span> </p>
                    </div>
                </div>
                <!-- Additional Storage -->
                <p>Additional Storage  ( You already have selected <span id="storage-count-display"></span> GB ) </p>
                <div class="row mb-4">
                    <div class="col-6 pr-0 text-center">
                        <form action="#" method="post">
                            <div class="contact-form__two">
                                <div class="form-item contact-inner">
                                    <span class="inquiry">
                                        <input type="number" id="additional-storage" name="quantity" onchange="handleAdditionalStorage()" step="100" min="0" max="" value="0">
                                    </span>
                                    <p id="error-storage" class="error-text"> The storage must be a minimum of 100 GB</p>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <div class="col-6  bandwidth_cost">
                        <p><span>=</span> <span id="additional-storage-price">0</span> <span>INR</span> </p>
                    </div>
                </div>
                <p><b>Need more Memory / vCPU ?</b></p>
                <!-- Additonal cpu -->
                <p id='additional-items-msg'>You need to select <span id="additional-items-server"></span> (maximum version) to add additional features</p>
                <section id="additional-items">
                    <p>Additional vCPU</p>   
                <div class="row mb-4">
                    <div class="col-6 pr-0 text-center">
                        <form action="#" method="post">
                            <div class="contact-form__two">
                                <div class="form-item contact-inner">
                                    <span class="inquiry">
                                        <input type="number" id="additional-cpu" name="quantity" onchange="handleAdditionalCpu()" min="0" max="" value="0" step="2" onkeydown="return false">
                                    </span>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <div class="col-6 bandwidth_cost">
                        <p><span>=</span> <span id="additional-cpu-price">0</span> <span>INR</span> </p>
                    </div>
                </div>
                <!-- Additional Memory -->
                <p>Additional Memory (In GB)</p>   
                <div class="row mb-4">
                    <div class="col-6 pr-0 text-center">
                        <form action="#" method="post">
                            <div class="contact-form__two">
                                <div class="form-item contact-inner">
                                    <span class="inquiry">
                                        <input type="number" id="additional-memory" name="quantity" onchange="handleAdditionalMemory()" onkeyup="handleAdditionalMemory()" min="0" max="" value="0" step="1">
                                    </span>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <div class="col-6 bandwidth_cost">
                        <p><span>=</span> <span id="additional-memory-price">0</span> <span>INR</span> </p>
                    </div>
                </div>
                </section>
                
                <p><b>DB Requirements</b></p>
                <p>Do you need MS SQL ?</p>
                <!-- WITH / WIHOUT SQL -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <form action="#" method="post">
                            <div class="contact-form__two">
                                <div class="form-item contact-inner">
                                    <span class="inquiry">
                                        <select name="inquiry" class="select-item" id="sql-state" onchange="handleSqlState()">
                                            <option value="no_sql">Without SQL</option>
                                            <option value="sql">With SQL</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <section id="product-family">
                    <p>Please choose your product family ? </p>
                    <p>*Includes installation cost of Rs 6000 /-</p>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <form action="#" method="post">
                            <div class="contact-form__two">
                                <div class="form-item contact-inner">
                                    <span class="inquiry">
                                        <select name="inquiry" class="select-item" id="product-family-options" onchange="handleProductFamily()">
                                            <option>Select a Product Family</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 bandwidth_cost">
                        <p><span>=</span> <span id="product-family-price">0</span> <span>INR</span> </p>
                    </div>
                </div>
                </section>
                <!-- Managed Services -->
                <p> Managed Services Requirement </p>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <form action="#" method="post">
                            <div class="contact-form__two">
                                <div class="form-item contact-inner">
                                    <span class="inquiry">
                                        <select name="inquiry" class="select-item" id="managed-services" onchange="handleManagedServices()">
                                             <option>Select Managed Services Requirement</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 bandwidth_cost">
                        <p><span>=</span> <span id="managed-services-price">0</span> <span>INR</span> </p>
                    </div>
                </div>
                <hr>
                <div class="text-right total_cost">
                    <p>Estimated Total Cost Per Month
                        <span class="total-price-block">
                            <span>=</span> 
                            <span id="total-price">0</span>
                            <span>INR</span>  
                        </span> 
                    </p>
                </div>
            </div>
        </div>
        <br>
        <p class="text-center">If you need contract / reserved instance pricnig, please contact us for better rates.</p>
        <center>
                        <a href="/contact" class="ht-btn ht-btn-md">Contact Us To Jump Start with Free Credits</a>
</center>
        
    </div>

	<!--====================  footer area ====================-->
    <?php 
		include "footer.php"
		?>
