<div id="contact" class="box">
    <div class="header">
    <nav>
        <h2>
        <a href="#">
            <video loop autoplay muted playsinline class="nav-video">
            <source src='<?php echo base_url('assets/frontend/images/@stock/contact-3.optimized..faststart.mp4')?>' type='video/mp4' >
            </video>
            <svg width="600" height="338" viewBox="0 0 600 338" class="svg-graphic" id="svg-graphic-contact">
            <defs>
                <mask id="contact-mask" x="0" y="0" width="600" height="338" >
                <rect x="0" y="0" width="600" height="338" fill="#fff" />
                <path d="M297.1,306c-75.8,0-137.5-61.7-137.5-137.5S221.3,31,297.1,31c49.2,0,94.9,26.5,119.3,69.2l-120,67.9l119.1,70.2
        c-11.9,20.2-28.9,37.1-49.1,48.9C345.6,299.5,321.5,306,297.1,306z" />            
                </mask>
            </defs>
            <!-- rect should be bigger than 337.5, vector shape should be smaller than 337.5 -->
            <!-- the 337.5 is calcutated by 600 / 16 * 9 -->
            <rect x="0" y="0" width="600" height="338" />
            </svg>              
            <span>Contact</span>
        </a>
        </h2>
    </nav>
    <div class="header-title invisible">
        <div class="row">
        <div class="large-8 columns">
            <h2>Contact</h2>
            <p>We always want new and challenging ideas and projects.</p>
        </div>
        </div>
    </div>
    </div>
    <div class="content invisible">
    <div class="full">
        <div class="large-12 columns">
        <div class="large-4 columns">
            <div class="contact-details wow slideInUp">
            <h3>Address</h3>
            <p class="big-text">
                <span id="txt_adress">.....</span><br>
                <span id="txt_city">.....</span><br>
                <span id="zip_code">.....</span><br>
            </p>
            <div class="two spacing"></div>        
            <div class="four spacing"></div>
            </div>
        </div>
        <div class="large-4 columns">
            <div class="contact-details wow slideInUp">
            <h3>Contact</h3>
            <p class="big-text"><span id="txt_email"></span></p>
            <p class="big-text"><span id="txt_phone1"></span></p>
            <p class="big-text"><span id="txt_phone2"></span></p>
            <div class="spacing"></div>
            </div>
        </div>
        <div class="large-4 columns">
            <div class="contact-details wow slideInUp">
            <h3>Follow us</h3>
            <ul class="socials">
                <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                <li><a href="#"><i class='fa fa-instagram'></i></a></li>
                <li><a href="#"><i class='fa fa-dribbble'></i></a></li>
                <li><a href="#"><i class='fa fa-youtube'></i></a></li>
            </ul>
            </div>
        </div>
        <div class="circle-4"></div>
        <div class="triangle-2"></div>
        </div>
    </div>
    <!-- 
        <div class="full black">
            <div class="large-12 columns">
                <h2 class="white">We are ready.</h2>
                <div class='form'>
                <form id='contact_form' method='POST'>
                    <div class="large-4 columns">
                    <input class='required' name='name' placeholder='NAME' type='text'>
                    </div>
                    <div class="large-4 columns">
                    <input class='required email' name='email' placeholder='EMAIL' type='text'>
                    </div>
                    <div class="large-4 columns">
                    <input class='required' name='subject' placeholder='SUBJECT' type='text'>
                    </div>
                    <div class="large-12 columns">
                    <textarea class='required' name='message' placeholder='MESSAGE'></textarea>
                    <input class='button white boxed contact-button' type='submit' value="Send it">
                    <p id='thanks' class='hide'>
                        Thanks for contacting us, we'll be in touch soon!
                    </p>
                    </div>
                </form>
                </div>
            </div>
        </div>
    -->   
    </div>
</div>
<script>
    $.ajax({
        url:'<?=base_url()?>index.php/contact/getall',
        method: 'GET',
        success: function(response){    
            console.log(response);      
                var arr_data = JSON.parse(response);  

                $("#txt_adress").text(arr_data.listContact[0].Adress);
                $("#txt_city").text(arr_data.listContact[0].City);
                $("#zip_code").text(arr_data.listContact[0].ZipCode);

                $("#txt_email").text(arr_data.listContact[0].Email);
                $("#txt_phone1").text(arr_data.listContact[0].Phone1);
                $("#txt_phone2").text(arr_data.listContact[0].Phone2);               
            
        },
        error: function(response)
        {
            console.log(response);
        }
    });
</script>