<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="utkarsh"/>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 1024px)"/>
    <title>Delta Flights</title>
</head>

<body>    
    <?php $page='product'; include("header.inc") ?>

    <img src="images/pexels-jason-toevs-2033343.jpg" alt="Cover Image" id="cover_img">
            
    <section id="page_content">          
        <h1>Explore flights</h1>
        <section class="explore_section">
            <h2>Book your Dreams!</h2>
            <p>Take the first step in booking tickets to your dream destination.</p>
            
            <form method="post" action="http://mercury.swin.edu.au/it000000/formtest.php" id="book_flight">
                <div>
                    <label>From: </label>
                    <input list="book_from_options" name="book_from" class="book_from">
                    <datalist id="book_from_options">
                        <option value="book_from_mel">Melbourne (MEL)</option>
                        <option value="book_from_ade">Adelaide (ADE)</option>
                        <option value="book_from_syd">Sydney (SYD)</option>
                    </datalist>
                </div>

                <div>
                    <label>To: </label>
                    <input list="book_to_options" name="book_from" class="book_from">
                    <datalist id="book_to_options">
                        <option value="book_from_lon">London (LON)</option>
                        <option value="book_from_nyc">New York City (NYC)</option>
                        <option value="book_from_par">Paris (PAR)</option>
                        <option value="book_from_ber">Berlin (BER)</option>
                        <option value="book_from_wel">Wellington (WEL)</option>
                        <option value="book_from_mos">Moscow (MOS)</option>
                        <option value="book_from_zur">Zurich (ZUR)</option>
                    </datalist>
                </div>

                <div>
                    <label for="book_date_start">Starting: </label>
                    <input type="text" name="book_date" id="book_date_start" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" placeholder="DD.MM.YYYY">
                </div>

                <div>
                    <label for="book_date_end">Til: </label>
                    <input type="text" name="book_till" id="book_date_end" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" placeholder="DD.MM.YYYY">
                </div>

                <div>
                    <select class="seats_select">
                        <option value="">Seats</option>
                        <option value="seat_1">1</option>
                        <option value="seat_2">2</option>
                        <option value="seat_3">3</option>
                        <option value="seat_3">4</option>
                        <option value="seat_3">5</option>
                        <option value="seat_3">6</option>
                        <option value="seat_3">7</option>
                        <option value="seat_3">8</option>
                        <option value="seat_3">9+</option>
                    </select>
                </div>
            </form>
        </section>

        <section class="explore_section">
            <h2>Last minute book</h2>
            <p>Book flights on the very last moment and take advantage of our biggest discounts!</p>
            <br>

            <table id="discount_flights">
                <tr>
                    <th class="center_allign">S.No.</th>
                    <th>Destination</th>
                    <th>Airlines</th>
                    <th>Time</th>
                    <th>Price</th>
                    <th class="center_allign">Reserve Seats</th>
                </tr>
                <tr>
                    <td class="center_allign">1</td>
                    <td><strong>Sydney</strong>, Australia</td>
                    <td><a href="https://www.qantas.com/au/en.html">Qantas ></a></td>
                    <td>18:30</td>
                    <td>A$ 150.00</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">2</td>
                    <td><strong>Wellington</strong>, New Zealand</td>
                    <td><a href="https://www.jetstar.com/us/en/home">Jetstar ></a></td>
                    <td>22:30</td>
                    <td>A$ 449.99</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">3</td>
                    <td><strong>Perth</strong>, Australia</td>
                    <td><a href="https://www.jetstar.com/us/en/home">Jetstar ></a></td>
                    <td>19:30</td>
                    <td>A$ 230.00</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">4</td>
                    <td><strong>Brisbane</strong>, </td>
                    <td><a href="https://www.qantas.com/au/en.html">Qantas ></a></td>
                    <td>17:45</td>
                    <td>A$ 180.50</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">5</td>
                    <td><strong>Aukland</strong>, </td>
                    <td><a href="https://www.qantas.com/au/en.html">Qantas ></a></td>
                    <td>21:30</td>
                    <td>A$ 399.99</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">6</td>
                    <td><strong>New Delhi</strong>, India</td>
                    <td><a href="https://www.airindia.in/">Air India ></a></td>
                    <td>20:00</td>
                    <td>A$ 499.99</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">7</td>
                    <td><strong>Shanghai</strong>, China</td>
                    <td><a href="https://www.cebupacificair.com/">Cebu Pacific ></a></td>
                    <td>22:30</td>
                    <td>A$ 949.99</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">8</td>
                    <td><strong>Merauke</strong>, Indonesia</td>
                    <td><a href="https://www.qantas.com/au/en.html">Qantas ></a></td>
                    <td>23:45</td>
                    <td>A$ 750.00</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="center_allign">9</td>
                    <td><strong>Cape Town</strong>, South Africa</td>
                    <td><a href="https://www.singaporeair.com/en_UK/au/home">Singapore Airlines ></a></td>
                    <td>19:00</td>
                    <td>A$ 1499.00</td>
                    <td class="center_allign">
                        <select class="seats_select">
                            <option value="">Book Seats</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p class="tnc">*These tickets would not be refunded.</p>
        </section> 
        
        <section class="explore_section">
            <h2>Explore more!</h2>
            <aside id="explore">
                <article>
                    <h3>Ready to jump back into the world?</h3>
                    <p>
                        Here are some of the trending destinations for your summer
                    </p>
                    <ol>
                        <li>London, England</li>
                        <li>New york City, US</li>
                        <li>Zurich, Switzerland</li>
                        <li>Tokyo, Japan</li>
                        <li>Mexico City, Mexico</li>
                        <li>St. Petersburg, Russia</li>
                        <li>Budapest Hungary</li>
                        <li>Toronto, Canada</li>
                        <li>Wellington, New Zealand</li>
                    </ol>
                </article>
                
                <article>
                    <br><br>
                    <h3>Must carry</h3>
                    <p>
                        Don't pack your bags without these essentials
                    </p>
                    <ul>
                        <li><a href="https://www.ray-ban.com/australia">Sunglasses</a></li>
                        <li><a href="https://www.sephora.com">Dry Shampoo</a></li>
                        <li><a href="https://www.amazon.com/GRAYL-Ultralight-Purifier-Filter-Bottle/dp/B01M66C1KH/">Travel Water Bottle</a></li>
                        <li><a href="https://www.amazon.com/Fujifilm-16-2MP-Digital-Camera-Optical/dp/B00QHA5KHA/">Digital Camera</a></li>
                    </ul>
                </article>
            </aside>
            <img src="images/pexels-photo-6434442.jpg" alt="hehe" id="explore_img">
        </section>
    </section>

    <?php include("footer.inc") ?>
</body>
</html>
