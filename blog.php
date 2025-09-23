<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Marvelous IT - Blog</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<header class="fixed w-full bg-white bg-opacity-40 backdrop-blur z-50 shadow-md">
  <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
    <a href="index.php">
      <img src="image/Marveit ABCD (3).svg" alt=" Logo" class="h-10 w-auto">
    </a>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-6 text-sm">
      <a href="index.php#services" class="hover:text-blue-600 font-medium">Services</a>
      <a href="index.php#industries" class="hover:text-blue-600 font-medium">Industries</a>
      <a href="index.php#about" class="hover:text-blue-600 font-medium">About</a>
      <a href="index.php#team" class="hover:text-blue-600 font-medium">Team</a>
      <a href="blog.php" class="text-blue-600 font-medium">Blog</a>
      <a href="index.php#contact" class="hover:text-blue-600 font-medium">Contact</a>
    </nav>

    <a href="#contact" class="hidden md:inline bg-gradient-to-r from-blue-600 to-blue-500 text-white px-5 py-2 rounded-lg shadow-md hover:shadow-xl transition">Let’s Contact</a>

    <!-- Mobile Menu -->
    <button id="menu-btn" class="md:hidden text-blue-700 focus:outline-none" aria-label="Toggle menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
    <a href="index.php#services" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Services</a>
    <a href="index.php#industries" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Industries</a>
    <a href="index.php#about" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">About</a>
    <a href="index.php#team" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Team</a>
    <a href="blog.php" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Blog</a>
    <a href="index.php#contact" class="block px-4 py-3 hover:bg-blue-50">Contact</a>
    <a href="index.php#contact" class="block mt-2 mx-4 mb-3 bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center py-2 rounded shadow hover:shadow-xl transition">Let’s Talk</a>
  </nav>
</header>

<!-- Blog Section -->
<section id="blog" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-blue-700 mb-12">Our Blog</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Blog Post 1 -->
      <div class="bg-blue-50 rounded-xl p-6 shadow-lg text-left" data-aos="fade-up">
        <img src="https://images.unsplash.com/photo-1516116216624-53e6973bea1c?q=80&w=1920&h=400=format&fit=crop" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">The Future of AI and Data Annotation</h3>
        <p class="text-gray-600 text-sm mb-4">Explore how AI is evolving and the critical role that high-quality data annotation plays in this transformation. Learn about the latest trends and what they mean for your business.</p>
        <a href="#" class="text-blue-600 font-bold hover:underline">Read More &rarr;</a>
      </div>
      <!-- Blog Post 2 -->
      <div class="bg-blue-50 rounded-xl p-6 shadow-lg text-left" data-aos="fade-up" data-aos-delay="100">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1920&h=400=format&fit=crop" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">5 Tips for a Successful Web Development Project</h3>
        <p class="text-gray-600 text-sm mb-4">Planning a new website? Our experts share their top five tips for ensuring your web development project is a success from start to finish. Avoid common pitfalls and launch with confidence.</p>
        <a href="#" class="text-blue-600 font-bold hover:underline">Read More &rarr;</a>
      </div>
      <!-- Blog Post 3 -->
      <div class="bg-blue-50 rounded-xl p-6 shadow-lg text-left" data-aos="fade-up" data-aos-delay="200">
        <img src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?q=80&w=1920&h=400=format&fit=crop" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Unlocking Growth with Digital Marketing</h3>
        <p class="text-gray-600 text-sm mb-4">Discover the power of a strong digital marketing strategy. We break down the essentials of SEO, social media, and content marketing to help you connect with your audience and drive growth.</p>
        <a href="#" class="text-blue-600 font-bold hover:underline">Read More &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-white py-10 shadow-inner mt-20">
  <div class="max-w-6xl mx-auto px-4 text-center text-gray-600">
    <p>&copy; <?php echo date('Y'); ?> Marvelous IT. All rights reserved.</p>
    <p class="mt-2">
      <a href="#" class="hover:text-blue-600 mx-2" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="hover:text-blue-600 mx-2" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" class="hover:text-blue-600 mx-2" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      <a href="#" class="hover:text-blue-600 mx-2" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    </p>
  </div>
</footer>

<!-- Scripts -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Initialize AOS
    AOS.init({ duration: 1000 });
  });
</script>

</body>
</html>
