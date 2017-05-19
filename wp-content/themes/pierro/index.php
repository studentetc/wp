<?php get_header(); ?>
<div class="row">
    <div class="col-md-12 welcome">
        <h1><?php bloginfo(‘name’) ?></h1>
        <h4><?php bloginfo(description) ?></h4>
    </div>
</div>      </div>
    </div>
    <div class="row" id="contact">
    <div class="col-lg-12 text-center">
        <h1>Contact us</h1>
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
</div>
<form>
    <div class="row row-form">
        <div class="col-lg-12">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="name" type="text" class="form-control input-lg" placeholder="Your name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" type="email" class="form-control input-lg" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" type="number" class="form-control input-lg" placeholder="Your Phone Number" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Message</label>
                    <textarea spellcheck class="form-control input-lg" placeholder="Please, write a message"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php get_footer(); ?>

