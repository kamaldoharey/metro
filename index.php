<?php include 'header.php' ?>
<div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/mall/mall-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/mall/mall-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/mall/mall-3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- image -->

    <article class="index-offer-div">
        <div id="index-offer-label" class="custom-bg-1">
            <center> <b class="text-white">Offer</b> </center>
        </div>
        <marquee>
            <?php
            $ins = "select * from offer";
            $exe = mysql_query($ins);
            while ($fetch = mysql_fetch_array($exe)) {
            ?>
                <a href="offer.php?offid=<?php echo $fetch['sno']; ?>">
                    <?php echo $fetch['name']; ?> | </a>
            <?php } ?>
        </marquee>
        <h4 class="text-dark ">Welcome To Metro Mall</h4>
        <p>Metro Mall is a shopping mall in Alwar. It is the Rajasthan's largest shopping mall based on total area and fourth largest by gross leasable area. Located in Alwar, it includes 1,200 shops. Access to the mall is provided via M.I. Road, rebuilt as a double-decker road in April 2015. Twice delayed, Metro Mall opened on 8 May 2015, with about 355 retailers, marking the Rajasthan's largest-ever mall opening in retail history. However it is not the largest in gross leasable space.</p>
        <b id=uuu3 onclick="uuu1()" style="position: absolute; right: 3em;">Read More</b>
        <div id="uuu2" style="display: none;">
            <h5>Statistics</h5>
            <p>Metro Mall recorded 11,000 tickets sold for the Alwar Aquarium and Discovery Centre in the first five days, following its opening. The Dubai Mall hosted over 37 million visitors in 2009,and attracts more than 750,000 visitors every week. while in 2010 it hosted 47 million, and saw footfall increase by around 27 percent over 2009, despite the economic crisis.</p>
            <h5>Description</h5>
            <p>Over 3 million square foot (equivalent in size to more than 10 football fields), the Metro Mall has a total internal floor area of 1.9 million square feet (55 ha) and leasable space of 0.77 million square feet (35 ha), about the same as the West Edmonton Mall. It also has a 25-room luxury hotel, 10 cinema screens plus 50 restaurants and cafes. The Mall has over 7,000 parking spaces across 3 car parks, with valet services and a car locator ticketing system. Location Metro Mall is located at 1 km distance from Metro station, 1.5 km distance from Railway station and On the main road of Alwar i.e; M.I. Road.</p>
        </div>
        <div>&nbsp</div>
        <div>&nbsp</div>
    </article>
</div>
<?php include 'footer.php' ?>