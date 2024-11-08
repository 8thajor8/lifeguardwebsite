let paso = 1;
let pasoInicial = 1;
let pasoFinal = 4;

document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});

function iniciarApp(){
    navegacionFija();
    enableForm();
    eventListeners();
    accordion();
    iconosCollapsable();
    if(inicio){
        scrollNav();
        restaltarEnlace();
        testimonialSlider();
        videoLoader();
        playVideo();
       
        
        
    }
    if(appFormulario){
        mostrarSeccion();
        tabs();
        botonesPaginador();
        paginaAnterior();
        paginaSiguiente();
        toggleFieldsHousecall();
        toggleFieldsSymptoms();
        seleccionarHora();
        scheduleSuccess();
    }
    
}

function navegacionFija() {
    const barra = document.querySelector('.barra')
    const transportation = document.querySelector ('.fixed-scroll')
    
    if(transportation){
        window.addEventListener('scroll', function(){
            if(transportation.getBoundingClientRect().bottom < 1){
                barra.classList.add('fixed')
            
            } else{
                barra.classList.remove('fixed')
                
            }
        })
    }


}

function scrollNav(){
    const navLinks = document.querySelectorAll('.navegacion-index .scroll')

    navLinks.forEach( link => {
        link.addEventListener('click', e => {
            e.preventDefault()
            const sectionScroll = e.target.getAttribute('href')
            const section = document.querySelector(sectionScroll)

            section.scrollIntoView({behavior: 'smooth'})

           
            
        })
    })
}

function restaltarEnlace (){
    document.addEventListener('scroll', function(){
        const sections =  document.querySelectorAll('.highlight')
        
        const navLinks =  document.querySelectorAll('.navegacion-index a')
        
        let actual = '';
        
        sections.forEach( section => {
            const sectionTop = section.offsetTop
            const sectionHeight = section.clientHeight
            
           
            if(window.scrollY >= (sectionTop - sectionHeight /3 )){
                
                actual = section.id;
                
                
            }
            
        })

        

        navLinks.forEach(link => {
            link.classList.remove('active')
            if(link.getAttribute('href') === '#' + actual){
                link.classList.add('active');
            }
        })
        
    })
    
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionMobile);
    
    
    const housecallCheckbox = document.getElementById('housecall');
    const symptomsCheckbox = document.getElementById('have_symptoms');
    const convertBtn = document.getElementById('convertBtn');
    if(housecallCheckbox){
        housecallCheckbox.addEventListener('change', toggleFieldsHousecall);
        convertBtn.addEventListener('click', extractLatLngFromLink);
        symptomsCheckbox.addEventListener('change', toggleFieldsSymptoms);
    }
    
    
   

}

function navegacionMobile(){
    const navegacion = document.querySelector('.navegacion');
    const navegacionContainer = document.querySelector('.barra');
    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
        navegacionContainer.classList.remove('barraOverlay');
        }else{
                navegacion.classList.add('mostrar');
                navegacionContainer.classList.add('barraOverlay');
            }
    
}

function testimonialSlider(){
    const testimonials = document.querySelectorAll('.testimonial');
    let currentIndex = 0;

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.classList.remove('active');
            if (i === index) {
                testimonial.classList.add('active');
            }
        });
    }

    function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(currentIndex);
    }

    showTestimonial(currentIndex);
    setInterval(nextTestimonial, 5000);
}

function accordion(){
    
        const accordionItems = document.querySelectorAll('.accordion-item');
        
        accordionItems.forEach(item => {
          item.querySelector('.item-tittle-container').addEventListener('click', () => {
            
            item.classList.toggle('active');
            item.querySelector('.accordion-content').classList.toggle('active');
          });
        });
      
}

