<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Marvelous IT</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    html { scroll-behavior: smooth; }
    .gradient-overlay {
      background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.1));
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<header class="fixed w-full bg-white bg-opacity-40 backdrop-blur z-50 shadow-md">
  <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
    <img src="image/Marveit_ABCD_logo_cropped.svg" alt=" Logo" class="h-10 w-auto">

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-6 text-sm">
      <a href="#services" class="hover:text-blue-600 font-medium">Services</a>
      <a href="#industries" class="hover:text-blue-600 font-medium">Industries</a>
      <a href="#reviews" class="hover:text-blue-600 font-medium">Reviews</a>
      <a href="#about" class="hover:text-blue-600 font-medium">About</a>
      <a href="#team" class="hover:text-blue-600 font-medium">Team</a>
      <a href="blog.php" class="hover:text-blue-600 font-medium">Blog</a>
      <a href="#contact" class="hover:text-blue-600 font-medium">Contact</a>
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
    <a href="#services" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Services</a>
    <a href="#industries" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Industries</a>
    <a href="#reviews" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Reviews</a>
    <a href="#about" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">About</a>
    <a href="#team" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Team</a>
    <a href="blog.php" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Blog</a>
    <a href="#contact" class="block px-4 py-3 hover:bg-blue-50">Contact</a>
    <a href="#contact" class="block mt-2 mx-4 mb-3 bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center py-2 rounded shadow hover:shadow-xl transition">Let’s Talk</a>
  </nav>
</header>

<!-- Hero Section -->
<section class="h-screen bg-cover bg-center flex items-center justify-center relative" style="background-image: url('https://images.unsplash.com/photo-1551836022-4c4c79ecde51?q=80&w=1920&h=400=format&fit=crop');">
  <div class="absolute inset-0 gradient-overlay"></div>
  <div class="relative z-10 text-center text-white px-6" data-aos="fade-up">
    <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-md">Build Data You Can Trust</h2>
    <p class="text-lg md:text-xl mb-6 font-light">We provide ready data services for responsible innovation</p>
    <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded shadow-lg hover:bg-gray-100 transition">Let’s Contact</a>
  </div>
</section>

