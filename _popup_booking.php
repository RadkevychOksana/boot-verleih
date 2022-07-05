    <!--Popup unvisible block-->
    <div class="cd-popup" role="alert">
        <div class="cd-popup-container">
            <!-- Booking Start -->
            <div id="booking" class="container-fluid">
                <form class="py-5">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Ihren Namen" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 p-4" placeholder="Deine E-Mail" required="required" />
                    </div>
                    <div class="form-group">
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservierungsdatum" data-target="#date" data-toggle="datetimepicker" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="time" id="time" data-target-input="nearest">
                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservierungszeit" data-target="#time" data-toggle="datetimepicker" />
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="custom-select border-0 px-4" style="height: 47px;">
                            <option selected>Wählen Sie ein Boot aus</option>
                            <option value="1">Kanu</option>
                            <option value="2">Kayak</option>
                            <option value="3">Flöße</option>
                        </select>
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