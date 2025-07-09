<?php
session_start();

include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D’cember Luxe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg width="50" height="50" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <!-- kuku -->
                    <path d="M50 5 C70 5, 85 20, 85 40 V85 C85 95, 70 100, 50 100 C30 100, 15 95, 15 85 V40 C15 20, 30 5, 50 5" 
                          fill="#FFC0CB" stroke="#D81B60" stroke-width="3"/>
                    
                    <!-- Gelombang Warna-warni -->
                    <path d="M30 45 Q40 35, 50 45 T70 45" stroke="#FF5733" stroke-width="4" fill="none"/>
                    <path d="M30 55 Q40 45, 50 55 T70 55" stroke="#FFD700" stroke-width="4" fill="none"/>
                    <path d="M30 65 Q40 55, 50 65 T70 65" stroke="#00BFFF" stroke-width="4" fill="none"/>
                    
                    <!-- Bunga -->
                    <circle cx="50" cy="75" r="5" fill="#FFFF00"/>
                    <circle cx="42" cy="75" r="4" fill="#FFFFFF"/>
                    <circle cx="58" cy="75" r="4" fill="#FFFFFF"/>
                    <circle cx="50" cy="67" r="4" fill="#FFFFFF"/>
                    <circle cx="50" cy="83" r="4" fill="#FFFFFF"/>
                </svg>
                
                D’cember Luxe
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#reviews-section">Reviews</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="login.html">login</a>
        </li>
    </ul>

    <!-- Social Media Icons -->
    <div class="social-icons d-flex align-items-center ms-lg-3 mt-3 mt-lg-0">
      <a href="https://instagram.com" target="_blank" class="me-3">
      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" width="24" height="24">
      </a>
    </div>
</div>

        </div>
    </nav>
    
<!-- Main Content -->
    <div class="content" id="content">
<!-- Hero Section -->
        <section id="profile" class="hero">
            <div class="hero-text">
                <h1>D’cember Luxe</h1>
               <p> Because You Deserve Luxury & Beauty </p>
               <button class="btn" data-bs-toggle="modal" data-bs-target="#bookingModal">Book an Appointment</button>
            </div>
               <div class="hero-image">
                    <img src="gambar/model.png">
                </div>
        </section>
<!-- About Section -->
<section id="about" class="section about-section">
  <h2 class="section-title-about">About Us</h2>
  <div class="about-content">
    <div class="about-text">
      <p>
        Selamat datang di D’cember Luxe – Salon Kecantikan dengan Sentuhan Kemewahan.
        D’cember Luxe adalah salon kecantikan yang didirikan dengan visi untuk menghadirkan layanan perawatan yang tidak hanya profesional, tetapi juga memberikan kenyamanan dan pengalaman mewah bagi setiap pelanggan.
        Kami percaya bahwa setiap orang berhak tampil menawan dan merasa istimewa. Dengan tim beautician berpengalaman, tempat yang elegan, serta produk berkualitas tinggi,
        D’cember Luxe menjadi destinasi yang tepat untuk merawat diri dari ujung kepala hingga ujung kaki. Kami menawarkan berbagai layanan mulai dari perawatan rambut, wajah, kuku, hingga body spa, semuanya dirancang untuk menyegarkan penampilan dan meningkatkan rasa percaya diri Anda.
        Kami selalu mengutamakan kepuasan dan kenyamanan pelanggan dalam setiap layanan. Komitmen kami adalah memberikan hasil terbaik dan pengalaman yang berkesan di setiap kunjungan Anda. Terima kasih telah mempercayakan perawatan kecantikan Anda kepada kami.</p>
       <p> D’cember Luxe – Beauty. Elegance. You.</p>
      
    </div>
    <div class="room">
      <img src="gambar/room1.jpg" alt="Room 1" />
      <img src="gambar/room2.jpg" alt="Room 2" />
      <img src="gambar/room3.jpg" alt="Room 3" />
      <img src="gambar/room4.jpg" alt="Room 4" />
    </div>
  </div>
</section>

<section class="services-section" id="services">
  <!-- Gambar layanan (kiri) -->
  <div class="services-list">
    <div class="service-item">
      <img src="gambar/manicure.jpg" alt="Manicure">
      <p>Manicure</p>
    </div>
    <div class="service-item">
      <img src="gambar/pedicure.jpg" alt="Pedicure">
      <p>Pedicure</p>
    </div>
    <div class="service-item">
      <img src="gambar/footspa.jpg" alt="Footspa">
      <p>Footspa</p>
    </div>
    <div class="service-item">
      <img src="gambar/makeup.jpg" alt="Makeup">
      <p>Makeup</p>
    </div>
    <div class="service-item">
      <img src="gambar/hairdo.jpg" alt="Hairdo">
      <p>Hairdo</p>
    </div>
    <div class="service-item">
      <img src="gambar/lashlift.jpg" alt="Lashlift">
      <p>Lashlift</p>
    </div>
  </div>

  <!-- Deskripsi layanan (kanan) -->
  <div class="services-description">
    <h2 class="services-title">Our Service</h2>
    <p>
      Di <strong>D’cember Luxe</strong>, kami percaya bahwa perawatan diri adalah bentuk cinta terhadap diri sendiri. 
      Dengan menghadirkan layanan kecantikan yang lengkap dan profesional, kami siap membantu Anda tampil lebih percaya diri dan memancarkan pesona alami dari ujung kepala hingga ujung kaki.
      <br><br>
      Nikmati kenyamanan pelayanan di ruang yang elegan dan tenang, serta rasakan sensasi relaksasi dalam setiap sentuhan kami. 
      Apapun kebutuhan kecantikan Anda, <strong>D’cember Luxe</strong> adalah tempat yang tepat untuk memanjakan diri.
    </p>
    <a href="layanan.html" class="services-button">Our Services &gt;</a>
  </div>
