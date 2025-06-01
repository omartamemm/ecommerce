<section class="account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="account-contents" style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                    <?php display_message(); ?>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-thumb">
                                <h2>Register now</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur similique deleniti pariatur enim cumque eum</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-content">
                                <form action="App/controller/control_register.php" method="POST" enctype="multipart/form-data">
                                    <div class="single-acc-field">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Enter Your Name" >
                                    </div>

                                    <div class="single-acc-field">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Enter Your Email" >
                                    </div>

                                    <div class="single-acc-field">
                                        <label for="phone">Phone</label>
                                        <input type="tel" id="phone" name="phone" placeholder="Enter Your Phone Number" >
                                    </div>

                                    <div class="single-acc-field">
                                        <label for="image">Upload Image</label>
                                        <input type="file" id="image" name="image" accept="image/*" >
                                    </div>

                                    <div class="single-acc-field">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" placeholder="At least 6 Characters" minlength="6" >
                                    </div>

                                    <div class="single-acc-field">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Your Password" minlength="6" >
                                    </div>

                                    
                                    <div class="single-acc-field">
                                        <button type="submit">Register Now</button>
                                    </div>

                                    <a href="login.html">Already have an account? Login</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>