<!-- Premade Website Section -->
<section id="premade-websites" class="py-20 bg-gray-100">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">Our Premade Websites for Selling</h2>
    <p class="text-gray-700 text-base max-w-2xl mx-auto mb-12">
      Choose from our professionally designed websites. Ready to be deployed for your business.
    </p>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Project Card 1 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
        <img src="image/ecommerce.jpg" alt="E-commerce Website Screenshot" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col flex-grow text-left">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">E-commerce Website with Responsive</h3>
          <p class="text-gray-600 mb-4">
            A responsive e-commerce platform with multivendor support. Customers can buy products from multiple vendors.
            Built using Laravel & Tailwind CSS.
          </p>

          <!-- Tech Badges -->
          <div class="mb-4 space-x-2">
            <span class="inline-block bg-blue-600 text-white text-xs px-2 py-1 rounded">Laravel</span>
            <span class="inline-block bg-green-600 text-white text-xs px-2 py-1 rounded">Tailwind</span>
            <span class="inline-block bg-sky-500 text-white text-xs px-2 py-1 rounded">API</span>
            <span class="inline-block bg-yellow-400 text-gray-900 text-xs px-2 py-1 rounded">Filament</span>
          </div>

          <!-- Buttons -->
          <div class="mt-auto flex justify-between mb-4">
            <a href="https://ecommerce.marveit.com" target="_blank" class="flex items-center bg-blue-600 text-white px-3 py-2 rounded-lg hover:bg-blue-700 transition">
              <i class="fas fa-eye mr-2"></i> Live Demo
            </a>
            <div class="text-left">
              <p>Admin@gmail.com</p>
              <p>Password: admin</p>
            </div>
          </div>

          <!-- Dollar Price -->
          <div class="flex justify-center mb-4">
            <a href="#" class="flex items-center bg-green-600 text-white px-3 py-2 rounded-lg hover:bg-green-700 transition">
              <i class="fas fa-dollar-sign mr-2"></i> $200
            </a>
          </div>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
        <img src="image/ecommerce2.png" alt="E-commerce Website Screenshot" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col flex-grow text-left">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">E-commerce 2 Website with Responsive</h3>
          <p class="text-gray-600 mb-4">
            Another responsive e-commerce platform with multivendor support. Customers can buy products from multiple vendors.
            Built using Laravel & Tailwind CSS.
          </p>

          <!-- Tech Badges -->
          <div class="mb-4 space-x-2">
            <span class="inline-block bg-blue-600 text-white text-xs px-2 py-1 rounded">Laravel</span>
            <span class="inline-block bg-yellow-400 text-gray-900 text-xs px-2 py-1 rounded">Filament</span>
            <span class="inline-block bg-sky-500 text-white text-xs px-2 py-1 rounded">API</span>
            <span class="inline-block bg-green-600 text-white text-xs px-2 py-1 rounded">Tailwind</span>
          </div>

          <!-- Buttons -->
          <div class="mt-auto flex justify-between mb-4">
            <a href="https://ecommerce-bolt.marveit.com" target="_blank" class="flex items-center bg-blue-600 text-white px-3 py-2 rounded-lg hover:bg-blue-700 transition">
              <i class="fas fa-eye mr-2"></i> Live Demo
            </a>
            <div class="text-left">
              <p>admin@example.com</p>
              <p>Password: password</p>
            </div>
          </div>

          <!-- Dollar Price -->
          <div class="flex justify-center mb-4">
            <a href="#" class="flex items-center bg-green-600 text-white px-3 py-2 rounded-lg hover:bg-green-700 transition">
              <i class="fas fa-dollar-sign mr-2"></i> $200
            </a>
          </div>
        </div>
      </div>

       <!-- Project Card 3 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
        <img src="image/journymate.webp" alt="E-commerce Website Screenshot" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col flex-grow text-left">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Travel Management System with Responsive Design</h3>
            <p class="text-gray-600 mb-4">
              A complete web application for managing Hajj, Umrah, and work-related travel. Users can register for trips, track applications, and manage expenses. Includes an intuitive admin panel for full oversight. Built with Laravel & Tailwind CSS.
            </p>


          <!-- Tech Badges -->
          <div class="mb-4 space-x-2">
            <span class="inline-block bg-blue-600 text-white text-xs px-2 py-1 rounded">Laravel</span>
            <span class="inline-block bg-yellow-400 text-gray-900 text-xs px-2 py-1 rounded">Filament</span>
            <span class="inline-block bg-sky-500 text-white text-xs px-2 py-1 rounded">API</span>
            <span class="inline-block bg-green-600 text-white text-xs px-2 py-1 rounded">Tailwind</span>
          </div>

          <!-- Buttons -->
          <div class="mt-auto flex justify-between mb-4">
            <a href="https://travelagency.marveit.com" target="_blank" class="flex items-center bg-blue-600 text-white px-3 py-2 rounded-lg hover:bg-blue-700 transition">
              <i class="fas fa-eye mr-2"></i> Live Demo
            </a>
            <div class="text-left">
              <p>admin@admin.com</p>
              <p>Password: password</p>
            </div>
          </div>

          <!-- Dollar Price -->
          <div class="flex justify-center mb-4">
            <a href="#" class="flex items-center bg-green-600 text-white px-3 py-2 rounded-lg hover:bg-green-700 transition">
              <i class="fas fa-dollar-sign mr-2"></i> $150
            </a>
          </div>
        </div>
      </div>

      <!-- Add more project cards here if needed -->

    </div>
  </div>
</section>


