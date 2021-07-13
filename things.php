<?php

// DB Connection
require_once 'db/config.php';
require_once 'db/insert_modal.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/city.css">
    <link rel="stylesheet" href="css/things.css">
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
                <li class="nav-item"><a href="/index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/index.php#gal" class="nav-link">Places</a></li>
                <li class="nav-item"><a href="/things.php" class="nav-link active">Things To Do in Rajasthan</a></li>
                <li class="nav-item"><a href="/index.php#ab2" class="nav-link">About</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <button onclick="openModal()" class="enquiry-btn" id="enquiry_btn">Enquiry Form &nbsp <i class="fab fa-wpforms"></i> </button>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal-container" id="modal_cotainer">
        <div class="modal">
            <div class="modal-left">
            </div>


            <div class="modal-right">
                <h2>Get the Best Rajasthan Tour Packages</h2>
                <form class="form-modal" action="/index.php" method="post">

                    <input type="text" id="namemodal" name="name" placeholder="Name"><br>

                    <input type="email" id="emailmodal" name="email" placeholder="Email"><br>

                    <input type="tel" id="phonemodal" name="number" placeholder="Phone Number" pattern="[0-9]{10}"><br>

                    <input type="date" id="datemodal" name="date" placeholder="Arrival Date"> <br>

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

                    <input type="submit" name="submit" value="Submit">

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
    <div class="content-things">

        <div class="top">
            <h1>7 Things To Do in Rajasthan— Go Deep Into the Land of the Rajputs</h1>
            <p>
            <h3>A traveller is transformed into an explorer in Rajasthan what with the majestic forts, dream-like palaces, harlequin bazaars, and time-warped
                museums that pepper this desert state. When it comes to things to do in Rajasthan, any traveller is spoiled for choice. Adrenaline junkies will find
                a fair share of adventure sports; immerse yourself in Rajasthani culture by attending the many fairs and festivals; ride through a wildlife-packed
                jungle safari; take in the glorious Jain and Hindu temple architecture…Rajasthan is for everyone to unwind.</h3>
            </p>
            <p>
            <h3>Our listicle covers everything you can possibly think of doing in Rajasthan. All you need is a willing spirit and Rajasthan will take care of
                the rest.</h3>
            </p>
        </div>

        <div class="things">
            <h2><b>1. Travel Back in Time At Rajasthan’s Museums</b></h2>
            <p class="imgs"><img src="/imgs/things/alberthall.jpg" alt="alberthall" srcset=""></p>

            <h3><b>Albert Hall Museum, Jaipur</b></h3>
            <p>This museum is the epitome of Indo-Saracenic architecture, that houses royal weaponry, miniature paintings, dioramas and musical instruments, among other
                artefacts. The Anokhi Museum of Hand Printing is another must-visit Jaipur destination if you want to know about the rich history of Rajasthani
                handicrafts.</p>

            <h3><b>Government Museum, Ajmer</b></h3>
            <p>Another gallery that stores a fine collections of paintings, miniatures, weapons, and 8th century stone sculptures. This museum is within the walls of Akbar’s
                former palace and has been standing strong since the 1500s.</p>

            <h3><b>Palace Museum, Alwar</b></h3>
            <p>In eastern Rajasthan, Alwar has a brilliant museum that houses the swords of Mughal emperors Akbar and Aurangzeb. Besides a rich display of ancient weaponry,
                the museum is also home to a rare manuscript recording the life of Emperor Babur, miniatures, and Ragamala paintings.</p>

            <h3><b>Mehrangarh Museum, Jodhpur</b></h3>
            <p>While the Mehrangarh Fort itself is a relic of epic proportions, the museum within its walls gives you a glimpse of courtly life in Jodhpur. The Marwar-Jodhpur
                cultural history is represented here with artefacts ranging from the 17th to the 19th century. Take a peek at textiles, miniature paintings, armour and
                hand-crafted furniture.</p>

            <h3><b>Vintage Car Museum, Udaipur</b></h3>
            <p>Motor maniacs should take the short walk from Udaipur’s City Palace to this museum nearby that houses retro vehicles from a 1938 seen-seater Cadillac to a 1934
                Rolls Royce Phantom. All 22 cars on display are a car enthusiasts’ dream!</p>
        </div>

        <div class="things">
            <h2><b>2. Switch to Explorer Mode at the Forts of Rajasthan</b></h2>
            <p class="imgs"><img src="/imgs/things/amerfort.jpg" alt="amerfort" srcset=""></p>

            <h3><b>Amber Fort, Jaipur</b></h3>
            <p>The pinnace of things to do in Rajasthan is take an elephant ride all the way up to the entrance of Amber Fort. Whether you’re checking out the beautiful mosaics
                of Ganesh Pol or staring in wonder at the mirrored ceiling of Jai Mandir, Amber Fort has everything an traveller yearns for in a historical monument.</p>

            <h3><b>Chittor Fort, Chittorgarh</b></h3>
            <p>This fort is perched on a 180m hill adding to its imposing nature. The Kirti Stambh (Tower of Fame) and Vijay Stambh (Tower of Victory) offer brilliant panoramic
                views of surrounding Chittor. The Fateh Prakash Palace doubles up as a museum of Chittor’s glorious Rajputana history.</p>

            <h3><b>Sonar Quila, Jaisalmer</b></h3>
            <p>It is no surprise that Jaisalmer Fort is part of UNESCO’s World Heritage Site list. Sonar Quila (Golden Fort) beckons travellers to check out its seven-storied
                Maharaja Mahal, Diwan-i-Khas, and Diwan-i-Am. The rare Rajput stamps, stone panel friezes, and exotic tiles makes exploring Sonar Quila an exciting tourist activity.</p>

            <h3><b>Mehrangarh Fort, Jodhpur</b></h3>
            <p>Looming over the Blue City is the glorious Mehrangarh Fort, sitting pretty on a 125m hill. From the moment you enter, via Jayapol, you will be enamoured by
                Sheesh Mahal, where the light plays glorious tricks on the mirror-worked walls and chandeliers. The fresco-covered Takhat Vilas is another spell-binding mansion
                worthy of a traveller’s time.</p>

            <h3><b>Kumbhalgarh Fort, Udaipur</b></h3>
            <p>This is easily the most impregnable fort in all of Rajasthan, and a trek within its 36m wall is a memory that will last a lifetime. Within its walls are a number of
                palaces, temples and mansions that hark back to a time when this fort was a force to reckon with. Don’t leave without exploring Jhalia ka Mahal, the birthplace of
                Maharana Pratap.</p>
        </div>

        <div class="things">
            <h2><b>3. Shop Till You Drop at the Kaleidoscopic Bazaars of Rajasthan</b></h2>
            <p class="imgs"><img src="/imgs/things/bazaar.jpg" alt="bazaar" srcset=""></p>

            <h3><b>Hathi Pol & Bada Bazaar, Udaipur</b></h3>
            <p>For those interested in Pichwai and Phad paintings, Hathi Pol is your best bet. This street market has shops that stock intricate wooden handicrafts, curios,
                and a host of local handicrafts. Bada Bazaar is all about textiles and clothing. Here you will find great deals (if your haggling skills are top-notch) on
                Bathik and Bandhani sarees, and camel bone jewellery.</p>

            <h3><b>Bapu & Johari Bazaar, Jaipur</b></h3>
            <p>The old quarter of the Pink City is home to the kaleidoscopic Bapu Bazaar where shopkeepers stock Rajasthani textiles, perfumes, pashmina shawls, and ethnic
                footwear. Johari Bazaar stocks hand-made jewellery, semi-precious stones, gems, and spices.</p>

            <h3><b>Sadar Bazaar, Jaisalmer</b></h3>
            <p>For the budget-conscious shopper in the Golden City, head to Sadar Bazaar. This street market is always bustling with activity and you can pick up leather
                items, carpets, local handicrafts, paintings, and other knick knacks.</p>

            <h3><b>Kote Gate, Bikaner</b></h3>
            <p>Kote Gate is a landmark of Bikaner, separating the old quarter from the modern part of the city. Besides the marvellous architecture of the monument, the
                area is a haven for tourist shoppers looking for camel hide items, miniature paintings, and a variety of local souvenirs. When you’re taking a break from
                all that shopping, make sure you try the street food here.</p>

            <h3><b>Nai Sarak, Jodhpur</b></h3>
            <p>No trip to the Blue City is complete without shopping for bandhani (traditional tie and dye) clothing/fabric at Nai Sagar. This multi-hued market is a wave
                of colours as shopkeepers stock all kind of local items that any traveller will fall in love with.</p>
        </div>

        <div class="things">
            <h2><b>4. Mesmerize Your Sense at the Palaces (and Havelis) of Rajasthan</b></h2>
            <p class="imgs"><img src="/imgs/things/haveli.jpg" alt="haveli" srcset=""></p>

            <h3><b>Monsoon Palace, Udaipur</b></h3>
            <p>Sajjan Garh was the royal monsoon retreat and also served as a hunting lodge. Today, it is a photographer’s dream destination because of its vantage point on
                Bansdara Hills, offering a bird’s-eye view of Udaipur.</p>

            <h3><b>Salim Singh ki Haveli, Jaisalmer</b></h3>
            <p>Not really a palace per se, but the palatial mansion of a Jaisalmer prime minister that still looks beautiful, 300 years on. The sky blue cupolas and arched
                balconies of the upper stories stands out as a hallmark of original Rajput architecture.</p>

            <h3><b>Junagarh Palace, Bikaner</b></h3>
            <p>Situated within the walls of Junagarh Fort, are a vast complex of smaller palaces that warrant a visit. Badal Mahal is intricately painted with cotton clouds.
                Anup Mahal and Karan Mahal are itself worth the visit because they contain some of the best wall artwork you will see in Rajasthan.</p>

            <h3><b>City Palace & Hawa Mahal, Jaipur</b></h3>
            <p>The City Palace is home to an intricate network of palatial mansions, gardens and courtyards. The Diwan-i-Am contains mesmerising paintings, 17th century Lahori
                carpets and rare manuscripts of Hindu scriptures. The pink and red sandstone Hawa Mahal is an intricate honeycomb structure that is easily the most unique in
                all of Jaipur. Over 900 windows line the walls of this palace and make for exciting exploration.</p>
        </div>

        <div class="things">
            <h2><b>5. Thrill-seeking in Rajasthan</b></h2>
            <p class="imgs"><img src="/imgs/things/cycling.jpg" alt="cycling" srcset=""></p>

            <h3><b>Hot Air Balloon Rides, Jaipur & Pushkar</b></h3>
            <p>The cloudless days of Rajasthan are perfect for balloon rides and both Jaipur and Pushkar look beautiful from the sky. When it comes to adventurous things to do
                in Rajasthan with the family, a hot air balloon ride should be on your bucket list. In Pushkar, you will get to witness the tranquil Ana Sagar Lake and the
                surrounding hills in a completely unique manner and the best time to try this activity is during the Pushkar Fair. In Jaipur, sign up for an early morning balloon
                ride to take in the historical palaces and forts like a bird.</p>

            <h3><b>Bicycle Tours, Udaipur</b></h3>
            <p>Rajasthan is best explored on a cycle and most of the towns and villages are conveniently located if you’re riding there. Also, you get to mingle with the locals
                and this can transform your Rajasthani trip into a memorable experience. While most Rajasthan cities offer cycling opportunities, you should sign up for a cycle tour
                of Udaipur’s old city and countryside.</p>

            <h3><b>Paragliding & Parasailing in Jaipur, Udaipur, Jodhpur or Jaisalmer</b></h3>
            <p>For the true adrenaline junkie, Rajasthan offers you an opportunity to sail like a bird over its majestic topography. Feel the wind in your hair as you soar above Jodhpur
                and let the wind carry you off into the clouds. Paragliding, parasailing and para-motoring have become quite popular in Rajasthan, and if you’re up for a challenge in the
                skies, sign up for a tour.</p>

            <h3><b>Desert Camping & Camel Safari, Bikaner & Jaisalmer</b></h3>
            <p>The undulating golden-brown Sam Sand Dunes make for the perfect camel safari in Jaisalmer. Nearby Khuri is a less touristy option if you’d like to sit near a campfire under
                the desert stars. Bikaner has slowly grown into a destination for overnight desert camps and you can spend a couple of days living like a nomad with only camels and the
                desert for company. This is certainly an experience of a lifetime.</p>

            <h3><b>Zip Lining, Jodhpur</b></h3>
            <p>Imagine exploring the ramparts of Mehrangarh Fort, and its lakes, from a zip line. This is easily one of the most exciting activities in Jodhpur and the zip tour lasts for
                60 to 90 minutes. A perfect introduction to the burgeoning adventure lifestyle of Rajasthan.</p>
        </div>

        <div class="things">
            <h2><b>6. Immerse Yourself in the Prismatic Fairs and Festivals of Rajasthan</b></h2>
            <p class="imgs"><img src="/imgs/things/camel.jpg" alt="camel" srcset=""></p>

            <h3><b>Kite Festival, Jaipur</b></h3>
            <p>The Pink City comes alive on Makar Sankranti that usually takes place in January. Innumerable kites dot the sky turning it into a kaleidoscopic painting. Take a stroll towards Jal Mahal to watch traditional performances and kite duels.</p>

            <h3><b>Camel Fair, Pushkar</b></h3>
            <p>One of the liveliest celebrations in Rajasthan, the Pushkar Fair is one of the world’s biggest livestock fairs. It attracts throngs of travellers who descend on the small town to witness a colourful spectacle of camels being traded, folk performances, scrumptious food, and an overall carnival vibe.</p>

            <h3><b>Desert Festival, Jaisalmer</b></h3>
            <p>This three day festival organized by the tourism department takes place around January-February and is the perfect time to visit the Golden City. Puppeteers, snake charmers, traditional dancers, folk singers, camel races are all part of this festival that celebrates the vibrant Rajasthani folk culture.</p>

            <h3><b>Kajli Teej Festival, Bundi</b></h3>
            <p>Planning your trip to Bundi in August-September is a good idea as you’ll get to witness a celebration in honour of the upcoming monsoon season. The desert is absolutely parched before that, and Bundi comes alive during this festival that is celebrated just before the short-lived rains come down. Fireworks and traditional dances are just one aspect of this colourful festival.</p>

            <h3><b>Brij Festival, Bharatpur</b></h3>
            <p>This March festival takes place a few days before Holi and is at its exuberant best in the eastern Rajasthan town of Bharatpur. Make sure you witness the intricate raslila dance.</p>
        </div>

        <div class="things">
            <h2><b>7. Traverse the Jungles of Rajasthan</b></h2>
            <p class="imgs"><img src="/imgs/things/tiger.jpg" alt="tiger" srcset=""></p>

            <h3><b>Ranthambore National Park</b></h3>
            <p>The crowning jewel of wildlife havens in Rajasthan, RNP is home to over 60 tigers and a host of other wild animals- nilgai, jackal, wolf, panther, leopard, and caracal among others. Ranthambore also contains the ruins of a royal hunting lodge and a couple of picturesque lakes that attracts all sorts of migratory birds. when it comes to listing the things to do in Rajasthan, a Ranthambore visit should be at the top.</p>

            <h3><b>Sariska National Park, Alwar</b></h3>
            <p>After RNP, the Sariska National Park is also home to a handful of big cats, besides leopards, wild boars, jackals, and the rare Indian Eagle-Owl. A jeep or canter safari is around 3 hours long but it offers nature lovers enough time to bask in the lush forest area.</p>

            <h3><b>Keoladeo Ghana Bird Sanctuary, Bharatpur</b></h3>
            <p>Birdwatchers flock to this UNESCO World Heritage Site to spot some of the rarest winged creatures that descend here during the winter months. A bicycle tour of Keoladeo is a must or you can even hire a cycle rickshaw.</p>

            <h3><b>Desert National Park, Jaisalmer</b></h3>
            <p>A sanctuary unlike any other in Rajasthan, the Desert National Park was set up to conserve the Thar Desert ecosystem. The scanty vegetation and sand dunes is home the critically endangered Indian bustard, the state bird of Rajasthan. A number of migratory raptors can also be spotted here.</p>

            <h3><b>Mount Abu Sanctuary, Mount Abu</b></h3>
            <p>With a bird population of over 250 species, and set along a narrow plateau, this sanctuary is the perfect destination for a morning hike. Bamboo trees and orchids are spread out through the sanctuary at Rajasthan’s only hill station.</p>
        </div>

        <p class="bottom">
        <h2><b>This list of things to do in Rajasthan is not inexhaustible but it does cover some of the major attractions in the desert state. As a traveller, you should pick the ones you think you will enjoy the most.</b></h2>
        </p>


    </div>


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