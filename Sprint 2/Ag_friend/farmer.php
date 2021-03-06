<!DOCTYPE html>
<html>
    <head>
        <title>farmer_form</title>
        
        <link rel="stylesheet" href="CSS/form.css">
        <link rel="stylesheet" href="CSS/navigation_bar.css">
        <script src="JS/navigation_bar.js"></script>
        
        
    </head>
    <body class="homepage">
        <div>
            <a id="button1"></a>
            <a id="button"></a>
            <header class="nav_header">
                < <div>
                    <div class="header_right">
                        
                    </div>
                    <div class="header_logowrap">
                        <a href="homePage.html" class="header_logo"></a>
                    </div>
                    <div class="header_left" id="mySidepanel">
					
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="homePage.html">Home</a>
                        
             
						<a href="about.html">Go back to MainMenu</a>
                        
                    </div>
                  <button class="openbtn" onclick="openNav()">☰</button>
                </div>
        </header> 
        <br><br><br><br><br>
         
        <div class="Customer_details">
            <form >
                                
                <div class="title_details" >
                    <h2>Farmer's Personal Details</h2>
                    <hr>
                </div>
                
                <div class="details">
                    <div class="name_details">
                        <span style=" display: flex; ">
                            <input class="form_textbox"  placeholder="first name" id="f_name" type="text" name="fName"> 
                        </span>
                        <span style=" display: flex;">
                            <input class="form_textbox"  placeholder="last name" id="l_name" type="text" name="lName" >
                        </span>
                        <span style=" display: flex;">
                            <input class="form_textbox"  type="email" name="eMail" id="email" placeholder="Email ex: myname@example.com">
                        </span>
                        <span style=" display: flex;">
                            <input class="form_textbox"  placeholder="Whatsapp Number" id="w_num" type="text" name="wNum" >
                       </span>
                        <span style=" display: flex;">
                            <input class="form_textbox"  placeholder="Facebook Name" id="facebook Name type="text" name="Facebook Name" >
                        </span>
                        <span style=" display: flex;">
                            <input class="form_textbox"  placeholder="Website1" id="website1" type="text" name="website1"  >
                         </span>
                        <span class="sub_lable_container" style="vertical-align: top;">
							<input class="form_textbox" type="tel" name="areaCode" id="ac" size="6" >
                        <span class="phone-seperater">
                            &nbsp;-
                        </span>
                        
							<label class="sub_lable">Area Code</label>
						</span>
						<span class="sub_lable_container" style="vertical-align: top;">
							<input class="form_textbox" type="tel" name="phoneNumber" id="pn" size="12">
							<label class="sub_lable" id="pn_l"> - Phone Number</label>
						</span>
                    </div>
                </div>
                <div class="space"></div>
                <div class="title_details">
                    <h2>Address</h2>
                    <hr>
                </div>
                <div class="address" >
                    <div class="addressDetails">
                        <span style=" display: flex;">
                            <input class="form_textbox" size="50" type="text" id="st01" placeholder="street address" name="add_line1">
                        </span>
                        <span style=" display: flex;">
                            <input size="50" class="form_textbox" type="text" id="st02" placeholder="Street Address Line 2" name="add_line2">
                        </span>
                        <span style="display: flex;">
                            <input class="form_textbox" size="21" type="text" id="city" name="city" placeholder="City">
                        </span>
                         <span id="spni" style="vertical-align: top;">
                            <select id="country_select" class="form_dropdown" width="22">
                                <option value=""> District </option>
                                <option value="Gampaha"> Gampaha </option>
                                <option value="Colombo"> Colombo </option>
                                <option value="Kalutara">Kalutara </option>
                                <option value="Kandy"> Kandy </option>
                                <option value="Matale">Matale </option>
                                <option value="Nuwara Eliya"> Nuwara Eliya </option>
                                <option value="Badulla"> Badulla </option>
                                <option value="Monaragala"> Monaragala</option>
								<option value="Kegalle"> Kegalle </option>
								<option value="Ratnapura"> Ratnapura </option>
								<option value="Anuradhapura"> Anuradhapura </option>
								<option value="Polonnaruwa"> Polonnaruwa </option>
								<option value="Galle"> Galle </option>
								<option value="Matara"> Matara </option>
								<option value="Hambantota"> Hambantota </option>
								<option value="Trincomalee"> Trincomalee </option>
								<option value="Battcaloa"> Battcaloa </option>
								<option value="Ampara"> Ampara </option>
								<option value="Jaffna"> Jaffna</option>
								<option value="Kilinochchi"> Kilinochchi </option>
								<option value="Mannar"> Mannar </option>
								<option value="Mullaitivu"> Mullaitivu </option>
								<option value="Vavuniya"> Vavuniya</option>
                            </select>
                            
                            
                        </span>
                        </span>

                      
                    </div>
                </div>
                <div class="space_before_btn"></div>
                <div class="proceed_button">
                    <button onclick="popup()"  id="btn01">Submit</button>
                </div>
            </form>
        </div>
        <br>
              
    </body>
</html>