<!-- Metrics Section -->
<section class="bg-white py-20">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 text-center gap-12" data-aos="fade-up">
    <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
      <h3 class="text-4xl font-extrabold text-blue-600" data-counter="500">0+</h3>
      <p class="mt-3 text-base text-gray-700 font-medium">Satisfied Clients</p>
    </div>
    <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
      <h3 class="text-4xl font-extrabold text-blue-600" data-counter="50">0+</h3>
      <p class="mt-3 text-base text-gray-700 font-medium">Miles Mapped</p>
    </div>
    <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
      <h3 class="text-4xl font-extrabold text-blue-600" data-counter="200">0+</h3>
      <p class="mt-3 text-base text-gray-700 font-medium">Data Labelers</p>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-blue-50">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-blue-700 mb-8">Our Services</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="p-6 bg-white rounded-lg shadow" data-aos="zoom-in">
        <h3 class="text-xl font-semibold text-blue-600 mb-3">Data Annotation</h3>
        <p class="text-gray-600">High-quality data labeling for AI/ML projects. <a href="annotation.php" class="text-blue-600 font-bold">Learn More about Data Annotation</a></p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow" data-aos="zoom-in" data-aos-delay="100">
        <h3 class="text-xl font-semibold text-blue-600 mb-3">Web Design & Development</h3>
        <p class="text-gray-600">Custom websites, web apps, and scalable backend solutions.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow" data-aos="zoom-in" data-aos-delay="200">
        <h3 class="text-xl font-semibold text-blue-600 mb-3">Digital Marketing</h3>
        <p class="text-gray-600">SEO, social media, and content strategies to boost growth. <a href="d-marketting.php" class="text-blue-600 font-bold">Learn More about Digital Marketing</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Industries Section -->
<section id="industries" class="bg-white py-20">
  <div class="max-w-6xl mx-auto px-4 text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">Industries We Serve</h2>
    <p class="text-gray-700 text-base max-w-2xl mx-auto mb-12">We provide tailored solutions for a wide range of industries to help them grow and thrive in the digital world.</p>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="100">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">E-commerce</h3>
        <p class="text-gray-600">Smart solutions for online stores, from carts to dashboards.</p>
      </div>
      <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Healthcare</h3>
        <p class="text-gray-600">Secure platforms for hospitals, diagnostics & health records.</p>
      </div>
      <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="300">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Education</h3>
        <p class="text-gray-600">E-learning platforms, online exams, and student management tools.</p>
      </div>
      <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="400">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Real Estate</h3>
        <p class="text-gray-600">Property listings, lead generation, and virtual tours.</p>
      </div>
      <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="500">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Logistics</h3>
        <p class="text-gray-600">Fleet tracking, order management, and warehouse automation.</p>
      </div>
      <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="600">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Finance</h3>
        <p class="text-gray-600">Fintech apps, wallets, and secure transaction systems.</p>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="bg-blue-50 py-20">
  <div class="max-w-6xl mx-auto px-4 text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">About Us</h2>
    <p class="text-gray-700 text-base max-w-3xl mx-auto mb-12">
      We are a passionate team dedicated to providing top-notch tech solutions. We focus on innovation, quality, and client satisfaction.
    </p>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300" data-aos="zoom-in" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-blue-600 mb-2">Our Mission</h3>
        <p class="text-gray-600">To empower businesses with scalable and smart technology that drives growth.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300" data-aos="zoom-in" data-aos-delay="200">
        <h3 class="text-2xl font-semibold text-blue-600 mb-2">Our Vision</h3>
        <p class="text-gray-600">To become a global leader in delivering cutting-edge software solutions.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300" data-aos="zoom-in" data-aos-delay="300">
        <h3 class="text-2xl font-semibold text-blue-600 mb-2">Our Values</h3>
        <p class="text-gray-600">Integrity, Innovation, Collaboration, and Excellence.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Team Section -->