function videoLoader(){
    
    var video = document.getElementById('background-video');
    var loader = document.getElementById('video-loader');
    
    // Listen for the 'canplaythrough' event to ensure the video is fully loaded
    video.addEventListener('canplaythrough', function() {
        loader.style.display = 'none'; // Hide the loader
        video.style.display = 'block'; // Show the video
    });

    // Fallback in case 'canplaythrough' doesn't fire
    video.addEventListener('loadeddata', function() {
        if (video.readyState >= 3) {
            loader.style.display = 'none'; // Hide the loader
            video.style.display = 'block'; // Show the video
        }
    });

    // Attempt to play the video to trigger the loading
    video.play().catch(function(error) {
        console.log('Error trying to play video:', error);
    });
}




function playVideo(){
    var video = document.getElementById('background-video');
    if (video) {
        video.play().catch(function(error) {
            console.log('Error trying to play video:', error);
        });
    }
}

function iconosCollapsable(){
    const modal = document.getElementById('modal');
    const video = document.getElementById('modal-video');
    const closeModalButton = document.querySelector('.close-modal');

    // Functions to open modal with the right animation
    function openModal(animationClass, videoSource) {
        modal.style.display = 'flex';
        modal.classList.remove('modal-slide-up', 'modal-slide-down', 'modal-slide-left');
        modal.classList.add(animationClass);
        video.src = videoSource;
        video.play();

        document.body.classList.add('no-scroll');
    }

    // Event listeners for the icons
    const video_1 = document.querySelector('.iconos-transportation .icono:nth-child(1)');
    if(video_1){
        video_1.addEventListener('click', function() {
            openModal('modal-slide-up', '/build/img/sea-division.mp4');
        });
    }

    const video_2 = document.querySelector('.iconos-transportation .icono:nth-child(2)');
    if(video_2){
        video_2.addEventListener('click', function() {
            openModal('modal-slide-down', '/build/img/air-division.mp4');
        });
    }

    const video_3 = document.querySelector('.iconos-transportation .icono:nth-child(3)');
    if(video_3){
        video_3.addEventListener('click', function() {
            openModal('modal-slide-left', '/build/img/ground-division.mp4');
        });
    }

    // Close modal functionality
    if(closeModalButton){
        closeModalButton.addEventListener('click', function() {
            modal.style.display = 'none';
            video.pause();
            video.src = ''; // Stop the video

            // Re-enable scrolling
            document.body.classList.remove('no-scroll');
        });
    }

}

function mostrarSeccion(){
    //Ocultar la seccion q tenga la clase mostrar
    const seccionAnterior = document.querySelector('.mostrar');
    if(seccionAnterior){
        seccionAnterior.classList.remove('mostrar');
    }
    //Seleccionar la seccion con el paso correspondiente
    const pasoSelector = `#paso-${paso}`;
    const seccion = document.querySelector(pasoSelector);
    
    seccion.classList.add('mostrar'); 

    //Resaltar tab actual
    const tabAnterior = document.querySelector('.actual');
    if(tabAnterior){
        tabAnterior.classList.remove('actual');
    }
    const tab = document.querySelector(`[data-paso="${paso}"]`);
    tab.classList.add('actual');
}

function tabs(){
    const botones = document.querySelectorAll('.tabs button');

    botones.forEach(boton => {
        boton.addEventListener('click', function(e){
            paso = parseInt(e.target.dataset.paso);
            
            mostrarSeccion();
            botonesPaginador();
            
        })
    })
    
}

function botonesPaginador(){

    const paginaAnterior = document.querySelector('#anterior');
    const paginaSiguiente = document.querySelector('#siguiente');
    if(paso === 1){
        paginaAnterior.classList.add('ocultar_boton');
        paginaSiguiente.classList.remove('ocultar_boton');
    } else if(paso === 4 ){
        paginaAnterior.classList.remove('ocultar_boton');
        paginaSiguiente.classList.add('ocultar_boton');
    } else {
        paginaSiguiente.classList.remove('ocultar_boton');
        paginaAnterior.classList.remove('ocultar_boton');
    }

    mostrarSeccion();

}

