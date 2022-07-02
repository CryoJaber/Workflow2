<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FedexShipment $fedexShipment
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li>
    <?= $this->Html->link(__('Shipping History'), ['action' => 'index'], ['class' => 'nav-link']) ?>

</li>

<li>
    <a href="#Return_labels">Return Labels</a>
</li>

<li>
    <a href="#TrackPackages">Shipment Tracking</a>
</li>


<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Akshar:wght@300&family=Barlow:wght@300&family=Nunito:wght@200&family=Oswald&family=Roboto:wght@100&display=swap"
    rel="stylesheet">

<style>

div.d-flex.justify-content-between.flex-wrap.flex-md-nowrap.align-items-center.pt-3.pb-2.mb-3.border-bottom {
display: none;
}



.d-flex {
	display: none;
}


  .page-header {
        display: none;
    }

    #FromCryobuilt {
        display: block;
    }

    #ManualFromAddress {
        display: none;
    }


    .ManualEntry_FromDetails {
        font-weight: bold;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #ffffff;
        color: #3433ff;
        font-family: Oswald;
        border-radius: 10px;
        border-color: #3433ff;
        border-width: 2px;
        border-style: groove;
        box-shadow: 1px 1px 5px #eee;
	text-shadow: 1px 1px 0px #000000;
    }

    body {
        background: #f5f5f5;
    }

    span {
        font-size: 15px;
    }

    a {
        text-decoration: none;
        color: #3433ff;
        border-bottom: 2px solid #333;
    }

    .box {
        padding: 0px 0px;
    }

    .text {
        margin: 20px 0px;
    }

    .fa {
        color: #3433ff;
    }

#ManualCountryEntry {
	display: none;
}

#From_EditBtn {
	display: block;
}

#From_SaveBtn {
	display: block;
}

.shipticker-label {
 
font-family: Oswald; 
font-size: 16pt; 
color: white; 
text-shadow: 1px 1px 0px #000000; 
vertical-align: middle;

}


</style>



<table style="width: 100%">
    <tbody>
        <tr>
	   <td colspan="2">

	    <div class="row" style="background-color: #3366ff; color: white;">


                  <div class="col-md-1" style="vertical-align: middle;">
                    <p class="shipticker-label">
                        FROM:
                    </p>
                   </div>

                  <div class="col-md-3">
                   <p>
                        <b id="from_company_display">To be determined..</b>
                        <br>
                        <b id="from_address_display"></b>
                        <br>
                        <b id="from_city_display"></b>
                        <br>
                        <b id="from_state_display"></b>
                        <br>
                        <b id="from_zipcode_display"></b>
                        <br>
                        <b id="from_country_display"></b>
                   </p>
                </div>




                <div class="col-md-1">
                 <p class="shipticker-label">
                       TO:
                    </p>

                </div>

                <div class="col-md-3">
                 <p>
                     <b id="destination_company_display"></b>
                     <br>
                     <b id="destination_address_display"></b>
                     <br>
                     <b id="destination_city_display"></b>
                     <br>
                     <b id="destination_state_display"></b>
                     <br>
                     <b id="destination_zipcode_display"></b>
                     <br>
                     <b id="destination_country_display"></b>
                </p>
                </div>

                <div class="col-md-1">
                  <p class="shipticker-label">
                       DETAILS:
                    </p>
                </div>

                <div class="col-md-3">
                <b id="package_weight_display"></b>
                <br>
                <b id="package_height_display"></b>
                <br>
                <b id="package_length_display"</b>
                <br>
                <b id="package_width_display"></b>
                <br>
                <b id="package_reference_display"></b>

                </div>
             </div>









	</td>
</tr>