<section id="team" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-blue-700 mb-12">Our Team</h2>

    <!-- Tabs -->
    <div class="flex justify-center mb-10 border-b-2 border-gray-200">
      <button class="team-tab text-blue-700 font-semibold py-2 px-4 border-b-2 border-blue-700" data-tab="annotation">Data Annotation</button>
      <button class="team-tab text-gray-600 hover:text-blue-700 font-semibold py-2 px-4 border-b-2 border-transparent" data-tab="web">Web Development</button>
      <button class="team-tab text-gray-600 hover:text-blue-700 font-semibold py-2 px-4 border-b-2 border-transparent" data-tab="marketing">Digital Marketing</button>
    </div>

    <!-- Tab Content -->
    <div class="team-content">

      <!-- Data Annotation Team -->
      <div class="team-panel grid md:grid-cols-3 gap-10" data-tab-content="annotation">
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg text-center">
  <!-- Women Icon -->
          <img src="image/nishat2.png" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">

  <!-- Texts -->
          <h3 class="text-xl font-semibold text-gray-800">Nishat Tasnim</h3>
          <p class="text-blue-600 mb-2">Sales & Marketing, ML</p>
          <p class="text-gray-600 text-sm">Sales & Marketing, Machine Learning</p>
        </div>


        <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Ebrahim Khalilullah</h3>
          <p class="text-blue-600 mb-2">Project Manager</p>
          <p class="text-gray-600 text-sm">Project lead & leading AI data annotation team.</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
          <img src="image/park.jpg" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Md Abu Elias</h3>
          <p class="text-blue-600 mb-2">Team Leader</p>
          <p class="text-gray-600 text-sm">Leading data annotation team.</p>
        </div>
        
      </div>

      <!-- Web Development Team -->
      <div class="team-panel grid md:grid-cols-3 gap-10 hidden" data-tab-content="web">
          <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
            <img src="image/salman.png" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
            <h3 class="text-xl font-semibold text-gray-800">Abdullah Al Salman</h3>
            <p class="text-blue-600 mb-2">Full-Stack Laravel Developer</p>
            <p class="text-gray-600 text-sm">
              Passionate about crafting scalable, secure, and high-performance web applications. 
              Experienced in turning ideas into powerful digital solutions with clean code and modern technologies.
            </p>
          </div>

        <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
          <img src="image/ratul.jpeg" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Ratul Raihan</h3>
          <p class="text-blue-600 mb-2">Frontend & UI/UX Developer</p>
          <p class="text-gray-600 text-sm">
            Specialized in Next.js & React development with a strong focus on clean design and seamless user experiences. 
            Skilled in Tailwind CSS, Bootstrap 5, HTML5, and CSS3 to build modern, responsive web applications. 🌐
          </p>

        </div>
        <!-- <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
          <img src="https://randomuser.me/api/portraits/women/55.jpg" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Farzana Akter</h3>
          <p class="text-blue-600 mb-2">Backend Developer</p>
          <p class="text-gray-600 text-sm">Laravel & API integration expert.</p>
        </div> -->
      </div>

      <!-- Digital Marketing Team -->
      <div class="team-panel grid md:grid-cols-3 gap-10 hidden" data-tab-content="marketing">
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
          <img src="image/shahin.png" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">MD Shahin Alom</h3>
          <p class="text-blue-600 mb-2">Digital Marketing Specialist</p>
          <p class="text-gray-600 text-sm">
            Expert in SEO, social media, and content strategy—helping brands grow their online presence 
            and reach the right audience effectively.
          </p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
          <img src="https://randomuser.me/api/portraits/men/66.jpg" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Samiul Alam</h3>
          <p class="text-blue-600 mb-2">Social Media Manager</p>
          <p class="text-gray-600 text-sm">Handles campaigns & engagement.</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
          <img src="https://randomuser.me/api/portraits/women/77.jpg" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Tania Ahmed</h3>
          <p class="text-blue-600 mb-2">Content Strategist</p>
          <p class="text-gray-600 text-sm">Creates marketing content & strategy.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-blue-50 py-20">
  <div class="max-w-6xl mx-auto px-4 text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">Contact Us</h2>
    <p class="text-gray-700 text-base max-w-2xl mx-auto mb-10">
      I’d love to hear from you! Reach out via email or connect with me on social media.
    </p>

    <div class="grid md:grid-cols-3 gap-8 text-left max-w-4xl mx-auto">
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="100">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Email</h3>
        <p class="text-gray-700">salmanabdullahal0@gmail.com</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Phone</h3>
        <p class="text-gray-700">+880 1753499696</p>
        <p class="text-gray-700"> <strong><svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg></strong> </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="300">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Location</h3>
        <p class="text-gray-700">Mymensingh, vhaluka, Bangladesh</p>
      </div>
    </div>
  </div>