function paginaAnterior(){
    const paginaAnterior = document.querySelector('#anterior');
    paginaAnterior.addEventListener('click', function(){
        if(paso <= pasoInicial) return;
        paso--;
        botonesPaginador();
        
    })
}

function paginaSiguiente(){
    const paginaSiguiente = document.querySelector('#siguiente');
    paginaSiguiente.addEventListener('click', function(){
        if(paso >= pasoFinal) return;
        paso++;
        botonesPaginador();
        
    })
}

function toggleFieldsHousecall() {
    const housecallCheckbox = document.getElementById('housecall');
    const housecall_fields = document.getElementById('housecall_fields');
    const latitudInput = document.getElementById('latitud');
    const longitudInput = document.getElementById('longitud');
    
    if (housecallCheckbox.checked) {
        
        housecall_fields.classList.add('unhide');
        
    } else {
        housecall_fields.classList.remove('unhide');
        latitudInput.value = '';
        longitudInput.value = '';
        
    }
}

function extractLatLngFromLink() {
    const googleMapsLink = document.getElementById('google_location').value;
    const regex = /@([-0-9.]+),([-0-9.]+)/;
    const latitudInput = document.getElementById('latitud');
    const longitudInput = document.getElementById('longitud');
    const match = googleMapsLink.match(regex);

    if (match) {
        const latitud = match[1];
        const longitud = match[2];

        latitudInput.value = latitud;
        longitudInput.value = longitud;
    } else {
       
        mostrarAlerta('Please enter a valid Google Maps link.', 'error', '.contenedor-app__instructions__content', '.appointments_tittle')
    }
}

function toggleFieldsSymptoms() {
    const symptomsCheckbox = document.getElementById('have_symptoms');
    const symptom_fields = document.getElementById('symptom_fields');
    const current =  document.getElementById('current_symptoms');
    const date_symptoms =  document.getElementById('date_symptoms');
    
    if (symptomsCheckbox.checked) {
        
        symptom_fields.classList.add('unhide');
        
    } else {
        symptom_fields.classList.remove('unhide');
        current.value = '';
        date_symptoms.value = '';

        
        
    }
}

function seleccionarHora(){

    const inputHora = document.querySelector('#time_appointment');
    inputHora.addEventListener('input', function(e){
        
        const horaCita= e.target.value
        const hora = horaCita.split(':')[0]

        if(hora < 8 || hora > 17){
            e.target.value = '';
            mostrarAlerta('Clinic Hours are between 8 and 17 hs.', 'error', '.contenedor-app__instructions__content', '.appointments_tittle')
        }  
    })
}

function mostrarAlerta(mensaje, tipo, elem, prevelem, desaparece = true){

    const alertaPrevia = document.querySelector('.alerta');
    if(alertaPrevia) {
        alertaPrevia.remove();
    };

    const alerta = document.createElement('DIV');
    alerta.textContent = mensaje;
    alerta.classList.add('alerta');
    alerta.classList.add(tipo);

    const elemento = document.querySelector(elem);
    const antesde = document.querySelector(prevelem);
    elemento.insertBefore(alerta, antesde);

    if(desaparece){
        setTimeout(() => {
            alerta.remove();
        }, 5000);
    }

}

function scheduleSuccess(){
    if(appointment){
        
        mostrarAlerta('Your appointment has been scheduled successfully', 'exito', '.contenedor-app__instructions__content', '.appointments_tittle')
        setTimeout(() => {
            window.location.href = '/appointments';
        }, 5000);
    }
}

function enableForm(){

    const form = document.getElementById('formulario__appointments__admin');
    
    if(form){
        const editButton = document.getElementById('editButton');
        const inputs = form.querySelectorAll('input, select');

    inputs.forEach(input => {
        input.setAttribute('disabled', true);
    });
    // Enable all fields when "Edit" button is clicked
    editButton.addEventListener('click', () => {
        inputs.forEach(input => {
            input.removeAttribute('disabled');
        });
        
        editButton.setAttribute('disabled', true);
    });
    }
    
}






