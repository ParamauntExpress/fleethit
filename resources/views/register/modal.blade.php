<div class="ui basic modal regform">
    <div class="ui segment">
        <h1 class="ui header centered">Register form</h1>
        <div class="ui segment">
            <form class="ui form" method="POST" action="/sign/rent" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="field">
                    <label>Person</label>
                    <div class="fields">
                        <div class="seven wide field">
                            <input type="text" name="first" placeholder="First Name" />
                        </div>
                        <div class="seven wide field">
                            <input type="text" name="last" placeholder="Last Name">
                        </div>
                        <div class="two wide field">
                            <input type="number" name="age" placeholder="Age">
                        </div>
                    </div>
                    <label>Contacts</label>
                    <div class="fields">
                        <div class="four wide field">
                            <input type="text" name="phone" placeholder="Phone number" />
                        </div>
                        <div class="eight wide field">
                            <input type="text" name="address" placeholder="Home address" />
                        </div>
                        <div class="four wide field">
                            <input type="number" name="zip" placeholder="Zip-code" />
                        </div>
                    </div>
                    <label>Numbers</label>
                    <div class="three fields">
                        <div class="field">
                            <input type="number" name="license" placeholder="Driver license number" />
                        </div>
                        <div class="field">
                            <input type="number" name="social" placeholder="Social security number" />
                        </div>
                        <div class="field">
                            <input type="number" name="bank" placeholder="Bank account number" />
                        </div>
                    </div>
                    <div class="field">
                        <label>Driver license photo</label>
                        <div class="ui fluid action input">
                            <input type="text" readonly placeholder="Image">
                            <input name="image" type="file" id="image">
                            <div class="ui icon button">
                                <i class="cloud upload icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="ui segment">
                        <ul class="ui list text black">
                            <li>Remains private - never shared</li>
                            <li>No credit check - credit won't be affected</li>
                            <li>Information is safe & secure</li>
                        </ul>
                    </div>
                    <div class="inline field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="agree">
                            <label>I agree to the Terms and Conditions</label>
                        </div>
                    </div>
                </div>
                <button class="ui green button" type="submit">Submit</button>
                <button class="ui gray button" type="button">Close</button>
                <div class="ui error message"></div>
            </form>
        </div>
    </div>
</div>