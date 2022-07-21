
<?php
include('nav.html');
?>



<style>

.header-upper{
    
   background-color: rgba(0, 0, 0, 0.2) !important;
    
}

.typewrite > .wrap {
    position: relative;
  
}
.typewrite > .wrap:after {
    content: "|";
    color:#BFB060 ;
    font-weight: 50;

    position: absolute;
    animation: blinkerText 1s linear infinite;
}

@keyframes blinkerText {
    50% {
        opacity: 0;
    }
}
</style>

        <!-- Banner Section -->
        <section class="banner-section banner-one">


            <div  class="banner-carousel owl-theme owl-carousel">
                
                
                <!-- Slide Item -->
                <div style="height:600px;"  class="slide-item">
                    <div class="image-layer" style="background-image: url(aa.jpg);"></div>
              
                    
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div style="margin-top:-23%; margin-left:15%;" class="inner">
                                    <div class="sub-title"></div>
                                   
                                        
                                    <div align='center'>  
                                        
                                   <h1 style="align:center; font-size:4.5em;">Synergy Marketing Reps is
                                   
  <p style="align:center; margin-top:-4%; color:#BFB060;" class="typewrite" data-period="2000" data-type='[ "Creative.", "Innovative.", "Consistent.", "Result Driven.", "Futuristic.", "Fun To Work With." ]'></p>
    <span class="wrap"></span>
  </h1>
  </div>  

                                        
                                        
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                
















            </div>
        </section>
        <!--End Banner Section -->



<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<br/>
<br/>
<br/>
<!-- Trusted Section -->
        <section class="trusted-section">
            <div class="auto-container">
                <div class="outer-container">
                    <div class="row clearfix">
                      
                
                      
                      
                      
  <div align='center' style="margin-top:-10%;" class="sec-title">
                                    <h2>About Us<span class="dot"><img style="width:1%; margin-top:30px;" src='heart.png'></span></h2>
                                    <div style=" margin-top:-25px; line-height:20pt;"  class="lower-text"><b>SYNERGY MARKETING REPS IS A LEADING INTERNATIONAL SALES AND COMMUNICATIONS REPRESENTATION COMPANY FOR TRAVEL AND HOSPITALITY, LIFESTYLE AND WELLNESS BRANDS, WITH A GLOBAL PRESENCE.</b><br/><br/>
We take a global view and work passionately and effectively with our clients to generate incremental sales, awareness and increase your market share through a bespoke combination of international sales with multi-channel communication strategies incl. PR and branding activities.<br/><br/>
Our extensive knowledge and expertise, a much cherished network of connections accumulated over decades and the principles that guides our work ethic enables the Synergy Marketing Reps team to offer an unparalleled service to our clients that is all about value, results, brand-building and a healthy return-on-investment.<br/><br/>
Most representation companies specialize in one or two particular areas of expertise, whereas, we have a more customer centric approach to the market with several unique propriety systems and tools that have been forged by our specialists for our clients ease and access to a host of possibilities that no other representation is able to provide. <br/><br/>


<br/>

    <div class="sec-title">
                <!--Title Block-->
                <div class="row clearfix">
                    
                    <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                       
                        
                        <img style="width:140%; border-radius:20px; " src="highfive.jpg">
                        
                    </div>
                    <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                      
                        <div style="line-height:18pt;" align="center" class="lower-text">




<br/><br/><br/>


<b style=' font-size:3em; line-height:32pt; font-style: italic; color:#BFB060;'>“Yes, we are unique in our approach and walk that extra mile with you every time”</b>
</div>
                    </div>
                </div>
            </div>









<br/>


We're never complacent, always adapting our strategies in response to the ever-changing marketplace offering actionable insight on economic forces, trends and the competitive landscape.<br/><br/>
We at, Synergy Marketing Reps take our environmental responsibilities seriously. We are committed to reducing our impact on the environment, as we continue to seek new innovative ways to support this initiative by being a completely cloud based entity with our propriety software and tools. Our commitment to sustainability is echoed in our strategies, business decisions and work practices.<br/><br/>
Team spirit is very important to us: we act as an international office for our clients, and our values of integrity, collaboration, innovation, influence, knowledge, pro-activity and passion are at core of all our efforts.<br/>
                                  
                                    </div>
                                </div>
   





                                     <div align="center" style="line-height:20pt;"  class="lower-text">
                                       
                                             
                                             <h2>WHAT WE DO</h2>
                                             
                                             <p style="margin-top:-3%;">Through our rapidly growing SMR Partner offices globally we connect any and all Hospitality industry entities such as Tour Operators, DMC’s, Hotels, Airlines, Restaurants, Theme Parks, Transportation, Excursion providers and etc worldwide with our easy to use and robust system “SMRON online system” This will give our carefully selected partners the necessary coverage, exposure, ease of use, accuracy with real time information and data and most importantly exponentially increase your revenue. As our slogan very accurately emphasizes <br/><br/><b style=" font-style: italic; color:#bfb060">“Through our collaborative effort we function as one” in it’s truest form ! </b></p>
                                             </div>






<h1 align="center" style="  font-size:3em; color:var(--thm-base);">This is our DNA and mantra!</h1>








                      
                    </div>
                </div>
            </div>
        </section>

   
<script>
let TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = "";
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function () {
    let i = this.loopNum % this.toRotate.length;
    let fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = `<span class="wrap">${this.txt}</span>`;

    let that = this;
    let delta = 100 - Math.random() * 100;
    if (this.isDeleting) {
        delta /= 4;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === "") {
        this.isDeleting = false;
        this.loopNum++;
        delta = 1000 / 60;
    }

    setTimeout(() => {
        that.tick();
    }, delta);
};

document.addEventListener('DOMContentLoaded', () => {
    let elements = document.getElementsByClassName('typewrite');
    for (let i = 0; i < elements.length; i++) {
        let toRotate = elements[i].dataset.type;
        let period = elements[i].dataset.period;

        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
});
</script>
<!--footer-->


<?php
include('footer.html');
?>