<div class="ui vertical stripe intro segment basicbg regform">
    <div class="ui container">
        <h1 class="ui header centered">Register form</h1>
        <div class="ui segment">
            <form class="ui form" method="POST" action="/sign/rent" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="first" placeholder="First Name" />
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="last" placeholder="Last Name">
                </div>
                <div class="field">
                    <label>Drive license ID</label>
                    <input type="number" name="license" placeholder="Driver license ID" />
                </div>
                <div class="field">
                    <label>Image</label>
                    <div class="ui fluid action input">
                        <input type="text" readonly placeholder="Image">
                        <input name="image" type="file" id="image">
                        <div class="ui icon button">
                            <i class="cloud upload icon"></i>
                        </div>
                    </div>
                </div>
                <div class="inline field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="agree">
                        <label>I agree to the Terms and Conditions</label>
                    </div>
                </div>
                <button class="ui button" type="submit">Submit</button>
                <div class="ui error message"></div>
            </form>
        </div>
    </div>
</div>