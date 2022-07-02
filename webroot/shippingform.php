<?php


                                                $from_compamy = $_POST['from_company'];
                                                $from_address = $_POST['from_address'];
                                                $from_city = $_POST['from_city'];
                                                $from_stat = $_POST['from_state']; 
                                                $from_zipcode = $_POST['from_zipcode'];
                                                $from_country = $_POST['from_country'];
?>


<style>
    #FromCryobuilt {
        display: none;
    }

    .page-header {
        display: none;
    }

    #ManualFromAddress {
        display: none;
    }


    #FromNameCryo {
        display: block;
    }

    #FromNameManual {
        display: none;
    }


    body {
        background: #eee;
    }

    span {
        font-size: 15px;
    }

    a {
        text-decoration: none;
        color: #0062cc;
        border-bottom: 2px solid #0062cc;
    }

    .box {
        padding: 60px 0px;
    }

    .box-part {
        background: #FFF;
        border-radius: 0;
        padding: 60px 10px;
        margin: 30px 0px;
    }

    .text {
        margin: 20px 0px;
    }

    .fa {
        color: #4183D7;
    }



</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




	<!-- START SHIPPING TO *BOX CONTAINER* -->

         <div class="box"">

		<div class="container">

                   <div class="row" style="width: 100%">

                        <div class="col" style="padding: 20px;">

                            <div class="box-part text-center">

				<form method="POST" action="/FedexShipments/add" id="ShipmentForm">


                                    <h3>SHIPPING FROM</h3>
                               
				
                                    <div id="FromNameCryo">

                                        <div class="row">

                                            <div class="col-md-6">
                                                <h5>
						    <span style="color: #3433fff; padding-bottom: 5px;">
                                                    <?php $from_company ?>
						    </span>
						    <br>
						    <?= $from_address ?>
						    <br>
						    <?= $from_city ?>
						    <br>
						    <?= $from_state ?>
						    <br>
						    <?= $from_zipcode ?>
						    <br>
						    <?= $from_country ?>
						    
                                                </h5>
				       
					    </div>
				        </div>
				     
				    </div>

				    <div id="FromNameManual">
				        <div class="row">
				            <div class="col-md-6">
                                                <h6>
                                                     Enter Shipping Details
                                                </h6>
  	                                    </div>
				        </div>
                                    </div>


				<!-- END SHIPPING TO *TITLE* -->


				<!-- START SHIPPING TO *BODY* -->

				<!-- FromCryobuilt Div -->

				<div id="FromCryobuilt">

				        <div class="row">

                                            <div class="col-m-3">

						<label for="from_company" class="form-control">
						    From Name
						</label>

					    </div>

					    <div class="col-md-6">

						 <input type="text" class="form-control" name="from_company" id="from_company" value="CryoBuilt Inc." />

					    </div>

				        </div>


				        <div clas="row">

					    <div class="col-m-3">
						 <label for="from_address" class="form-control">
						    Address
						 </label>
					    </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="from_address" name="from_address" value="1534 N Market Blvd #101" />
                                            </div>

				        </div>


			                <div class="row">

				            <div class="col-m-3">
						<label for="from_city" class="form-control">
						    City
						</label>
					    </div>

                                            <div class="col-md-6">
                                                <input type="text" name="from_city" value="Sacramento" />
                                            </div>

				        </div>


			                <div class="row">

					     <div class="col-m-3">
						<label for="from_state" class="form-control">
						    State
						</label>
					    </div>

					    <div class="col-md-6">
                                                <input type="text" name="from_state" value="CA" />
                                            </div>
					
					</div>
                                            

		                        <div class="row">
					    <div class="col-m-3">
						<label for="from_country" class="form-control">
						    Country
						</label>
					    </div
                                            <div class="col-md-6">
                                                <input type="text" name="from_country" value="USA" />
                                            </div>
                                        
					</div>
                                    

					<?php 
						$from_compamy = $_POST['from_company'];
						$from_address = $_POST['from_address'];
						$from_city = $_POST['from_city'];
						$from_stat = $_POST['from_state'];
						$from_zipcode = $_POST['from_zipcode'];
						$from_country = $_POST['from_country'];
					?>

				    </div>

				</div>

				

				<!-- From Manual Address Entry -->

				<div id="ManualFromAddress">
				    <div class="box">
					<div class="container">
	
					<div class="row">
                                            <div class="col-m-3">
						<label for="from_company" class="form-control">
						    From Name
						</label>
					    </div>

					    <div class="col-md-6">
                                                <input type="text" class="form-control" name="from_company" id="from_company"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-m-3">
						<label for="from_address" class="form-control">
						    Address
						</label>
					    </div>
						
					    <div class="col-md-6" >
                                                <input type="text" class="form-control" name="from_address" id="from_address" />
                                            </div>
                                        </div>
                                        <div class="row">
				   	    <div class="col">
						<label for="from_city" class="form-control">
						   City	
						</label>
					    </div>
					
					
					    <div class="col-m-3">_
                                                <input class="form-control" type="text" name="from_city" id="from_city" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
						<label for="from_state" class="form-control">
					    </div>
					    <div class="col-m-3">
		
                                                <select class="form-control" name="from_state" id="from_state">
			
							<option value="">N/A</option>
							<option value="AK">Alaska</option>
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="AZ">Arizona</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DC">District of Columbia</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="IA">Iowa</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MA">Massachusetts</option>
							<option value="MD">Maryland</option>
							<option value="ME">Maine</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MO">Missouri</option>
							<option value="MS">Mississippi</option>
							<option value="MT">Montana</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="NE">Nebraska</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NV">Nevada</option>
							<option value="NY">New York</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="PR">Puerto Rico</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VA">Virginia</option>
							<option value="VT">Vermont</option>
							<option value="WA">Washington</option>
							<option value="WI">Wisconsin</option>
							<option value="WV">West Virginia</option>
							<option value="WY">Wyoming</option>
						</select>
                                            </div>
                                        </div>

                                        <div class="row">

					    <div class="col-m-3">
						<label for="from_country" class="form-control">
						    Country
						</label>
					    </div>

					    <div class="col-md-6">
                                                <input type="text" name="from_country" id="from_country" value="USA" />
                                            </div>

				        </div>
				    
				</div>

			        </form>

			</div>

			</div>

			</div>
			</div>

                                <!-- END OF MANUAL FROM ADDRESS -->
                  

				  <div class="row">

                                        <div class="col">
                                                <button type="button" name="ManualEntry_Btn" id="ManualEntry_Btn">Edit</button>
                                                <button type="button" name="ClearFields_Btn" id="ClearFields_Btn">Clear</button>
                                        </div>

                                   </div>


                                <script type="text/javascript">

                                    function changeDivs() {

	              		    var FromCryobuilt = document.getElementById("FromCryobuilt");
	                            var ManualFromAddress = document.getElementById("ManualFromAddress");
  			            var FromNameCryo = document.getElementById("FromNameCryo");
                                    var FromNameManual = document.getElementById("FromNameManual");
                                    var ManualEntry_Btn = document.getElementById("ManualEntry_Btn");

			                if (FromNameCryo.style.display == "block") {
	                                    FromNameCryo.style.display = "none";
        			            FromNameManual.style.display = "block";
                                        } else {
                                            FromNameCryo.style.display = "block";
                                            FromNameManual.style.display = "none";
                                        };

			                if (FromCryobuilt.style.display == "block") {
				            FromCryobuilt.style.display = "none";
				            ManualFromAddress.style.display = "block";
			                } else {
				            FromCryobuilt.style.display = "block";
				            ManualFromAddress.style.display = "none";
 			                };

                                    };

		                    ManualEntry_Btn.addEventListener("click", changeDivs);

 	                         </script>

                           </div>

			</div>
	
		    </div>

	        </div>
                   
	    </div>
