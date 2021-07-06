<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="https://kit.fontawesome.com/3ed820adb2.js" crossorigin="anonymous"></script>

    <title>Tour Rajasthan</title>
    <!-- add icon link -->
    <link rel="icon" href="icon/logo.png" type="image/x-icon">
</head>

<body>



    <!-- NavBar -->
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/index.php">
                <div class="logo">
                    <img src="icon/logo.png" alt="logo" srcset="">
                    <span>Tour Rajasthan</span>
                </div>
            </a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="/index.php" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#gal" class="nav-link">Places</a></li>
                <li class="nav-item"><a href="#ab2" class="nav-link">About</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <button class="enquiry-btn" id="enquiry_btn">Enquiry Form &nbsp <i class="fab fa-wpforms"></i> </button>
        </div>
    </nav>


    <!-- Image Slider -->
    <div class="container" id="slider">
        <figure>
            <img src="imgs/museum.jpg" alt="museum">
            <img src="imgs/hawamahal.jpg" alt="hawamahal">
            <img src="imgs/desert.jpg" alt="desert">
            <img src="imgs/hills.jpg" alt="hills">
            <img src="imgs/museum.jpg" alt="museum">
        </figure>
        <div class="banner">
            <div class="b-style">
                <span class="b-text2">पधारो म्हारे देश</span>
                <span class="b-text">INCREDIBLE RAJASTHAN!</span>
                <span class="b-text3">BE ON A DATE WITH YOURSELF IN RAJASTHAN</span>
            </div>
            <a href="#gal"><button class="btn1">Explore <i class="fas fa-search-location"></i></button></a>
        </div>

    </div>

    <br><br>



    <!-- Modal -->
    <div class="modal-container" id="modal_cotainer">
        <div class="modal">
            <div class="modal-left">
            </div>


            <div class="modal-right">
                <h2>Get the Best Rajasthan Tour Packages</h2>
                <form class="form-modal" action="#">

                    <input type="text" id="name" placeholder="Name"><br>

                    <input type="email" id="email" placeholder="Email"><br>

                    <input type="text" id="name" placeholder="Number"><br>

                    <input type="date" id="date" placeholder="Arrival Date"> <br>

                    <select id="country" name="country">
                        <option value="" selected disabled hidden>Select Country</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>

                    <input type="submit" value="Submit">

                </form>

                <div class="modal-bottom">
                    <h4>Why Travel with us?</h4>
                    <div class="modal-icons">
                        <h5><i class="fas fa-rupee-sign"></i>Best Price Guaranteed</h5>
                        <h5><i class="fas fa-cog"></i>Package Customization</h5>
                        <h5><i class="fas fa-hands-helping"></i>24X7 Trip Assistance</h5>
                    </div>
                </div>

            </div>
            <i class="far fa-times-circle" id="close"></i>
        </div>
    </div>




    <!-- Content -->
    <section>
        <div class="content m-auto">
            <div id="services">
                <h1 id="ab">Rajasthan Tour Packages</h1>
                <div class="container2">
                    <div class="row">
                        <div class="card">
                            <div class="card-header tr1">
                                <h1>16 Days-Jaisalmer Rajasthan Tour</h1>
                            </div>
                            <div class="card-body">
                                <p>
                                    Jaipur - Pushkar - Udaipur - Jodhpur - Jaisalmer - Bikaner -Mandawa
                                </p>
                                <a href="#contact" class="btn">Know More</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header tr2">
                                <h1>15 Days-Rajasthan Tour Itinerary</h1>
                            </div>
                            <div class="card-body">
                                <p>
                                    Jaipur - Samode - Mandawa - Khimsar - Jaisalmer - Jodhpur - Udaipur
                                </p>
                                <a href="#contact" class="btn">Know More</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header tr3">
                                <h1>24 Days-Camel Safari Rajasthan Tour</h1>
                            </div>
                            <div class="card-body">
                                <p>
                                    Ajmer - Jaisalmer - Jodhpur - Udaipur - Chittaurgarh - Sawai Madhopur
                                </p>
                                <a href="#contact" class="btn">Know More</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header tr4">
                                <h1>15 Days-Rajasthan Forts & Palaces Tour</h1>
                            </div>
                            <div class="card-body">
                                <p>
                                    Madhogarh - Jaipur - Chhatra Sagar - Udaipur - Rohet - Jaisalmer - Khimsar - Samode
                                </p>
                                <a href="#contact" class="btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <br><br>
            <section>

                <div class="ab-img">

                    <h1 id="ab2">About Us</h1>


                    <div class="row about">

                        <div id="ab-content">
                            <h3>About Tour Rajasthan</h3>
                            <ul>
                                <li>We have wide Varieties of Hotel & Resorts to accomodate you. 3D4N or 15D16N totally
                                    upto
                                    you.</li>
                                <li>Ammenties Selection for every price options</li>
                                <li>Visa Ready - we got you everything covered</li>
                                <li>Personalized Travel Plans section bachelors to couples</li>
                                <li>Minimal custom duties and charges so you are free to explore your own unique options
                                </li>
                            </ul>
                            <a href="#about"><button class="btn">Contact Us</button></a>
                        </div>

                    </div>
                </div>

                <br><br>
                <section>

                    <!-- Gallery  -->
                    <div class="content m-auto" id="gal">
                        <h1 id="love">You'll fall in love with Rajasthan</h1>
                        <div class="container2">
                            <div class="grow">
                                <div class="gcard">
                                    <div class="gcard-header" id="jaipur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Jaipur
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header" id="jodhpur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Jodhpur
                                        <p id="text"></p>
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="udaipur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Udaipur
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="chittorgarh" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Chittorgarh
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="jaisalmer" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Jaisalmer
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="ajmer" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Ajmer
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="banswara" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Banswara
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="alwar" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Alwar
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="barmer" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Barmer
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="bikaner" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Bikaner
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="bharatpur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Bharatpur
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="bhilwara" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Bhilwara
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="baran" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Baran
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="bundi" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Bundi
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="churu" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Churu
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="dausa" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Dausa
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="dholpur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Dholpur
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="dungarpur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Dungarpur
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="hanumangarh" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Hanumangarh
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="jhunjhunu" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Jhunjhunu
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="jhalawar" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Jhalawar
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="jalor" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Jalor
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="nagaur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Nagaur
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="kota" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Kota
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="karauli" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Karauli
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="pali" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Pali
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="pratapgarh" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Pratapgarh
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="rajsamand" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Rajsamand
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="sawaimadhopur" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Sawai Madhopur
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="sirohi" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Sirohi
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="sikar" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Sikar
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="sriganganagar" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Sri Ganganagar
                                        </p>

                                    </div>
                                </div>
                                <div class="gcard">
                                    <div class="gcard-header " id="tonk" onclick="testIndex(this.id)">

                                    </div>
                                    <div class="gcard-body">
                                        <p>
                                            Tonk
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>


                </section>




                <br><br>

                <!-- contact us -->
                <section>
                    <div id="about">
                        <h1 id="ab">Contact Us</h1>

                        <!--The div element for the map -->
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=jaipur&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://putlocker-is.org">putlocker</a><br>
                                <style>
                                    .mapouter {
                                        height: 400px;
                                        width: 100%;
                                    }
                                </style>
                                <a href="https://www.embedgooglemap.net">website maps free</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 400px;
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>

                        <script src="js/map.js"></script>



                        <!-- Form -->
                        <div class="c-align" id="contact">

                            <div class="f-right">
                                <div style="margin-bottom: 100px;">
                                    <span id="big"><i class="fas fa-map-marker-alt"></i> Address</span><br>
                                    <span>XYZ area, Jaipur, Rajasthan</span><br><br><br><br><br>

                                    <span id="big"><i class="fas fa-envelope"></i> Email</span><br>
                                    <span>this@this.com</span><br><br><br><br><br>

                                    <span id="big"><i class="fas fa-phone"></i> Phone</span><br>
                                    <span>+9189xxxxxxxx</span>
                                </div>

                                <!-- <button class="enquiry-btn" id="enquiry_btn2">Enquiry Form &nbsp <i class="fab fa-wpforms"></i> </button> -->


                            </div>

                            <hr>

                            <div class="c-form">
                                <h1>FeedBack Form:</h1>
                                <form class="form" action="#">

                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Your Name.."><br>

                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Your Email.."><br>

                                    <label for="country">Country</label>
                                    <select id="country" name="country">
                                        <option value="" selected disabled hidden>Select Country</option>
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select><br>

                                    <label for="msg">FeedBack</label>
                                    <textarea id="msg" name="msg" placeholder="Write here.." style="height:200px"></textarea>

                                    <input type="submit" value="Submit">

                                </form>
                            </div>


                        </div>


                    </div>
                </section>


        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <div class="handles">
            <span><i class="fab fa-facebook-f"></i> <i class="fab fa-linkedin-in"></i> <i class="fab fa-twitter"></i> <i class="fab fa-github"></i></span>
        </div>
    </div>

    <!-- BackToTop Btn -->
    <button onclick="topFunction()" id="TopBtn" title="Go to top"><i class="fas fa-arrow-up"></i> Top</button>
    <script src="js/index.js"></script>
    <script src="js/city.js"></script>
    <script src="js/modal.js"></script>

</body>

</html>