</section>
 <!-- Gallery Section -->
        <section id="gallery" class="section">
            <h2 class="section-title">Gallery</h2>
            <div class="gallery">
                <img src="gambar/nailart1.jpg" alt="Nail Art Design 1">
                <img src="gambar/nailart2.jpg" alt="Nail Art Design 2">
                <img src="gambar/nailart3.jpg" alt="Nail Art Design 3">
                <img src="gambar/nailart4.jpg" alt="Nail Art Design 1">
                <img src="gambar/nailart5.jpg" alt="Nail Art Design 2">
                <img src="gambar/nailart6.jpg" alt="Nail Art Design 3">
                <img src="gambar/nailart7.jpg" alt="Nail Art Design 3">
                <img src="gambar/nailart8.jpg" alt="Nail Art Design 3">
                <img src="gambar/nailart9.jpg" alt="Nail Art Design 3">
                <img src="gambar/nailart10.jpg" alt="Nail Art Design 3">
                <img src="gambar/hairdo1.jpg" alt="Nail Art Design 1">
                <img src="gambar/hairdo2.jpg" alt="Nail Art Design 2">
                <img src="gambar/hairdo3.jpg" alt="Nail Art Design 3">
                <img src="gambar/hairdo4.jpg" alt="Nail Art Design 1">
                <img src="gambar/hairdo5.jpg" alt="Nail Art Design 2">
            </div>
        </section>
 <!-- review Section -->
 <section id="reviews-section">
  <div id="review-section-wrapper">
    <!-- Judul dan Deskripsi -->
    <div class="review-heading">
      <h2>Customer Reviews</h2>
      <p>See what our happy customers have to say about their experience!</p>
    </div>

    <!-- Form Review -->
    <div id="review-form">
      <h3>Leave a Review</h3>
      <input type="text" id="reviewName" placeholder="Your Name">
      <textarea id="reviewText" placeholder="Write your review..."></textarea>
      <button id="submitReview">Submit Review</button>
    </div>

    <!-- Container Review -->
    <div id="reviews-container">
      <!-- Review card akan muncul di sini -->
    </div>
  </div>
</section>

  <!-- Modal for Booking -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Book Your Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    <form id="bookingForm" action="submit_booking.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="service" class="form-label">Select Service</label>
        <select class="form-control" id="service" name="service" required>
            <option value="Manicure and Pedicure">Manicure and Pedicure</option>
            <option value="Custom Nail Art Designs">Custom Nail Art Designs</option>
            <option value="Gel Nail Application">Gel Nail Application</option>
            <option value="Maintenance and Repair">Maintenance and Repair</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Preferred Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="mb-3">
        <label for="time" class="form-label">Preferred Time</label>
        <input type="time" class="form-control" id="time" name="time" required>
    </div>
    
    <!-- Signature Canvas -->
    <div class="mb-3 text-center">
        <label class="form-label">Tanda Tangan</label>
        <div class="border p-2">
            <canvas id="signatureCanvas" width="300" height="150"></canvas>
            <input type="hidden" name="signature" id="signatureData">
        </div>
        <div class="tools mt-2">
            <button type="button" class="btn btn-danger" onclick="clearCanvas()">Clear</button>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Book Now</button>
</form>
 </div>          
</div>
</div>
</div>

<!-- Footer -->
<footer id="contact" class="footer">
  <div class="footer-grid">
    <!-- Kiri: Map -->
    <div class="footer-map">
      <div id="map"></div>
    </div>

    <!-- Tengah: Teks Contact -->
    <div class="footer-center-text">
      <p>
        Contact us for bookings and inquiries at 
        <a href="Dcemberluxe@studio.com">info@nailartstudio.com</a>
      </p>
    </div>

    <!-- Kanan: Hubungi Kami -->
    <div class="contact-box">
      <div class="contact-header">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
        <span>Hubungi kami</span>
      </div>
      <p>Butuh bantuan dan informasi, segera hubungi kami di</p>
      <a href="https://wa.me/6285175295329" class="wa-link">+62-851-7529-5329</a>
    </div>
  </div>
</footer>





   

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>