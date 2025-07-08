<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-content">
                        <h4>About Amarou</h4>
                        <p>A leading developer of A-grade commercial, industrial and residential projects in USA. Since
                            its
                            foundation the company has doubled its turnover year on year with its staff.</p>
                        <a href="#" class="btn btn-custom">Request A Quote<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-content">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">Services Heading</a></li>
                            <li><a href="#">Services Heading</a></li>
                            <li><a href="#">Services Heading</a></li>
                            <li><a href="#">Services Heading</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-content">
                        <h4>Links</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Meet Our Team</a></li>
                            <li><a href="#">News and Media</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-content">
                        <h4>Quick Contact</h4>
                        <p>If you have any questions or need help, feel free to contact with our team.</p>
                        <div class="phone">
                            <a href="#">
                                <i class="fa-solid fa-phone"></i>
                                <p>987-654-321</p>
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        <div class="media">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row footer-end " >
                <div class="col-lg-4">
                    <div class="footer-img">
                        <img src="{{ asset('images/logo.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sign-up">
                        <p>Sign up for industry alerts,
                            news and insights from Us</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="email">
                        <form id="newsletterForm" class="d-flex align-items-center justify-content-between">
                            <input type="text" name="newsletter_email" placeholder="Your Email Address" required>
                            <button type="submit">Sign Up!</button>
                        </form>
                        <div id="newsletterMsg"></div>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>Copyright 2025 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>







    <!-- <section class="prescription-saving">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="saving">
                        <div class="free-saving">
                            <h2>Free</h2>
                            <h3>PRESCRIPTION SAVINGS</h3>
                        </div>
                        <img src="images/logo-new2.png" class="img-fluid">
                        <div class="rx-button">
                            <a href="#" class="btn btn-custom rx-card">CLICK HERE FOR FREE RX CARD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
        integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#newsletterForm').on('submit', function(e) {
            e.preventDefault();

            let $button = $(this).find('button[type="submit"]');
            let originalText = $button.text();

            // Disable button and show processing
            $button.prop('disabled', true).text('Processing...');

            $.ajax({
                url: '{{ route("newsletter.submit") }}', // Your defined route
                type: 'POST',
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#newsletterMsg').text(response.message).css('color', response.status ? 'green' : 'red');
                    if (response.status) {
                        $('#newsletterForm')[0].reset();
                    }
                },
                error: function(xhr) {
                    $('#newsletterMsg').text('Something went wrong.').css('color', 'red');
                },
                complete: function() {
                    // Re-enable button and reset text
                    $button.prop('disabled', false).text(originalText);
                }
            });
        });
    </script>

</body>

</html>
