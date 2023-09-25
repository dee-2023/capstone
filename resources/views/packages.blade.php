@extends('layouts.app')
@section('title', "Packages")
@section('content')
<link rel="stylesheet" href="public/css/styles.css">

<div class="container text-center">
<div class="title-container">
    <h1 class="title">Travel Packages</h1>
</div>
    <h3>Get out there!</h3>
    <div class="row mb-5 cstm-height-card">
       
        <div class="col-md-4">
            <div class="card">
                <img src="./img/ph.png" class="card-img-top" alt="...">
                <div class="card-title-overlay">
                    <h5 class="card-title">Philippines</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">8,390 accommodations</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary learn-more-button" 
                       data-modal="modal1"
                       data-title="Philippines"
                       data-description="The Philippines, an archipelago of 7,641 islands, is a tropical paradise known for its stunning beaches, crystal-clear waters, and lush landscapes. Explore vibrant cities, dive into colorful coral reefs, and immerse yourself in a rich cultural tapestry. From the bustling streets of Manila to the serene shores of Palawan, the Philippines offers a diverse range of experiences for every traveler.">Learn More</a>
                </div>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="card">
                <img src="./img/thai.png" class="card-img-top" alt="...">
                <div class="card-title-overlay">
                    <h5 class="card-title">Thailand</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">14,741 accommodations</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary learn-more-button" 
                       data-modal="modal2"
                       data-title="Thailand"
                       data-description="Thailand, the 'Land of Smiles,' is a captivating destination known for its rich history, vibrant culture, and natural beauty. Explore ancient temples in Bangkok, savor delicious street food, and relax on pristine beaches in Phuket. With a mix of bustling cities, serene landscapes, and friendly locals, Thailand offers a diverse and unforgettable travel experience.">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="./img/indo.png" class="card-img-top" alt="...">
                <div class="card-title-overlay">
                    <h5 class="card-title">Indonesia</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">21,912 accommodations</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary learn-more-button" 
                       data-modal="modal3"
                       data-title="Indonesia"
                       data-description="Indonesia, an archipelago of over 17,000 islands, beckons travelers with its stunning diversity. Immerse yourself in the lush jungles of Bali, discover the ancient temples of Yogyakarta, and embark on thrilling adventures in Komodo National Park. With a rich tapestry of cultures, breathtaking landscapes, and a warm hospitality, Indonesia promises a remarkable journey through Southeast Asia.">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="./img/japan.jpg" class="card-img-top" alt="...">
                <div class="card-title-overlay">
                    <h5 class="card-title">Japan</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">35,512 accommodations</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary learn-more-button" 
                       data-modal="modal4"
                       data-title="Japan"
                       data-description="Japan, a land where tradition and modernity coexist in perfect harmony. Explore the bustling streets of Tokyo, where futuristic skyscrapers stand beside historic temples. Journey to Kyoto to witness the elegance of ancient rituals and serene bamboo groves. Savor world-class cuisine, from sushi to ramen, and soak in hot springs surrounded by natural beauty. Japan offers an enchanting blend of culture, technology, and natural wonders.">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="./img/turkey.jpg" class="card-img-top" alt="...">
                <div class="card-title-overlay">
                    <h5 class="card-title">Turkey</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">41,010 accommodations</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary learn-more-button" 
                       data-modal="modal5"
                       data-title="Turkey"
                       data-description="Discover the rich tapestry of Turkey, where East meets West. Immerse yourself in the vibrant bazaars of Istanbul, where the aroma of spices fills the air. Explore ancient ruins like Ephesus and marvel at the otherworldly landscapes of Cappadocia. Indulge in delectable kebabs and baklava, and relax on the stunning beaches of the Turkish Riviera. Turkey offers a captivating blend of history, culture, and natural beauty.">Learn More</a>
                </div>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="card">
                <img src="./img/seoul.jpg" class="card-img-top" alt="...">
                <div class="card-title-overlay">
                    <h5 class="card-title">South Korea</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">57,563 accommodations</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary learn-more-button" 
                       data-modal="modal6"
                       data-title="South Korea"
                       data-description="Experience the dynamic energy of South Korea, a country where tradition and innovation thrive side by side. Wander through the bustling streets of Seoul, home to modern skyscrapers and historic palaces. Delve into Korean cuisine with sizzling BBQ and savory kimchi. Explore serene Buddhist temples and hike scenic mountain trails. South Korea is a fusion of old and new, offering a unique blend of heritage and progress.">Learn More</a>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="modal" id="modal1">
    <div class="modal-content">
        <h2 id="modalTitle1"></h2>
        <p id="modalDescription1"></p>
        <span class="modal-close-button" id="closeModalButton1">
            <div class="close-button-box">Close</div>
        </span>
    </div>
</div>

<div class="modal" id="modal2">
    <div class="modal-content">
        <h2 id="modalTitle1"></h2>
        <p id="modalDescription1"></p>
        <span class="modal-close-button" id="closeModalButton1">
            <div class="close-button-box">Close</div>
        </span>
    </div>
</div>


<div class="modal" id="modal3">
    <div class="modal-content">
        <h2 id="modalTitle2"></h2>
        <p id="modalDescription2"></p>
        <span class="modal-close-button" id="closeModalButton3">
            <div class="close-button-box">Close</div>
        </span>
    </div>
</div>


<div class="modal" id="modal4">
    <div class="modal-content">
        <h2 id="modalTitle2"></h2>
        <p id="modalDescription2"></p>
        <span class="modal-close-button" id="closeModalButton4">
            <div class="close-button-box">Close</div>
        </span>
    </div>
</div>

<div class="modal" id="modal5">
    <div class="modal-content">
        <h2 id="modalTitle2"></h2>
        <p id="modalDescription2"></p>
        <span class="modal-close-button" id="closeModalButton5">
            <div class="close-button-box">Close</div>
        </span>
    </div>
</div>


<div class="modal" id="modal6">
    <div class="modal-content">
        <h2 id="modalTitle2"></h2>
        <p id="modalDescription2"></p>
        <span class="modal-close-button" id="closeModalButton5">
            <div class="close-button-box">Close</div>
        </span>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const learnMoreButtons = document.querySelectorAll('.learn-more-button');

    learnMoreButtons.forEach(button => {
        button.addEventListener('click', openModal);
    });

    function openModal(event) {
        const modalId = event.target.getAttribute('data-modal');
        const modal = document.getElementById(modalId);
        const modalTitle = modal.querySelector('h2');
        const modalDescription = modal.querySelector('p');

        const title = event.target.getAttribute('data-title');
        const description = event.target.getAttribute('data-description');

        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modal.style.display = 'block';

        const closeModalButton = modal.querySelector('.modal-close-button');
        closeModalButton.addEventListener('click', closeModal);
    }

    function closeModal() {
        const modal = this.closest('.modal');
        modal.style.display = 'none';
    }
});
</script>
@endsection
