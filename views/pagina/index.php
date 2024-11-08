<div class="ghost-div"></div>
<main class="<?php echo $inicio ? "clip" : ""; ?>">



    <section class="separator imagen-tele highlight fixed-scroll" id="telemedicine">
        <div class="overlay"></div>
        <div class="contenido-separator">
            <h2>Telehealth</h2>
            <p>Instant Teleconsultation: Connect with a Doctor Now for Immediate Medical Advice and Care</p>
            <a href="https://wa.me/50685129111" target="_blank" class="boton-amarillo">Get Started</a>
        </div>
    </section>

    <div class="index-clinicas">
        <div class="overlay"></div>
        <section class="seccion contenedor highlight" id="clinicas">
            
            <h2 class="section-tittle">Our Clinics</h2>
                <?php
                
                    include 'listadoClinicas.php';
                ?>
            <div class="alinear-derecha">
                <a href="/clinicas" class="boton-verde">See All</a>
            </div>
        </section>
    </div>
   
    <section class="separator-xray">
            
            <div class="contenido-xray">
                
                <div class="contenedor-xray right">
                    
                    <div class="contenedor-texto-xray">
                        <h2>X-RAY IMAGING</h2>
                        <p>At LifeGuard Costa Rica, we understand the importance of having radiology services available in remote areas of Costa Rica, where trauma accidents are more common. For this reason, we have portable radiology equipment that can be used both at home and in clinics, ensuring quick and accurate diagnostics in any location.</p>

                        <p>We offer 24-hour radiology services, ensuring that our services are available whenever you need them. At LifeGuard Costa Rica, we are committed to providing comprehensive and accessible care, supported by advanced technology and a highly trained team.</p>
                    </div>
                    

                    <div class="contenedor-imagen-xray">
                        <img src="./build/img/portablexray.webp" alt="portable xray">
                    </div>
                </div>
            <div class="contenedor-xray left">
                <div class="contenedor-texto-xray">
                    <p>Our medical team consists of professionals graduated in imaging, not just radiology, ensuring a broad and specialized knowledge in the interpretation of medical images. We use state-of-the-art digital radiology equipment, which provides clear and detailed visualization, facilitating accurate diagnoses and appropriate treatments. Additionally, our equipment uses the minimum required radiation dose to make the study viable, correct, and useful, without harming the patient.</p>

                    <div class="contenedor-boton">
                        <a href="https://wa.me/50685129111" target="_blank" class="boton-amarillo">Get Booked</a>
                    </div>
                </div>
                <div class="contenedor-imagen-xray">
                    <img src="./build/img/xraybackground.webp" alt="xray">
                </div>
            </div>      
        </div>
    </section>

        <section id="servicios" class="highlight">
        
        <div class="background-servicios ">
                    
        <div class="overlay"></div>
            <div class="contenedor  seccion-inferior">
                <section class="blog">
                    <h2 class="section-tittle">Services</h2>

                    <?php
                
                        include 'listadoServicios.php';

                    ?>
                    
                </section>
                
                <section class="testimoniales">
                    <h3 class="section-tittle">Testimonials</h3>
                    
                    <?php
                
                        include 'testimoniales.php';

                    ?>
                    
                </section>

            </div>
        </div>
    </section>

    <section id="contactus" class="separator imagen-contact highlight">
        <div class="overlay"></div>
        <div class="contenido-separator">
            <h2>Contact Us</h2>
            <p>We are available 24 hours a day, 365 days a year! Reach out to us through any of the following methods:</p>
            <a href="https://wa.me/50685129111" target="_blank" class="boton-verde">WhatsApp</a>
            <p><strong>Costa Rica: </strong><a class="" href="tel:+50640019867">+506 4001 9867</a></p>
            <p><strong>USA: </strong><a class="" href="tel:+130540019867"> +1 (305) 770 6155</a></p>
            <p><strong>Israel: </strong><a class="" href="tel:+97233741320"> +972 3374 1320</a></p>
            <p><strong>Email: </strong> <a href="mailto:ops@lgcr.co">ops@lgcr.co</a></p>
        </div>
    </section>

    <section id="aboutus" class="highlight">
    
        <div class=" seccion container">
            <h2 class="section-tittle">About Us</h2>

            <div class="content odd">

                <div class="image">
                    <picture>
                        <source srcset="./build/img/aboutmedical.webp" type="image/webp">
                        <source srcset="./build/img/aboutmedical.jpg" type="image/jpg">
                            <img loading="lazy" src="./build/img/aboutmedical.webp" alt="Medical Team">
                    </picture>
                </div>
                <div class="text">
                    <p>Welcome to LifeGuard Costa Rica, your trusted partner in comprehensive medical and emergency services. We pride ourselves on our dedication to providing exceptional care and support whenever you need it. Our 24/7 service ensures that you have access to skilled agents who can connect you with the right health professionals, whether it's for an air ambulance or a medical consultation.</p>
                </div>
                
            </div>

            <div class="content even">
                <div class="image">
                    <picture>
                        <source srcset="./build/img/ambulanceabout.webp" type="image/webp">
                        <source srcset="./build/img/ambulanceabout.jpg" type="image/jpg">
                            <img loading="lazy" src="./build/img/ambulanceabout.jpg" alt="Ambulance">
                    </picture>
                </div>
                <div class="text">
                    <p>In moments when every second counts, our emergency ambulance response team is ready to deliver rapid and reliable assistance. Our private ambulance services are strategically positioned in key locations, ensuring swift and effective transportation in times of need.</p>
                </div>
            </div>

            <div class="content odd">
                <div class="image">
                    <picture>
                        <source srcset="./build/img/airambulance.webp" type="image/webp">
                        <source srcset="./build/img/airambulance.jpg" type="image/jpg">
                            <img loading="lazy" src="./build/img/airambulance.jpg" alt="Air Ambulance">
                    </picture>
                </div>
                <div class="text">
                    <p>We also offer specialized air medical evacuation services, providing critical care and transportation from various areas. Additionally, our advanced life support boat ambulance is capable of offering assistance within the territorial waters of the Pacific Ocean of Costa Rica, reaching up to 80 nautical miles.</p>
                </div>
                
            </div>

            <div class="content even">
                <div class="image">
                    <picture>
                        <source srcset="./build/img/travelinsurance.webp" type="image/webp">
                        <source srcset="./build/img/travelinsurance.JPG" type="image/jpg">
                            <img loading="lazy" src="./build/img/travelinsurance.JPG" alt="Insurance">
                    </picture>
                </div>
                <div class="text">
                    <p>For insurance companies, we provide a comprehensive suite of services designed to enhance the travel experience. From assistance with lost travel documentation to arranging VIP transportation and medical house calls, we handle it all with professionalism and care.</p>
                </div>
            </div>

            <div class="text text-bottom">
                <p>At LifeGuard Costa Rica, our mission is to ensure that you receive the highest standard of care and support, no matter the circumstance. Discover the difference with our dedicated team and comprehensive services.</p>
            </div>

        </div>

    </section>

        
</main>