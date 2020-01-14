@extends('layouts/form_layout')
@section('form')

<div>
    <h4 class="mb-6">Pledge Support</h4>
    <p class="mb-4">Help us in our endeavour to reach as many children, in as many government schools as possible, with our low cost Telugu edition of the book 'A Dot that went for a walk'. We aim to inspire children even in the remotest parts of rural Andhra/Telangana, with stories of role models that they can look up to, as they discover their highest potential.</p>
    <p class="mb-4">Copies of the Telugu translation of the book “The Dot that went for a walk” which will be distributed to children in government schools. The book is priced at Rs.120.</p>
    <form class="ui form" method="POST" action="/message">
        @csrf
        @if($errors->any())
            <div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">
                    There seems to be error(s) in your entry.
                </div>
                <p>Please check and try again.
                </p></div>
        @endif


        @if(session('message-success'))
            <div id="india-notification" class="notification">
                <div class="content">
                    <p class="mb-2">Thank you for submitting the message!<br/></p>
                    <p>We will get back to you shortly.</p>
                    <div id="notification-close-btn" class="close-btn">
                        [x] Close
                    </div>
                </div>
            </div>
        @endif



        <div class="max-w-3xl mx-auto">
            <div class="mx-auto min-w-full">
                {{--<div :class="{ 'error': $v.name.$error , 'field': true}" >--}}
                <div class="field">
                    <label for="name">Full Name</label>
                    <input required id="name" name="name" type="text"
                           placeholder="First Name, Last Name">
                </div>


                {{--<div class="ui action input" :class="{ 'error': $v.phone.$error , 'field': true}">--}}
                <div class="field">
                    <label for="phone">Phone Number</label>
                    <div class="ui action input">



                        <label for="code" id="code"></label>
                        <select placeholder="Country Code"
                                class="ui search dropdown" required name="code"
                                type="number">
                            <option value="">Select Country Code</option>
                            <option data-countryCode="IN" value="91">India (+91)
                            </option>
                            <option data-countryCode="US" value="1">UK (+44)
                            </option>
                            <optgroup label="Other countries">
                                <option data-countryCode="DZ" value="213">Algeria
                                    (+213)
                                </option>
                                <option data-countryCode="AD" value="376">Andorra
                                    (+376)
                                </option>
                                <option data-countryCode="AO" value="244">Angola
                                    (+244)
                                </option>
                                <option data-countryCode="AI" value="1264">Anguilla
                                    (+1264)
                                </option>
                                <option data-countryCode="AG" value="1268">Antigua
                                    &amp; Barbuda (+1268)
                                </option>
                                <option data-countryCode="AR" value="54">Argentina
                                    (+54)
                                </option>
                                <option data-countryCode="AM" value="374">Armenia
                                    (+374)
                                </option>
                                <option data-countryCode="AW" value="297">Aruba
                                    (+297)
                                </option>
                                <option data-countryCode="AU" value="61">Australia
                                    (+61)
                                </option>
                                <option data-countryCode="AT" value="43">Austria
                                    (+43)
                                </option>
                                <option data-countryCode="AZ" value="994">Azerbaijan
                                    (+994)
                                </option>
                                <option data-countryCode="BS" value="1242">Bahamas
                                    (+1242)
                                </option>
                                <option data-countryCode="BH" value="973">Bahrain
                                    (+973)
                                </option>
                                <option data-countryCode="BD" value="880">Bangladesh
                                    (+880)
                                </option>
                                <option data-countryCode="BB" value="1246">Barbados
                                    (+1246)
                                </option>
                                <option data-countryCode="BY" value="375">Belarus
                                    (+375)
                                </option>
                                <option data-countryCode="BE" value="32">Belgium
                                    (+32)
                                </option>
                                <option data-countryCode="BZ" value="501">Belize
                                    (+501)
                                </option>
                                <option data-countryCode="BJ" value="229">Benin
                                    (+229)
                                </option>
                                <option data-countryCode="BM" value="1441">Bermuda
                                    (+1441)
                                </option>
                                <option data-countryCode="BT" value="975">Bhutan
                                    (+975)
                                </option>
                                <option data-countryCode="BO" value="591">Bolivia
                                    (+591)
                                </option>
                                <option data-countryCode="BA" value="387">Bosnia
                                    Herzegovina (+387)
                                </option>
                                <option data-countryCode="BW" value="267">Botswana
                                    (+267)
                                </option>
                                <option data-countryCode="BR" value="55">Brazil
                                    (+55)
                                </option>
                                <option data-countryCode="BN" value="673">Brunei
                                    (+673)
                                </option>
                                <option data-countryCode="BG" value="359">Bulgaria
                                    (+359)
                                </option>
                                <option data-countryCode="BF" value="226">Burkina
                                    Faso (+226)
                                </option>
                                <option data-countryCode="BI" value="257">Burundi
                                    (+257)
                                </option>
                                <option data-countryCode="KH" value="855">Cambodia
                                    (+855)
                                </option>
                                <option data-countryCode="CM" value="237">Cameroon
                                    (+237)
                                </option>
                                <option data-countryCode="CA" value="1">Canada
                                    (+1)
                                </option>
                                <option data-countryCode="CV" value="238">Cape Verde
                                    Islands (+238)
                                </option>
                                <option data-countryCode="KY" value="1345">Cayman
                                    Islands (+1345)
                                </option>
                                <option data-countryCode="CF" value="236">Central
                                    African Republic (+236)
                                </option>
                                <option data-countryCode="CL" value="56">Chile
                                    (+56)
                                </option>
                                <option data-countryCode="CN" value="86">China
                                    (+86)
                                </option>
                                <option data-countryCode="CO" value="57">Colombia
                                    (+57)
                                </option>
                                <option data-countryCode="KM" value="269">Comoros
                                    (+269)
                                </option>
                                <option data-countryCode="CG" value="242">Congo
                                    (+242)
                                </option>
                                <option data-countryCode="CK" value="682">Cook
                                    Islands (+682)
                                </option>
                                <option data-countryCode="CR" value="506">Costa Rica
                                    (+506)
                                </option>
                                <option data-countryCode="HR" value="385">Croatia
                                    (+385)
                                </option>
                                <option data-countryCode="CU" value="53">Cuba
                                    (+53)
                                </option>
                                <option data-countryCode="CY" value="90392">Cyprus
                                    North (+90392)
                                </option>
                                <option data-countryCode="CY" value="357">Cyprus
                                    South (+357)
                                </option>
                                <option data-countryCode="CZ" value="42">Czech
                                    Republic (+42)
                                </option>
                                <option data-countryCode="DK" value="45">Denmark
                                    (+45)
                                </option>
                                <option data-countryCode="DJ" value="253">Djibouti
                                    (+253)
                                </option>
                                <option data-countryCode="DM" value="1809">Dominica
                                    (+1809)
                                </option>
                                <option data-countryCode="DO" value="1809">Dominican
                                    Republic (+1809)
                                </option>
                                <option data-countryCode="EC" value="593">Ecuador
                                    (+593)
                                </option>
                                <option data-countryCode="EG" value="20">Egypt
                                    (+20)
                                </option>
                                <option data-countryCode="SV" value="503">El
                                    Salvador (+503)
                                </option>
                                <option data-countryCode="GQ" value="240">Equatorial
                                    Guinea (+240)
                                </option>
                                <option data-countryCode="ER" value="291">Eritrea
                                    (+291)
                                </option>
                                <option data-countryCode="EE" value="372">Estonia
                                    (+372)
                                </option>
                                <option data-countryCode="ET" value="251">Ethiopia
                                    (+251)
                                </option>
                                <option data-countryCode="FK" value="500">Falkland
                                    Islands (+500)
                                </option>
                                <option data-countryCode="FO" value="298">Faroe
                                    Islands (+298)
                                </option>
                                <option data-countryCode="FJ" value="679">Fiji
                                    (+679)
                                </option>
                                <option data-countryCode="FI" value="358">Finland
                                    (+358)
                                </option>
                                <option data-countryCode="FR" value="33">France
                                    (+33)
                                </option>
                                <option data-countryCode="GF" value="594">French
                                    Guiana (+594)
                                </option>
                                <option data-countryCode="PF" value="689">French
                                    Polynesia (+689)
                                </option>
                                <option data-countryCode="GA" value="241">Gabon
                                    (+241)
                                </option>
                                <option data-countryCode="GM" value="220">Gambia
                                    (+220)
                                </option>
                                <option data-countryCode="GE" value="7880">Georgia
                                    (+7880)
                                </option>
                                <option data-countryCode="DE" value="49">Germany
                                    (+49)
                                </option>
                                <option data-countryCode="GH" value="233">Ghana
                                    (+233)
                                </option>
                                <option data-countryCode="GI" value="350">Gibraltar
                                    (+350)
                                </option>
                                <option data-countryCode="GR" value="30">Greece
                                    (+30)
                                </option>
                                <option data-countryCode="GL" value="299">Greenland
                                    (+299)
                                </option>
                                <option data-countryCode="GD" value="1473">Grenada
                                    (+1473)
                                </option>
                                <option data-countryCode="GP" value="590">Guadeloupe
                                    (+590)
                                </option>
                                <option data-countryCode="GU" value="671">Guam
                                    (+671)
                                </option>
                                <option data-countryCode="GT" value="502">Guatemala
                                    (+502)
                                </option>
                                <option data-countryCode="GN" value="224">Guinea
                                    (+224)
                                </option>
                                <option data-countryCode="GW" value="245">Guinea -
                                    Bissau (+245)
                                </option>
                                <option data-countryCode="GY" value="592">Guyana
                                    (+592)
                                </option>
                                <option data-countryCode="HT" value="509">Haiti
                                    (+509)
                                </option>
                                <option data-countryCode="HN" value="504">Honduras
                                    (+504)
                                </option>
                                <option data-countryCode="HK" value="852">Hong Kong
                                    (+852)
                                </option>
                                <option data-countryCode="HU" value="36">Hungary
                                    (+36)
                                </option>
                                <option data-countryCode="IS" value="354">Iceland
                                    (+354)
                                </option>

                                <option data-countryCode="ID" value="62">Indonesia
                                    (+62)
                                </option>
                                <option data-countryCode="IR" value="98">Iran
                                    (+98)
                                </option>
                                <option data-countryCode="IQ" value="964">Iraq
                                    (+964)
                                </option>
                                <option data-countryCode="IE" value="353">Ireland
                                    (+353)
                                </option>
                                <option data-countryCode="IL" value="972">Israel
                                    (+972)
                                </option>
                                <option data-countryCode="IT" value="39">Italy
                                    (+39)
                                </option>
                                <option data-countryCode="JM" value="1876">Jamaica
                                    (+1876)
                                </option>
                                <option data-countryCode="JP" value="81">Japan
                                    (+81)
                                </option>
                                <option data-countryCode="JO" value="962">Jordan
                                    (+962)
                                </option>
                                <option data-countryCode="KZ" value="7">Kazakhstan
                                    (+7)
                                </option>
                                <option data-countryCode="KE" value="254">Kenya
                                    (+254)
                                </option>
                                <option data-countryCode="KI" value="686">Kiribati
                                    (+686)
                                </option>
                                <option data-countryCode="KP" value="850">Korea
                                    North (+850)
                                </option>
                                <option data-countryCode="KR" value="82">Korea South
                                    (+82)
                                </option>
                                <option data-countryCode="KW" value="965">Kuwait
                                    (+965)
                                </option>
                                <option data-countryCode="KG" value="996">Kyrgyzstan
                                    (+996)
                                </option>
                                <option data-countryCode="LA" value="856">Laos
                                    (+856)
                                </option>
                                <option data-countryCode="LV" value="371">Latvia
                                    (+371)
                                </option>
                                <option data-countryCode="LB" value="961">Lebanon
                                    (+961)
                                </option>
                                <option data-countryCode="LS" value="266">Lesotho
                                    (+266)
                                </option>
                                <option data-countryCode="LR" value="231">Liberia
                                    (+231)
                                </option>
                                <option data-countryCode="LY" value="218">Libya
                                    (+218)
                                </option>
                                <option data-countryCode="LI" value="417">
                                    Liechtenstein (+417)
                                </option>
                                <option data-countryCode="LT" value="370">Lithuania
                                    (+370)
                                </option>
                                <option data-countryCode="LU" value="352">Luxembourg
                                    (+352)
                                </option>
                                <option data-countryCode="MO" value="853">Macao
                                    (+853)
                                </option>
                                <option data-countryCode="MK" value="389">Macedonia
                                    (+389)
                                </option>
                                <option data-countryCode="MG" value="261">Madagascar
                                    (+261)
                                </option>
                                <option data-countryCode="MW" value="265">Malawi
                                    (+265)
                                </option>
                                <option data-countryCode="MY" value="60">Malaysia
                                    (+60)
                                </option>
                                <option data-countryCode="MV" value="960">Maldives
                                    (+960)
                                </option>
                                <option data-countryCode="ML" value="223">Mali
                                    (+223)
                                </option>
                                <option data-countryCode="MT" value="356">Malta
                                    (+356)
                                </option>
                                <option data-countryCode="MH" value="692">Marshall
                                    Islands (+692)
                                </option>
                                <option data-countryCode="MQ" value="596">Martinique
                                    (+596)
                                </option>
                                <option data-countryCode="MR" value="222">Mauritania
                                    (+222)
                                </option>
                                <option data-countryCode="YT" value="269">Mayotte
                                    (+269)
                                </option>
                                <option data-countryCode="MX" value="52">Mexico
                                    (+52)
                                </option>
                                <option data-countryCode="FM" value="691">Micronesia
                                    (+691)
                                </option>
                                <option data-countryCode="MD" value="373">Moldova
                                    (+373)
                                </option>
                                <option data-countryCode="MC" value="377">Monaco
                                    (+377)
                                </option>
                                <option data-countryCode="MN" value="976">Mongolia
                                    (+976)
                                </option>
                                <option data-countryCode="MS" value="1664">
                                    Montserrat (+1664)
                                </option>
                                <option data-countryCode="MA" value="212">Morocco
                                    (+212)
                                </option>
                                <option data-countryCode="MZ" value="258">Mozambique
                                    (+258)
                                </option>
                                <option data-countryCode="MN" value="95">Myanmar
                                    (+95)
                                </option>
                                <option data-countryCode="NA" value="264">Namibia
                                    (+264)
                                </option>
                                <option data-countryCode="NR" value="674">Nauru
                                    (+674)
                                </option>
                                <option data-countryCode="NP" value="977">Nepal
                                    (+977)
                                </option>
                                <option data-countryCode="NL" value="31">Netherlands
                                    (+31)
                                </option>
                                <option data-countryCode="NC" value="687">New
                                    Caledonia (+687)
                                </option>
                                <option data-countryCode="NZ" value="64">New Zealand
                                    (+64)
                                </option>
                                <option data-countryCode="NI" value="505">Nicaragua
                                    (+505)
                                </option>
                                <option data-countryCode="NE" value="227">Niger
                                    (+227)
                                </option>
                                <option data-countryCode="NG" value="234">Nigeria
                                    (+234)
                                </option>
                                <option data-countryCode="NU" value="683">Niue
                                    (+683)
                                </option>
                                <option data-countryCode="NF" value="672">Norfolk
                                    Islands (+672)
                                </option>
                                <option data-countryCode="NP" value="670">Northern
                                    Marianas (+670)
                                </option>
                                <option data-countryCode="NO" value="47">Norway
                                    (+47)
                                </option>
                                <option data-countryCode="OM" value="968">Oman
                                    (+968)
                                </option>
                                <option data-countryCode="PW" value="680">Palau
                                    (+680)
                                </option>
                                <option data-countryCode="PA" value="507">Panama
                                    (+507)
                                </option>
                                <option data-countryCode="PG" value="675">Papua New
                                    Guinea (+675)
                                </option>
                                <option data-countryCode="PY" value="595">Paraguay
                                    (+595)
                                </option>
                                <option data-countryCode="PE" value="51">Peru
                                    (+51)
                                </option>
                                <option data-countryCode="PH" value="63">Philippines
                                    (+63)
                                </option>
                                <option data-countryCode="PL" value="48">Poland
                                    (+48)
                                </option>
                                <option data-countryCode="PT" value="351">Portugal
                                    (+351)
                                </option>
                                <option data-countryCode="PR" value="1787">Puerto
                                    Rico (+1787)
                                </option>
                                <option data-countryCode="QA" value="974">Qatar
                                    (+974)
                                </option>
                                <option data-countryCode="RE" value="262">Reunion
                                    (+262)
                                </option>
                                <option data-countryCode="RO" value="40">Romania
                                    (+40)
                                </option>
                                <option data-countryCode="RU" value="7">Russia
                                    (+7)
                                </option>
                                <option data-countryCode="RW" value="250">Rwanda
                                    (+250)
                                </option>
                                <option data-countryCode="SM" value="378">San Marino
                                    (+378)
                                </option>
                                <option data-countryCode="ST" value="239">Sao Tome
                                    &amp; Principe (+239)
                                </option>
                                <option data-countryCode="SA" value="966">Saudi
                                    Arabia (+966)
                                </option>
                                <option data-countryCode="SN" value="221">Senegal
                                    (+221)
                                </option>
                                <option data-countryCode="CS" value="381">Serbia
                                    (+381)
                                </option>
                                <option data-countryCode="SC" value="248">Seychelles
                                    (+248)
                                </option>
                                <option data-countryCode="SL" value="232">Sierra
                                    Leone (+232)
                                </option>
                                <option data-countryCode="SG" value="65">Singapore
                                    (+65)
                                </option>
                                <option data-countryCode="SK" value="421">Slovak
                                    Republic (+421)
                                </option>
                                <option data-countryCode="SI" value="386">Slovenia
                                    (+386)
                                </option>
                                <option data-countryCode="SB" value="677">Solomon
                                    Islands (+677)
                                </option>
                                <option data-countryCode="SO" value="252">Somalia
                                    (+252)
                                </option>
                                <option data-countryCode="ZA" value="27">South
                                    Africa (+27)
                                </option>
                                <option data-countryCode="ES" value="34">Spain
                                    (+34)
                                </option>
                                <option data-countryCode="LK" value="94">Sri Lanka
                                    (+94)
                                </option>
                                <option data-countryCode="SH" value="290">St. Helena
                                    (+290)
                                </option>
                                <option data-countryCode="KN" value="1869">St. Kitts
                                    (+1869)
                                </option>
                                <option data-countryCode="SC" value="1758">St. Lucia
                                    (+1758)
                                </option>
                                <option data-countryCode="SD" value="249">Sudan
                                    (+249)
                                </option>
                                <option data-countryCode="SR" value="597">Suriname
                                    (+597)
                                </option>
                                <option data-countryCode="SZ" value="268">Swaziland
                                    (+268)
                                </option>
                                <option data-countryCode="SE" value="46">Sweden
                                    (+46)
                                </option>
                                <option data-countryCode="CH" value="41">Switzerland
                                    (+41)
                                </option>
                                <option data-countryCode="SI" value="963">Syria
                                    (+963)
                                </option>
                                <option data-countryCode="TW" value="886">Taiwan
                                    (+886)
                                </option>
                                <option data-countryCode="TJ" value="7">Tajikstan
                                    (+7)
                                </option>
                                <option data-countryCode="TH" value="66">Thailand
                                    (+66)
                                </option>
                                <option data-countryCode="TG" value="228">Togo
                                    (+228)
                                </option>
                                <option data-countryCode="TO" value="676">Tonga
                                    (+676)
                                </option>
                                <option data-countryCode="TT" value="1868">Trinidad
                                    &amp; Tobago (+1868)
                                </option>
                                <option data-countryCode="TN" value="216">Tunisia
                                    (+216)
                                </option>
                                <option data-countryCode="TR" value="90">Turkey
                                    (+90)
                                </option>
                                <option data-countryCode="TM" value="7">Turkmenistan
                                    (+7)
                                </option>
                                <option data-countryCode="TM" value="993">
                                    Turkmenistan (+993)
                                </option>
                                <option data-countryCode="TC" value="1649">Turks
                                    &amp; Caicos Islands (+1649)
                                </option>
                                <option data-countryCode="TV" value="688">Tuvalu
                                    (+688)
                                </option>
                                <option data-countryCode="UG" value="256">Uganda
                                    (+256)
                                </option>
                                <option data-countryCode="GB" value="44">UK (+44)
                                </option>
                                <option data-countryCode="UA" value="380">Ukraine
                                    (+380)
                                </option>
                                <option data-countryCode="AE" value="971">United
                                    Arab Emirates (+971)
                                </option>
                                <option data-countryCode="UY" value="598">Uruguay
                                    (+598)
                                </option>
                                <option data-countryCode="US" value="1">USA (+1)
                                </option>
                                <option data-countryCode="UZ" value="7">Uzbekistan
                                    (+7)
                                </option>
                                <option data-countryCode="VU" value="678">Vanuatu
                                    (+678)
                                </option>
                                <option data-countryCode="VA" value="379">Vatican
                                    City (+379)
                                </option>
                                <option data-countryCode="VE" value="58">Venezuela
                                    (+58)
                                </option>
                                <option data-countryCode="VN" value="84">Vietnam
                                    (+84)
                                </option>
                                <option data-countryCode="VG" value="84">Virgin
                                    Islands - British (+1284)
                                </option>
                                <option data-countryCode="VI" value="84">Virgin
                                    Islands - US (+1340)
                                </option>
                                <option data-countryCode="WF" value="681">Wallis
                                    &amp; Futuna (+681)
                                </option>
                                <option data-countryCode="YE" value="969">Yemen
                                    (North)(+969)
                                </option>
                                <option data-countryCode="YE" value="967">Yemen
                                    (South)(+967)
                                </option>
                                <option data-countryCode="ZM" value="260">Zambia
                                    (+260)
                                </option>
                                <option data-countryCode="ZW" value="263">Zimbabwe
                                    (+263)
                                </option>
                            </optgroup>
                        </select>



                        <input maxlength="10" minlength="10" required id="phone"
                               name="phone"
                               type="number" placeholder="Phone Number">




                    </div>
                </div>

                <div class="field">
                    {{--<div :class="{ 'error': $v.email.$error , 'field': true}">--}}
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email"
                           placeholder="example@gmail.com">
                </div>

                <div class="field">
                    {{--<div :class="{ 'error': $v.country.$error , 'field': true}">--}}
                    <label>Country</label>
                    <select required name="country" class="ui search dropdown">
                        <option value="">Select Country</option>
                        <option value="AF-Afghanistan">Afghanistan</option>
                        <option value="AX-Åland Islands">Åland Islands</option>
                        <option value="AL-Albania">Albania</option>
                        <option value="DZ-Algeria">Algeria</option>
                        <option value="AS-American Samoa">American Samoa</option>
                        <option value="AD-Andorra">Andorra</option>
                        <option value="AO-Angola">Angola</option>
                        <option value="AI-Anguilla">Anguilla</option>
                        <option value="AQ-Antarctica">Antarctica</option>
                        <option value="AG-Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="AR-Argentina">Argentina</option>
                        <option value="AM-Armenia">Armenia</option>
                        <option value="AW-Aruba">Aruba</option>
                        <option value="AU-Australia">Australia</option>
                        <option value="AT-Austria">Austria</option>
                        <option value="AZ-Azerbaijan">Azerbaijan</option>
                        <option value="BS-Bahamas">Bahamas</option>
                        <option value="BH-Bahrain">Bahrain</option>
                        <option value="BD-Bangladesh">Bangladesh</option>
                        <option value="BB-Barbados">Barbados</option>
                        <option value="BY-Belarus">Belarus</option>
                        <option value="BE-Belgium">Belgium</option>
                        <option value="BZ-Belize">Belize</option>
                        <option value="BJ-Benin">Benin</option>
                        <option value="BM-Bermuda">Bermuda</option>
                        <option value="BT-Bhutan">Bhutan</option>
                        <option value="BO-Bolivia, Plurinational State of">Bolivia, Plurinational
                            State of
                        </option>
                        <option value="BQ-Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                            and Saba
                        </option>
                        <option value="BA-Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="BW-Botswana">Botswana</option>
                        <option value="BV-Bouvet Island">Bouvet Island</option>
                        <option value="BR-Brazil">Brazil</option>
                        <option value="IO-British Indian Ocean Territory">British Indian Ocean
                            Territory
                        </option>
                        <option value="BN-Brunei Darussalam">Brunei Darussalam</option>
                        <option value="BG-Bulgaria">Bulgaria</option>
                        <option value="BF-Burkina Faso">Burkina Faso</option>
                        <option value="BI-Burundi">Burundi</option>
                        <option value="KH-Cambodia">Cambodia</option>
                        <option value="CM-Cameroon">Cameroon</option>
                        <option value="CA-Canada">Canada</option>
                        <option value="CV-Cape Verde">Cape Verde</option>
                        <option value="KY-Cayman Islands">Cayman Islands</option>
                        <option value="CF-Central African Republic">Central African Republic
                        </option>
                        <option value="TD-Chad">Chad</option>
                        <option value="CL-Chile">Chile</option>
                        <option value="CN-China">China</option>
                        <option value="CX-Christmas Island">Christmas Island</option>
                        <option value="CC-Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="CO-Colombia">Colombia</option>
                        <option value="KM-Comoros">Comoros</option>
                        <option value="CG-Congo">Congo</option>
                        <option value="CD-Congo, the Democratic Republic of the">Congo, the
                            Democratic Republic of the
                        </option>
                        <option value="CK-Cook Islands">Cook Islands</option>
                        <option value="CR-Costa Rica">Costa Rica</option>
                        <option value="CI-Côte d'Ivoire">Côte d'Ivoire</option>
                        <option value="HR-Croatia">Croatia</option>
                        <option value="CU-Cuba">Cuba</option>
                        <option value="CW-Curaçao">Curaçao</option>
                        <option value="CY-Cyprus">Cyprus</option>
                        <option value="CZ-Czech Republic">Czech Republic</option>
                        <option value="DK-Denmark">Denmark</option>
                        <option value="DJ-Djibouti">Djibouti</option>
                        <option value="DM-Dominica">Dominica</option>
                        <option value="DO-Dominican Republic">Dominican Republic</option>
                        <option value="EC-Ecuador">Ecuador</option>
                        <option value="EG-Egypt">Egypt</option>
                        <option value="SV-El Salvador">El Salvador</option>
                        <option value="GQ-Equatorial Guinea">Equatorial Guinea</option>
                        <option value="ER-Eritrea">Eritrea</option>
                        <option value="EE-Estonia">Estonia</option>
                        <option value="ET-Ethiopia">Ethiopia</option>
                        <option value="FK-Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                        </option>
                        <option value="FO-Faroe Islands">Faroe Islands</option>
                        <option value="FJ-Fiji">Fiji</option>
                        <option value="FI-Finland">Finland</option>
                        <option value="FR-France">France</option>
                        <option value="GF-French Guiana">French Guiana</option>
                        <option value="PF-French Polynesia">French Polynesia</option>
                        <option value="TF-French Southern Territories">French Southern Territories
                        </option>
                        <option value="GA-Gabon">Gabon</option>
                        <option value="GM-Gambia">Gambia</option>
                        <option value="GE-Georgia">Georgia</option>
                        <option value="DE-Germany">Germany</option>
                        <option value="GH-Ghana">Ghana</option>
                        <option value="GI-Gibraltar">Gibraltar</option>
                        <option value="GR-Greece">Greece</option>
                        <option value="GL-Greenland">Greenland</option>
                        <option value="GD-Grenada">Grenada</option>
                        <option value="GP-Guadeloupe">Guadeloupe</option>
                        <option value="GU-Guam">Guam</option>
                        <option value="GT-Guatemala">Guatemala</option>
                        <option value="GG-Guernsey">Guernsey</option>
                        <option value="GN-Guinea">Guinea</option>
                        <option value="GW-Guinea-Bissau">Guinea-Bissau</option>
                        <option value="GY-Guyana">Guyana</option>
                        <option value="HT-Haiti">Haiti</option>
                        <option value="HM-Heard Island and McDonald Islands">Heard Island and
                            McDonald Islands
                        </option>
                        <option value="VA-Holy See (Vatican City State)">Holy See (Vatican City
                            State)
                        </option>
                        <option value="HN-Honduras">Honduras</option>
                        <option value="HK-Hong Kong">Hong Kong</option>
                        <option value="HU-Hungary">Hungary</option>
                        <option value="IS-Iceland">Iceland</option>
                        <option value="IN-India">India</option>
                        <option value="ID-Indonesia">Indonesia</option>
                        <option value="IR-Iran, Islamic Republic of">Iran, Islamic Republic of
                        </option>
                        <option value="IQ-Iraq">Iraq</option>
                        <option value="IE-Ireland">Ireland</option>
                        <option value="IM-Isle of Man">Isle of Man</option>
                        <option value="IL-Israel">Israel</option>
                        <option value="IT-Italy">Italy</option>
                        <option value="JM-Jamaica">Jamaica</option>
                        <option value="JP-Japan">Japan</option>
                        <option value="JE-Jersey">Jersey</option>
                        <option value="JO-Jordan">Jordan</option>
                        <option value="KZ-Kazakhstan">Kazakhstan</option>
                        <option value="KE-Kenya">Kenya</option>
                        <option value="KI-Kiribati">Kiribati</option>
                        <option value="KP-Korea, Democratic People's Republic of">Korea, Democratic
                            People's Republic of
                        </option>
                        <option value="KR-Korea, Republic of">Korea, Republic of</option>
                        <option value="KW-Kuwait">Kuwait</option>
                        <option value="KG-Kyrgyzstan">Kyrgyzstan</option>
                        <option value="LA-Lao People's Democratic Republic">Lao People's Democratic
                            Republic
                        </option>
                        <option value="LV-Latvia">Latvia</option>
                        <option value="LB-Lebanon">Lebanon</option>
                        <option value="LS-Lesotho">Lesotho</option>
                        <option value="LR-Liberia">Liberia</option>
                        <option value="LY-Libya">Libya</option>
                        <option value="LI-Liechtenstein">Liechtenstein</option>
                        <option value="LT-Lithuania">Lithuania</option>
                        <option value="LU-Luxembourg">Luxembourg</option>
                        <option value="MO-Macao">Macao</option>
                        <option value="MK-Macedonia, the former Yugoslav Republic of">Macedonia, the
                            former Yugoslav Republic of
                        </option>
                        <option value="MG-Madagascar">Madagascar</option>
                        <option value="MW-Malawi">Malawi</option>
                        <option value="MY-Malaysia">Malaysia</option>
                        <option value="MV-Maldives">Maldives</option>
                        <option value="ML-Mali">Mali</option>
                        <option value="MT-Malta">Malta</option>
                        <option value="MH-Marshall Islands">Marshall Islands</option>
                        <option value="MQ-Martinique">Martinique</option>
                        <option value="MR-Mauritania">Mauritania</option>
                        <option value="MU-Mauritius">Mauritius</option>
                        <option value="YT-Mayotte">Mayotte</option>
                        <option value="MX-Mexico">Mexico</option>
                        <option value="FM-Micronesia, Federated States of">Micronesia, Federated
                            States of
                        </option>
                        <option value="MD-Moldova, Republic of">Moldova, Republic of</option>
                        <option value="MC-Monaco">Monaco</option>
                        <option value="MN-Mongolia">Mongolia</option>
                        <option value="ME-Montenegro">Montenegro</option>
                        <option value="MS-Montserrat">Montserrat</option>
                        <option value="MA-Morocco">Morocco</option>
                        <option value="MZ-Mozambique">Mozambique</option>
                        <option value="MM-Myanmar">Myanmar</option>
                        <option value="NA-Namibia">Namibia</option>
                        <option value="NR-Nauru">Nauru</option>
                        <option value="NP-Nepal">Nepal</option>
                        <option value="NL-Netherlands">Netherlands</option>
                        <option value="NC-New Caledonia">New Caledonia</option>
                        <option value="NZ-New Zealand">New Zealand</option>
                        <option value="NI-Nicaragua">Nicaragua</option>
                        <option value="NE-Niger">Niger</option>
                        <option value="NG-Nigeria">Nigeria</option>
                        <option value="NU-Niue">Niue</option>
                        <option value="NF-Norfolk Island">Norfolk Island</option>
                        <option value="MP-Northern Mariana Islands">Northern Mariana Islands
                        </option>
                        <option value="NO-Norway">Norway</option>
                        <option value="OM-Oman">Oman</option>
                        <option value="PK-Pakistan">Pakistan</option>
                        <option value="PW-Palau">Palau</option>
                        <option value="PS-Palestinian Territory, Occupied">Palestinian Territory,
                            Occupied
                        </option>
                        <option value="PA-Panama">Panama</option>
                        <option value="PG-Papua New Guinea">Papua New Guinea</option>
                        <option value="PY-Paraguay">Paraguay</option>
                        <option value="PE-Peru">Peru</option>
                        <option value="PH-Philippines">Philippines</option>
                        <option value="PN-Pitcairn">Pitcairn</option>
                        <option value="PL-Poland">Poland</option>
                        <option value="PT-Portugal">Portugal</option>
                        <option value="PR-Puerto Rico">Puerto Rico</option>
                        <option value="QA-Qatar">Qatar</option>
                        <option value="RE-Réunion">Réunion</option>
                        <option value="RO-Romania">Romania</option>
                        <option value="RU-Russian Federation">Russian Federation</option>
                        <option value="RW-Rwanda">Rwanda</option>
                        <option value="BL-Saint Barthélemy">Saint Barthélemy</option>
                        <option value="SH-Saint Helena, Ascension and Tristan da Cunha">Saint
                            Helena, Ascension and Tristan da Cunha
                        </option>
                        <option value="KN-Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="LC-Saint Lucia">Saint Lucia</option>
                        <option value="MF-Saint Martin (French part)">Saint Martin (French part)
                        </option>
                        <option value="PM-Saint Pierre and Miquelon">Saint Pierre and Miquelon
                        </option>
                        <option value="VC-Saint Vincent and the Grenadines">Saint Vincent and the
                            Grenadines
                        </option>
                        <option value="WS-Samoa">Samoa</option>
                        <option value="SM-San Marino">San Marino</option>
                        <option value="ST-Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="SA-Saudi Arabia">Saudi Arabia</option>
                        <option value="SN-Senegal">Senegal</option>
                        <option value="RS-Serbia">Serbia</option>
                        <option value="SC-Seychelles">Seychelles</option>
                        <option value="SL-Sierra Leone">Sierra Leone</option>
                        <option value="SG-Singapore">Singapore</option>
                        <option value="SX-Sint Maarten (Dutch part)">Sint Maarten (Dutch part)
                        </option>
                        <option value="SK-Slovakia">Slovakia</option>
                        <option value="SI-Slovenia">Slovenia</option>
                        <option value="SB-Solomon Islands">Solomon Islands</option>
                        <option value="SO-Somalia">Somalia</option>
                        <option value="ZA-South Africa">South Africa</option>
                        <option value="GS-South Georgia and the South Sandwich Islands">South
                            Georgia and the South Sandwich Islands
                        </option>
                        <option value="SS-South Sudan">South Sudan</option>
                        <option value="ES-Spain">Spain</option>
                        <option value="LK-Sri Lanka">Sri Lanka</option>
                        <option value="SD-Sudan">Sudan</option>
                        <option value="SR-Suriname">Suriname</option>
                        <option value="SJ-Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="SZ-Swaziland">Swaziland</option>
                        <option value="SE-Sweden">Sweden</option>
                        <option value="CH-Switzerland">Switzerland</option>
                        <option value="SY-Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="TW-Taiwan, Province of China">Taiwan, Province of China
                        </option>
                        <option value="TJ-Tajikistan">Tajikistan</option>
                        <option value="TZ-Tanzania, United Republic of">Tanzania, United Republic
                            of
                        </option>
                        <option value="TH-Thailand">Thailand</option>
                        <option value="TL-Timor-Leste">Timor-Leste</option>
                        <option value="TG-Togo">Togo</option>
                        <option value="TK-Tokelau">Tokelau</option>
                        <option value="TO-Tonga">Tonga</option>
                        <option value="TT-Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="TN-Tunisia">Tunisia</option>
                        <option value="TR-Turkey">Turkey</option>
                        <option value="TM-Turkmenistan">Turkmenistan</option>
                        <option value="TC-Turks and Caicos Islands">Turks and Caicos Islands
                        </option>
                        <option value="TV-Tuvalu">Tuvalu</option>
                        <option value="UG-Uganda">Uganda</option>
                        <option value="UA-Ukraine">Ukraine</option>
                        <option value="AE-United Arab Emirates">United Arab Emirates</option>
                        <option value="GB-United Kingdom">United Kingdom</option>
                        <option value="US-United States">United States</option>
                        <option value="UM-United States Minor Outlying Islands">United States Minor
                            Outlying Islands
                        </option>
                        <option value="UY-Uruguay">Uruguay</option>
                        <option value="UZ-Uzbekistan">Uzbekistan</option>
                        <option value="VU-Vanuatu">Vanuatu</option>
                        <option value="VE-Venezuela, Bolivarian Republic of">Venezuela, Bolivarian
                            Republic of
                        </option>
                        <option value="VN-Viet Nam">Viet Nam</option>
                        <option value="VG-Virgin Islands, British">Virgin Islands, British</option>
                        <option value="VI-Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="WF-Wallis and Futuna">Wallis and Futuna</option>
                        <option value="EH-Western Sahara">Western Sahara</option>
                        <option value="YE-Yemen">Yemen</option>
                        <option value="ZM-Zambia">Zambia</option>
                        <option value="ZW-Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <!--<input required    type="text" placeholder="">-->
                <!--</div>-->
                <div class="field">
                    {{--<div :class="{ 'error': $v.businesstype.$error , 'field': true}">--}}
                    <label for="businesstype">Type of Business</label>
                    <select required class="ui search dropdown" v-model="businesstype"
                            name="businesstype" id="businesstype">
                        <option value="">Select Business Type</option>
                        <option value="Homes" selected>Homes</option>
                        <option value="Real Estates">Real Estates</option>
                        <option value="Retail">Retail</option>
                        <option value="F & B">F &amp; B</option>
                        <option value="Offices">Offices</option>
                        <option value="Smart Cities">Smart Cities</option>
                    </select>
                </div>
                <div class="mb-4"></div>
                <div class="field">
                    {{--<div :class="{ 'error': $v.message.$error , 'field': true}">--}}
                    <label for="message">Message</label>
                    <textarea required v-model="message" name="message" id="message" cols="30"
                              rows="10"></textarea>
                </div>
                <button class="std-btn primary" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>



@endsection