</section>
<!-- Customer Review Section -->
<section id="reviews" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-blue-700 mb-12">What Our Clients Say</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Review 1 -->
      <div class="bg-blue-50 rounded-xl p-6 shadow-lg text-left" data-aos="fade-up">
        <div class="flex items-center mb-4">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-12 h-12 rounded-full mr-4">
          <div>
            <h4 class="font-semibold text-gray-800">Jane Doe</h4>
            <p class="text-gray-600 text-sm">CEO, Tech Solutions Inc.</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"Marvelous IT transformed our data annotation process. Their attention to detail and commitment to quality are second to none. We couldn't be happier with the results."</p>
      </div>
      <!-- Review 2 -->
      <div class="bg-blue-50 rounded-xl p-6 shadow-lg text-left" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-center mb-4">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-12 h-12 rounded-full mr-4">
          <div>
            <h4 class="font-semibold text-gray-800">John Smith</h4>
            <p class="text-gray-600 text-sm">Marketing Director, Growth Co.</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"The new website is fantastic! It's fast, looks great, and has already boosted our engagement. The team was a pleasure to work with."</p>
      </div>
      <!-- Review 3 -->
      <div class="bg-blue-50 rounded-xl p-6 shadow-lg text-left" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-center mb-4">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-12 h-12 rounded-full mr-4">
          <div>
            <h4 class="font-semibold text-gray-800">Emily Johnson</h4>
            <p class="text-gray-600 text-sm">Founder, Creative Minds</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"Their digital marketing expertise has been a game-changer for us. We've seen a significant increase in leads and our online presence has never been stronger."</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-white py-10 shadow-inner mt-20">
  <div class="max-w-6xl mx-auto px-4 text-center text-gray-600">
    <p>&copy; <?php echo date('Y'); ?> Marvelous IT. All rights reserved.</p>
    <p class="mt-2">
      <!-- <a href="#" class="hover:text-blue-600 mx-2" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a> -->
      <!-- <a href="#" class="hover:text-blue-600 mx-2" aria-label="Twitter"><i class="fab fa-twitter"></i></a> -->
     <a href="https://www.linkedin.com/company/marveit/" 
   class="hover:text-blue-600 mx-2" 
   aria-label="LinkedIn" 
   target="_blank" 
   rel="noopener noreferrer">
   <i class="fab fa-linkedin-in"></i>
</a>

      <!-- <a href="#" class="hover:text-blue-600 mx-2" aria-label="Instagram"><i class="fab fa-instagram"></i></a> -->
    </p>
  </div>
</footer>

<!-- Scroll to Top -->
<button id="scrollBtn" class="fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition hidden">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Scripts -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Tabs Functionality
    const tabs = document.querySelectorAll('.team-tab');
    const panels = document.querySelectorAll('.team-panel');
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = tab.getAttribute('data-tab');
        tabs.forEach(t => {
          t.classList.remove('text-blue-700', 'border-blue-700');
          t.classList.add('text-gray-600', 'border-transparent');
        });
        tab.classList.add('text-blue-700', 'border-blue-700');
        tab.classList.remove('text-gray-600', 'border-transparent');
        panels.forEach(panel => {
          panel.getAttribute('data-tab-content') === target ? panel.classList.remove('hidden') : panel.classList.add('hidden');
        });
      });
    });

    // Scroll to Top
    const scrollBtn = document.getElementById('scrollBtn');
    window.addEventListener('scroll', () => {
      if(window.scrollY > 300) scrollBtn.classList.remove('hidden');
      else scrollBtn.classList.add('hidden');
    });
    scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // Initialize AOS
    AOS.init({ duration: 1000 });

    // Counter Animation
    const counters = document.querySelectorAll('[data-counter]');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          let target = +counter.getAttribute('data-counter');
          let count = 0;
          const increment = target / 200;
          const updateCounter = () => {
            if(count < target){
              count += increment;
              counter.textContent = Math.ceil(count) + '+';
              requestAnimationFrame(updateCounter);
            } else {
              counter.textContent = target + '+';
            }
          }
          updateCounter();
          observer.unobserve(counter);
        }
      });
    });

    counters.forEach(counter => {
      observer.observe(counter);
    });
  });
</script>

</body>
</html>
