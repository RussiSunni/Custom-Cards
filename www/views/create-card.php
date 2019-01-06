<?php
    require "header.php";
?>



    <section id="">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <h2 class="text-center">The Process</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <ol>
                        <li>
                            Submit a photo of the child (if you would like them to feature in the card.
                        </li>
                        <li class="mt-3">
                            Choose a theme from our selection, or make up your own one entirely. Can even just email us
                            what the child likes.
                        </li>
                        <li class="mt-3">
                            Place the order. We work with Paypal as a payment gateway.
                        </li>
                        <li class="mt-3">
                            The cards will be emailed to you within 3 working days.
                        </li>
                    </ol>


                </div>
            </div>
        </div>
    </section>

    <section id="information">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <h2 class="text-center">Customer's Personal Information </h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <form action = "../../api/childResource.php" id = "childform" method="POST">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Your name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Your email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your email address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="childname" class="col-sm-3 col-form-label">The child's name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childname" name="childname" placeholder="The name of the child">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childAge" class="col-sm-3 col-form-label">The child's age</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childage" name="childage" placeholder="The age of the child">
                            </div>
                        </div>
                        <div id="warning"></div>

                        <div class="form-group row">
                            <label for="childStarsign" class="col-sm-3 col-form-label">The child's star sign</label>
                            <div class="col-sm-9">
                                <select class="custom-select my-1 mr-sm-2" id="childzodiac" name="childzodiac">
                                    <option selected>Choose...</option>
                                    <option value="1">Aries</option>
                                    <option value="2">Taurus</option>
                                    <option value="3">Gemini</option>
                                    <option value="4">Cancer</option>
                                    <option value="5">Leo</option>
                                    <option value="6">Virgo</option>
                                    <option value="7">Libra</option>
                                    <option value="8">Scorpio</option>
                                    <option value="9">Sagittarius</option>
                                    <option value="10">Capricorn</option>
                                    <option value="11">Aquarius</option>
                                    <option value="12">Pisces</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childPet" class="col-sm-3 col-form-label">The child's favourite pet</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childPet" name="childpet" placeholder="The child's favourite pet">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childMovie" class="col-sm-3 col-form-label">The child's
                                favourite movies</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childMovie" name="childmovie" placeholder="The child's favourite movies">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childCartoon" class="col-sm-3 col-form-label">The child's
                                favourite cartoons</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childCartoon" name="childcartoon" placeholder="The child's favourite cartoons">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childPlace" class="col-sm-3 col-form-label">Their favourite places</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childPlace" name="childplace" placeholder="The child's favourite place">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childFood" class="col-sm-3 col-form-label">Their favourite food</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childFood" name="childfood" placeholder="The child's favourite food">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childHobby" class="col-sm-3 col-form-label">Their favourite hobby</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="childHobby" name="childhobby" placeholder="The child's favourite hobby">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="childOther" class="col-sm-3 col-form-label">Any other notes</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <textarea class="form-control" id="childOther" name="childother" placeholder="Anything else" rows="3"></textarea>
                                  </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputChildPhoto" class="col-sm-3 col-form-label">The child's photo</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputChildPhoto" name="childphoto">
                                    <label class="custom-file-label" for="inputChildPhoto">Choose image</label>
                                </div>
                            </div>
                        </div>





                        <div class="form-group row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary float-right">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>


<?php
    require "footer.php";
?>