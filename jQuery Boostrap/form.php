<form class="col-8">
                <h3>Billing address</h3>
                <div class="row">
                    <div class="col">
                        <div>First name</div>
                        <input type="text">
                        <div>First name is required</div>
                    </div>
                    <div class="col">
                        <div>Last name</div>
                        <input type="text">
                        <div>Last name is required</div>
                    </div>
                </div>

                <div>Username
                    <input type="text" placeholder="Username">
                    <div>User name is required</div>
                </div>
                <div>Email
                    <input id='email' type="text" placeholder="you@example.com">
                    <div>Email is required</div>
                </div>
                <div>Address
                    <input type="text" placeholder="1234 Main St">
                    <div>Address is required</div>
                </div>

                <div>Address 2
                    <input id="address2" type="text" placeholder="Apartment or suit">
                </div>
                <div class="row">
                    <div class="col">Country
                        <select name="#" id="#" class="custom-select d-block w-100">
                            <option value="unchoiced">Choose...</option>
                            <option value="#">United State</option>
                        </select>
                    </div>
                    <div class="col">State
                        <select name="#" id="#" class="custom-select d-block w-100">
                            <option value="unchoiced">Choose...</option>
                            <option value="#">California</option>
                        </select>
                    </div>
                    <div class="col">Zip
                        <input type="text">
                        <div>Zip is required</div>
                    </div>
                </div>
                <hr />
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="shipping">
                    <label class="custom-control-label" for="shipping">
                        Shipping address is the same as my billing
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save">
                    <label class="custom-control-label" for="save">
                        Save this information for next time
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check">
                    <label class="custom-control-label" for="check">
                        Check this custom checkbox
                    </label>
                </div>
                <hr />
                <H4>Payment</H4>
                <div class="input-group custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="card" id="credit" checked>
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="input-group custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="card" id="debit">
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="input-group custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="card" id="paypal">
                    <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <div>Name on card</div>
                        <input type="text">
                        <div>Name on card is required</div>
                        <div>Full name as displayed on card</div>
                        <div class="row my-4">
                            <div class="col">
                                <div>Expiration</div>
                                <input type="text">
                                <div>Expiration is required</div>
                            </div>
                            <div class="col">
                                <div>CVV</div>
                                <input type="text">
                                <div>CVV is required</div>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div>Credit card number</div>
                        <input type="text">
                        <div>Credit card number is required</div>
                    </div>
                </div>
                <div>
                    <input id="submit" type="button" class="btn btn-primary btn-block" value="Continue to checkout">
                </div>

            </form>