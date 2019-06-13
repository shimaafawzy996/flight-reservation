<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Booking</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{asset('images/signup-img.jpg')}}" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="{{route('bookings.store')}}">
                    {{ csrf_field() }}
                        <h2>This Flight is Available</h2>
                        <h3>Please..Enter Your Personal Information to confirm Your Booking</h3>
                       
                            <div class="form-group">
                                <label for="name">Your Name :</label>
                                <input type="text" name="name" id="name" placeholder="Enter Your Name..." required/>
                            </div>
                           
                        
                        <div class="form-group">
                            <label for="address">Your Email :</label>
                            <input type="text" name="email" id="address" placeholder="username@example.com" required/>
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="address">Phone Number :</label>
                            <input type="text" name="phonenumber" id="address"  required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Passport Number :</label>
                            <input type="text" name="passnumber" id="address"  required/>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="pincode">Address :</label>
                            <input type="text" name="address" id="pincode">
                        </div>
                        <div class="form-group">
                            <label for="course">Date Of Birth :</label>
                            <input type="date" name="dob" id="pincode">

                            
                        </div>
                        
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Flight Type :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="trip" <?php if (isset($trip) && $trip=="round") echo "checked"; ?> value="round" id="male"  required="required">
                                <label for="male">Round</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="trip" <?php if (isset($trip) && $trip=="oneway") echo "checked"; ?> id="female" value="one-way" required="required">
                                <label for="female">Oneway</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">From :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                    <option value="">Select a location...</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                </select>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">To :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value="">Select a location...</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Vietnam">Vietnam</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                        <label for="departure">Departure date:</label>
                        <input name="deparure" type="date" class="form-control date" id="deparure" placeholder="Select date..." required=""  data-date-format="dd-mm-yyyy">

                     </div>
                        
                        <div class="form-group">
                        <label for="return">Return date:</label>
                        <input name="return1" type="date" class="form-control date" id="return" placeholder="Select date..." required=""  data-date-format="dd-mm-yyyy">

                        </div>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Book Now" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
</body>

</html>