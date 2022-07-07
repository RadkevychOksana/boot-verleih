    <!--Popup unvisible block-->
    <div class="cd-popup" role="alert">
        <div class="cd-popup-container">
            <!-- Booking Start -->
            <div id="booking" class="container-fluid">
                <form class="py-5" action="src/buchen.php" method="post">
                    <input type="hidden" id="boot_id" name="boot_id">
                    <input type="hidden" id="user_id" name="user_id" value="<?= $_COOKIE['user_id'] ?? null ?>">

                    <?php if (!isset($_COOKIE['user_id'])) { ?>
                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" id="name" name="name" placeholder="Ihren Namen" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Deine E-Mail" required="required" />
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" name="date" placeholder="Reservierungsdatum" data-target="#date" data-toggle="datetimepicker" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="time" id="time" data-target-input="nearest">
                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" name="time" placeholder="Reservierungszeit" data-target="#time" data-toggle="datetimepicker" />
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-dark btn-block border-0 py-3" type="submit">Buchen Sie jetzt</button>
                    </div>
                </form>
            </div>
            <!-- Booking Start -->

            <a href="#0" class="cd-popup-close img-replace">Close</a>
        </div>
    </div>