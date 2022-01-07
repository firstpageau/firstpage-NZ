<?php
/**
 * Template Name: Contact us
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<section class="banner contact-us">
    <div class="container">
        <div class="quote-form">
            {% if thankyou %}
            <div class="form-thankyou">
                <h1>Help is on the way!</h1>
                <h2>Thanks for reaching out, your request has been received. We’re on the case and ready to help.</h2>
                <p>We appreciate that your situation might be urgent, so your Digital Strategist is reviewing your enquiry and will be contacting you very soon.</p>
                <p><strong>We act fast, so most inquiries are addressed on the same business day.</strong></p>
                <p>Alternatively, to speak to someone now, <br class="d-sm-none">call {{ site_phone }}</p>
            </div>

            {% elseif thankyou_competitor %}
                <div class="form-thankyou d-block">
                    <h1 class="text-center">Yes! Your website is currently <br> being analyzed.</h1>
                    <p class="text-center thankyou-banner-text">Your report is on its way -</p>
                    <p class="text-center thankyou-banner-text">Please check your email in approximately 3 minutes.</p>
                </div>

            {% else %}
            <!-- Contact Us Form -->
            <form class="fp-form" action="{{ home_url }}thank-you" method="POST">
                <div class="form-step-1 form-step">
                    <h1>Find out how we can increase your revenue</h1>
                    <!-- Testimonial Row -->
                    <div class="row contact-page-review-row">
                        <div class="col-12 col-md-4">
                            <div class="testimonial">
                                <div class="stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                </div>
                                <div class="text">
                                    “They understand our vision”
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="testimonial">
                                <div class="stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                </div>
                                <div class="text">
                                    “All I can say is WOW”
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="testimonial">
                                <div class="stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                    <img src="{{ site.theme.link }}/assets/img/icon-star.png"
                                         srcset="{{ site.theme.link }}/assets/img/icon-star@2x.png 2x"
                                         alt="Five Stars">
                                </div>
                                <div class="text">
                                    “The FP team are incredible”
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" name="lead_name" placeholder="First Name*" required="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" name="lead_phone" placeholder="Phone*" required="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" name="lead_email" placeholder="Email*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" name="lead_website" placeholder="Website" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control" name="lead_message" rows="6" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="hidden" name="lead_formname" value="Contact" />
                                <input type="hidden" name="lead_language" value="en" />
                                <input type="hidden" name="lead_formtype" value="hs_quote_form" />
                                <button type="submit" style="width:80%;" class="btn fp-btn fp-btn-orange form-submit" onclick="ga('send','event', {'eventCategory': 'Form','eventAction': 'Click', 'eventLabel': 'Contact Us'});">Yes, <span class="d-none d-md-inline">I want to</span> grow my business</button>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Bottom award img - Desktop -->
                            <img class="d-none d-md-block center-block mt-4" src="{{ site.theme.link }}/assets/img/img-awards-seo.svg" alt="">
                            <!-- Bottom award img - Desktop -->
                            <img class="d-block d-md-none center-block m-auto pt-4" src="{{ site.theme.link }}/assets/img/img-awards-seo-mob.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="form-thankyou">
                    <h2 class="bold wide">Yes! Welcome to more leads, sales &amp; success online.</h2>
                    <h3 class="small">Your Digital Growth Specialist will be in touch within 48 hours. Alternatively, for an instant chat, please call <a href="tel:{{ site_phone|replace({' ':''}) }}" class="text-nowrap">{{ site_phone }}</a></h3>
                </div>
            </form>
            <!-- End of Form -->
            {% endif %}
        </div>
    </div>
</section>

<section class="section-office-hours section-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-1 mb-5">
                <h3 class="mb-4">Office</h3>
                <p><a href="https://www.google.com/maps/place/First+Page+-+%231+%F0%9F%8F%85Digital+Marketing+%26+SEO+Agency/@-37.8285184,144.997028,15z/data=!4m5!3m4!1s0x0:0xd19eee9ef63d8720!8m2!3d-37.8285485!4d144.99728" title="Digital Marketing Agency Melbourne - Lv 6, 534 Church Street,
Richmond Melbourne VIC 3121">{{ site_address }}</a></p>
                <p>
                    <strong>Phone</strong><br />
                    <a href="tel:{{ site_phone|replace({' ':''}) }}">{{ site_phone }}</a>
                </p>
                <p>
                    <strong>Email</strong><br />
                    <a href="mailto:{{ site_email }}" class="blue">{{ site_email }}</a>
                </p>
            </div>

            <div class="col-12 col-md-5 mb-5">
                <h3 class="mb-4">Hours of Operation</h3>
                <table class="table">
                    <tr>
                        <th scope="row">Monday</th>
                        <td>09:00am - 05:30pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Tuesday</th>
                        <td>09:00am - 05:30pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td>09:00am - 05:30pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td>09:00am - 05:30pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td>09:00am - 05:30pm</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<div id="office-map"></div>
<script>var map_location = JSON.parse('{{ map_location }}')</script>
<script src="{{ site.theme.link }}/assets/js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?v=3&key={{ map_api_key }}&callback=initMap"></script>

<section class="section-worldwide-locations section-white">
    <div class="container">
        <h3>Worldwide Locations</h3>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Singapore</h5>
                    <p>
                        120 Robinson Rd,<br>
                        #05-01<br>
                        Singapore 068913
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Hong Kong</h5>
                    <p>
                        Room 3503-07, 35/F, Wu Chung House,<br>
                        213 Queen’s Road East,<br>
                        Wan Chai, Hong Kong
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Thailand</h5>
                    <p>
                        8 T One Building, Floor 21, Office 2,<br>
                        Sukhumvit 40 Alley,<br>
                        Phra Khanong, Khlong Toei,<br>
                        Bangkok 10110, Thailand
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Dubai</h5>
                    <p>
                        2202/2203,<br>
                        JBC1, Cluster G,<br>
                        JLT, Dubai.<br>
                        United Arab Emirates
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Abu Dhabi</h5>
                    <p>
                        902B, Two Four 54 Building 6,<br>
                        Sheikh Zayed Street,<br>
                        Abu Dhabi,<br>
                        United Arab Emirates
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Malaysia</h5>
                    <p>
                        A-03-13 Tropicana Avenue,<br>
                        NO 12 Persiaran Tropicana<br>
                        Tropicana Golf &amp; Country Resort PJU3<br>
                        47410 Petaling Jaya, Selangor,<br>
                        Malaysia
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Panama</h5>
                    <p>
                        Calle 12 Este, Casco Viejo,<br>
                        Panama City, Panama
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Brazil</h5>
                    <p>
                        Selina Vila Madalena,<br>
                        São Paulo
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="location-box">
                    <h5>Australia</h5>
                    <p>
                        Level 6, 534 Church Street<br>
                        Cremorne 3121<br>
                        Victoria, Australia
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
 <div class="section-letstalk section-orange section-letstalk-new">
    <div class="container text-center text-white">
        <p class="mb-3 p-tag-h2-style"><strong>Claim your 100% free REVENUE</br class="d-none d-lg-block">GROWTH strategy session with an</br class="d-none d-lg-block">experienced digital strategist</br class="d-none d-lg-block"> valued at $2000.</strong></p>
        <p class="mb-4" style="font-size: 25px; font-weight:normal; line-height: 35px;">We outline bulletproof tactics that dramatically</br class="d-none d-lg-block"> increase website traffic and revenue, even during tough</br class="d-none d-lg-block"> economic times. </p>
        <p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
        <a href="/free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session free-session-btn">Get my free revenue growth session</a>
    </div>
</div>

<?php get_footer(); ?>