<tr>
    <td>

    <div class="row">

    <div class="col-sm-12">

       <div class="container">

            <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="card-title" style="font-weight: bold; font-family: 'Barlow Condensed';">Shipping From</h4>
                            </div>
                        </div>

                        <div id="FromCryobuilt">
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_company">
                                        Name
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="from_company" id="from_company"
                                        value="CryoBuilt Inc." />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_address">
                                        Address
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="from_address" name="from_address"
                                        value="1534 N Market Blvd #101" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_city">
                                        City
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="from_city" name="from_city"
                                        value="Sacramento" />
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_state">
                                        State
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="from_state" name="from_state"
                                        value="CA" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_zipcode">
                                        Zipcode
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="from_zipcode" name="from_zipcode"
                                        value="95834" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_country">
                                        Country
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="from_country" name="from_country"
                                        value="USA" />
                                </div>
                            </div>

                        </div>


                        <div id="ManualFromAddress">
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_company">
                                        Name
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="from_company" id="from_company" />
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_address">
                                        Address
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="from_address" id="from_address" />
                                </div>
                            </div>



                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_city">
                                        City
                                    </label>
                                </div>


                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="from_city" id="from_city" />
                                </div>
                            </div>



                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_state">
                                        State
                                    </label>

                                </div>
                                <div class="col-sm-10">

                                    <select class="form-select" name="from_state" id="from_state">
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
                                        <option value="N/A">Not Applicable</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label style="text-align: right;" for="from_zipcode">
                                        Zipcode
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="from_zipcode" name="from_zipcode" />
                                </div>
                            </div>


                            <div class="row form-group">

                                <div class="col-sm-2">
                                    <label style="text-align: right" for="from_country">
                                        Country
                                    </label>
                                </div>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="from_country" id="from_country"
                                        value="USA" />
                                </div>

                            </div>

                        </div>

 			<div class="row">
			
			    <div class="col-sm-10">
				<button type="button" class="ManualEntry_FromDetails" name="ManualEntry_Btn" id="ManualEntry_Btn">Edit</button>
				<button type="button" class="ManualEntry_FromDetails" name="From_SaveBtn" id="From_SaveBtn">Save</button>                       
			    </div>
	                </div>
	
			<script type="text/javascript">
			const FromCryobuilt = document.getElementById('FromCryobuilt');
        		const ManualFromAddress = document.getElementById('ManualFromAddress');
        		const ManualEntry_Btn = document.getElementById('ManualEntry_Btn');
        		
        		ManualEntry_Btn.addEventListener('click', function hideDiv() {
            		if (FromCryobuilt.style.display === 'none') {
                		FromCryobuilt.style.display = 'block';
                		ManualFromAddress.style.display = 'none';

            		} else {
                		FromCryobuilt.style.display = 'none';
                		ManualFromAddress.style.display = 'block';

            		}


        		});



			    
			</script>    
 
			<script type="text/javascript">
			

			

			const From_SaveBtn = document.getElementById('From_SaveBtn');
			
			
			var from_company = document.getElementById('from_company').value();
			var from_address = document.getElementById('from_address').value();
			var from_city = document.getElementById('from_city').value();
			var from_state = document.getElementById('from_state').value();
			var from_zipcode = doument.getElementBId('from_zipcode').value();
			var from_country = document.getElementById('from_country').value();
d			
			

			From_SaveBtn.addEventListener('click', function SaveFromDetails() {
		
			$("#from_company_display").text(from_company);
			$("#from_address_display").text(from_address);
			$("#from_city_display").text(from_city);
			from_state_display.innerHTML = from_state;
			from_zipcode_display.innerHTML = from_zipcode;
			from_country_display.innerHTML = from_country;
			});
			</script>

                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
    </td>


    <td>

<div class="row">

    <div class="col-sm-12">

       <div class="container">

            <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="card-title" style="font-weight: bold; font-family: 'Barlow Condensed';">Shipping To</h4>
                            </div>
                        </div>
			  <div class="row form-group">
                        <div class="col-sm-2">
                            <label style="text-align: right" for="destination_company">
                                Name
                            </label>
                        </div>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="destination_company" id="destination_company" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label style="text-align: right" for="destination_address">
                                Address
                            </label>
                        </div>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="destination_address" id="destination_address" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label style="text-align: right" for="destination_city">
                                City
                            </label>
                        </div>

                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="destination_city" id="destination_city" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label style="text-align: right" for="destination_state">
                                State
                            </label>
                        </div>

                        <div class="col-sm-10">
                            <select class="form-select" name="destination_state" id="destination_state">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label style="text-align: right;" for="destination_zipcode">
                                Zipcode
                            </label>
                        </div>

                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="destination_zipcode" id="destination_zipcode" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label style="text-align: right;" for="destination_country">
                                Country
                            </label>
                        </div>

                        <div class="col-sm-10">
			    <select id="destination_country" name="destination_country">
				<option value="N/A">Select Country</option>
				<option value="United States">United States</option>
				<option value="Canada">Canada</option>
				<option value="Mexico">Mexico</option>
				<option value="1">Enter Manually</option>
			    </select>

			    <div id="ManualCountryEntry">
				<div class="col-sm-10">
				    <input type="text" name="destination_country" id="destination_country">
				</div>
			    </div>
				
			    <script type="text/javascript">
				$(document).ready(function(){
				$('#destination_country').on('change', function() {
				if ( this.value == '1')
				{
				    $("#ManualCountryEntry").show();
				}
				else
				{
				    $("#ManualCountryEntry").hide();
				}
				});
			     });
			    </script>


			    <button type="button" id="Destination_SaveBtn" name="Destination_SaveBtn">Save</button>
			    <button type="button" id="Destination_ClearBtn" name="Destination_ClearBtn">Clear</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</td>

</tr>
</table>







    <script type="text/javascript">


        const FromCryobuilt = document.getElementById('FromCryobuilt');
        const ManualFromAddress = document.getElementById('ManualFromAddress');
        const ManualEntry_Btn = document.getElementById('ManualEntry_Btn');
        const ManualEntry_SaveBtn = document.getElementById('ManualEntry_SaveBtn');
        ManualEntry_Btn.addEventListener('click', function hideDiv() {
            if (FromCryobuilt.style.display === 'none') {
                FromCryobuilt.style.display = 'block';
                ManualFromAddress.style.display = 'none';

            } else {
                FromCryobuilt.style.display = 'none';
                ManualFromAddress.style.display = 'block';

            }


        });

    </script>


