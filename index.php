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
    <?php $page='home'; include("header.inc") ?>

    <!--Top animated banner-->
    <!--Both Article and Section starts with a Heading; hence using div-->
    <div id="banner_slideshow">
        <figure>
            <img src="images/pexels-oleksandr-pidvalnyi-1004584.jpg" alt="slider-image_1"> 
            <img src="images/pexels-jimmy-teoh-1010657.jpg" alt="slider-image_2"> 
            <img src="images/pexels-pixabay-38302.jpg" alt="slider-image_3"> 
            <img src="images/pexels-te-lensfix-1371360.jpg" alt="slider-image_4"> 
            <img src="images/pexels-oleksandr-pidvalnyi-1004584.jpg" alt="slider-image_1"> 
        </figure>
    </div>


    <!--Page Data in text; i.e. exlcuding images and tables-->
    <section id="page_content">
        <h2 id="quotations">"Booking flights have never been any easier...</h2>
        <h1>Explore Destinations</h1>
        <p>Not sure where to go? Browse through our special offers just for you!</p>
    </section><br><br>


    <!--Destination cards-->
    <!--Card type layout for different suggested destinations-->
    <div id="destination_cards"

        <!--A card for a destination; every destination has its own div-->
        <div class="single_destination_card">
            <!--using table for organising data in the cards-->
            <table class="destination_content">
                <tr>
                    <th rowspan="4"> <!--Card side-image; destination image-->
                        <img src="images/pexels-ingo-joseph-109629.jpg" alt="Berliner Fernsehturm" class="destination_img">
                    </th>
                    <td colspan="3"> <!--Destination name-->
                        <a href="https://www.visitberlin.de/en"><h3>Berlin, Germany</h3></a>
                    </td>
                </tr>
                <tr> <!--Air route with airlines-->
                    <td colspan="3"><p>MEL-BER with Singapore Airlines</p></td>
                </tr>
                <tr> <!--other mislanious information about the trip-->
                    <td class="air_stop"><p><strong>1 Stop:</strong> Moscow</p></td>
                    <td><p>✈️ <strong>ETA: </strong>17:18</p></td>
                    <td><p>🧳25Kg</p></td>
                </tr>
                <tr>
                    <td><h3>A$499.00</h3></td>
                    <!--select option to book tickets; just prototype-->
                    <td colspan="2" class="right_intend">
                        <select class="seats_select_main">
                            <option value="">{Reserve Seats}</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>

        <!--card for destination 2: hawaii-->
        <div class="single_destination_card"> 
            <table class="destination_content">
                <tr>
                    <th rowspan="4">
                        <img src="images/pexels-jess-loiterton-4321085.jpg" alt="Hawaii Beach" class="destination_img">
                    </th>
                    <td colspan="3">
                        <a href="https://www.gohawaii.com/"><h3>Hawaii, Western United States</h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><p>MEL-HNL with Jetstar Airways</p></td>
                </tr>
                <tr>
                    <td class="air_stop"><p><strong>No Stops</strong></p></td>
                    <td><p>✈️ <strong>ETA: </strong>8:26</p></td>
                    <td><p>🧳12Kg</p></td>
                </tr>
                <tr>
                    <td><h3>A$549.00</h3></td>
                    <td colspan="2" class="right_intend">
                        <select class="seats_select_main">
                            <option value="">{Reserve Seats}</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>

        <!--card for destination 3: paris-->
        <div class="single_destination_card"> 
            <table class="destination_content">
                <tr>
                    <th rowspan="4">
                        <img src="images/pexels-dimitri-kuliuk-1488315.jpg" alt="Eiffel Tower" class="destination_img">
                    </th>
                    <td colspan="3">
                        <a href="https://en.parisinfo.com/"><h3>Paris, France</h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><p>MEL-CDG with British Airways</p></td>
                </tr>
                <tr>
                    <td class="air_stop"><p><strong>1 Stop:</strong> Dubai</p></td>
                    <td><p>✈️ <strong>ETA: </strong>16:53</p></td>
                    <td><p>🧳20Kg</p></td>
                </tr>
                <tr>
                    <td><h3>A$499.00</h3></td>
                    <td colspan="2" class="right_intend">
                        <select class="seats_select_main">
                            <option value="">{Reserve Seats}</option>
                            <option value="seat_1">1</option>
                            <option value="seat_2">2</option>
                            <option value="seat_3">3</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <?php include("footer.inc") ?>
</body>
</html>
