<!-- Full updated code with professional enhancements and new sections -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agency Portfolio</title>
  <!-- ✅ Correct Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- font awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <!-- AOS Animation Script -->
  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      AOS.init({
        once: true
      });
      const counters = document.querySelectorAll("[data-counter]");
      const speed = 300;
      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute("data-counter");
          const count = +counter.innerText.replace(/\D/g, '');
          const inc = target / speed;
          if (count < target) {
            counter.innerText = Math.ceil(count + inc).toLocaleString() + "+";
            setTimeout(updateCount, 20);
          } else {
            counter.innerText = target.toLocaleString() + "+";
          }
        };
        const onScroll = () => {
          const top = counter.getBoundingClientRect().top;
          if (top < window.innerHeight) {
            updateCount();
            window.removeEventListener("scroll", onScroll);
          }
        };
        window.addEventListener("scroll", onScroll);
      });
    });
  </script>

  <style>
    html {
      scroll-behavior: smooth;
    }

    .gradient-overlay {
      background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1));
    }
  </style>
</head>

<body class="text-gray-800 bg-gray-50">
  <!-- Navbar -->
  <header class="fixed w-full bg-white bg-opacity-90 backdrop-blur z-50 shadow-sm">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-2xl font-bold text-blue-700 tracking-wide">YourAgency</h1>

      <!-- Desktop Menu -->
      <nav id="nav-menu" class="hidden md:flex space-x-6 text-sm">
        <a href="#services" class="hover:text-blue-600 font-medium">Services</a>
        <a href="#industries" class="hover:text-blue-600 font-medium">Industries</a>
        <a href="#about" class="hover:text-blue-600 font-medium">About</a>
        <a href="#contact" class="hover:text-blue-600 font-medium">Contact</a>
      </nav>

      <!-- Call to action button (desktop only) -->
      <a href="" id="#contact" class="hidden md:inline bg-gradient-to-r from-blue-600 to-blue-500 text-white px-5 py-2 rounded-lg shadow-md hover:shadow-xl transition">Let’s Contact</a>

      <!-- Hamburger Button (mobile only) -->
      <button id="menu-btn" class="md:hidden text-blue-700 focus:outline-none" aria-label="Toggle menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
      <a href="#services" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Services</a>
      <a href="#industries" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">Industries</a>
      <a href="#about" class="block px-4 py-3 border-b border-gray-200 hover:bg-blue-50">About</a>
      <a href="#contact" class="block px-4 py-3 hover:bg-blue-50">Contact</a>
      <a href="#contact" class="block mt-2 mx-4 mb-3 bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center py-2 rounded shadow hover:shadow-xl transition">Let’s Talk</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="h-screen bg-cover bg-center flex items-center justify-center relative" style="background-image: url('https://images.unsplash.com/photo-1551836022-4c4c79ecde51?q=80&w=1920&auto=format&fit=crop');">
    <div class="absolute inset-0 gradient-overlay"></div>
    <div class="relative z-10 text-center text-white px-6" data-aos="fade-up">
      <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-md">Build Data You Can Trust</h2>
      <p class="text-lg md:text-xl mb-6 font-light">We provide ready data services for responsible innovation</p>
      <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded shadow-lg hover:bg-gray-100 transition">Let’s Contact</a>
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
          <p class="text-gray-600">Annotation Solution is a leading annotation providing service company
            that specializes in delivering high-quality data annotation solutions
            to businesses and organizations across various industries...... <a href="annotation.php" class="text-blue-600 font-bold">Reed With Details</a></p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow" data-aos="zoom-in" data-aos-delay="100">
          <h3 class="text-xl font-semibold text-blue-600 mb-3">Web Design & Development</h3>
          <p class="text-gray-600">Human-in-the-loop solutions for machine learning models.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow" data-aos="zoom-in">
          <h3 class="text-xl font-semibold text-blue-600 mb-3">Digital Marketing</h3>
          <p class="text-gray-600">
            Our expert digital marketing team helps your brand grow with result-driven strategies,
            including SEO, social media marketing, paid campaigns, and content creation.
            We connect you with your ideal audience and turn engagement into conversions.
            <a href="d-marketting.php" class="text-blue-600 font-bold">Read With Details</a>
          </p>
        </div>

      </div>
    </div>
  </section>
  <!-- Industries Section -->
  <section id="industries" class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-4 text-center" data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-700 mb-6">Industries We Serve</h2>
      <p class="text-gray-700 text-base max-w-2xl mx-auto mb-12">
        We provide tailored solutions for a wide range of industries to help them grow and thrive in the digital world.
      </p>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="100">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">E-commerce</h3>
          <p class="text-gray-600">Smart solutions for online stores, from cart systems to vendor dashboards.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Healthcare</h3>
          <p class="text-gray-600">Secure and efficient platforms for hospitals, diagnostics & health records.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="300">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Education</h3>
          <p class="text-gray-600">E-learning platforms, online exams, and student management tools.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="400">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Real Estate</h3>
          <p class="text-gray-600">Property listing portals, lead generation, and virtual tours.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="500">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Logistics</h3>
          <p class="text-gray-600">Fleet tracking, order management, and warehouse automation systems.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="600">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Finance</h3>
          <p class="text-gray-600">Fintech apps, digital wallets, and secure transaction systems.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- About Us Section -->
  <section id="about" class="bg-blue-50 py-20">
    <div class="max-w-6xl mx-auto px-4 text-center" data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-700 mb-6">About Us</h2>
      <p class="text-gray-700 text-base max-w-3xl mx-auto mb-12">
        We are a passionate team dedicated to providing top-notch tech solutions. With a strong focus on innovation, quality, and client satisfaction, we’ve been delivering excellence in every project we take on.
      </p>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300" data-aos="zoom-in" data-aos-delay="100">
          <h3 class="text-2xl font-semibold text-blue-600 mb-2">Our Mission</h3>
          <p class="text-gray-600">To empower businesses with scalable and smart technology that drives growth and efficiency.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300" data-aos="zoom-in" data-aos-delay="200">
          <h3 class="text-2xl font-semibold text-blue-600 mb-2">Our Vision</h3>
          <p class="text-gray-600">To become a global leader in delivering cutting-edge software solutions that transform industries.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300" data-aos="zoom-in" data-aos-delay="300">
          <h3 class="text-2xl font-semibold text-blue-600 mb-2">Our Values</h3>
          <p class="text-gray-600">Integrity, Innovation, Collaboration, and Excellence – these guide everything we do.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team Section -->
  <section id="team" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-12">Our Team</h2>
      <div class="grid md:grid-cols-3 gap-10">

        <!-- Team Member 1 -->
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg" data-aos="flip-left">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team Member" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Hasan Mahmud</h3>
          <p class="text-blue-600 mb-2">Founder & CEO</p>
          <p class="text-gray-600 text-sm">Leading visionary with 10+ years in AI & data labeling.</p>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg" data-aos="flip-left" data-aos-delay="100">
          <img src="image/shahin.png" alt="Team Member" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">MD. Shahin Alom</h3>
          <p class="text-blue-600 mb-2">Data Specialist</p>
          <p class="text-gray-600 text-sm">Expert in quality control and annotation workflow optimization.</p>
        </div>

        <!-- Team Member 3 -->
        <div class="bg-blue-50 rounded-xl p-6 shadow-lg" data-aos="flip-left" data-aos-delay="200">
          <img src="image/salman.png" alt="Team Member" class="w-24 h-24 mx-auto rounded-full mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">Abdullah Al Salman</h3>
          <p class="text-blue-600 mb-2">Full-Stack Laravel Developer</p>
          <p class="text-gray-600 text-sm">
            I'm a creative and passionate full-stack developer who loves building smart,
            secure, and scalable web applications. I take pride in writing clean code
            and delivering high-quality work.

          </p>
        </div>


      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <!-- Contact Section Without Form -->
  <section id="contact" class="bg-blue-50 py-20">
    <div class="max-w-6xl mx-auto px-4 text-center" data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-700 mb-6">Contact Us</h2>
      <p class="text-gray-700 text-base max-w-2xl mx-auto mb-10">
        I’d love to hear from you! Reach out via email or connect with me on social media.
      </p>

      <div class="grid md:grid-cols-3 gap-8 text-left max-w-4xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="100">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Email</h3>
          <p class="text-gray-700">yourname@example.com</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Phone</h3>
          <p class="text-gray-700">+880 1234 567890</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="300">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Location</h3>
          <p class="text-gray-700">Netrakona, Bangladesh</p>
        </div>
      </div>

      <!-- Social Links -->
      <div class="mt-12 flex justify-center gap-6" data-aos="fade-up" data-aos-delay="400">
        <a href="https://facebook.com/yourprofile" target="_blank" class="text-blue-600 text-2xl hover:text-blue-800 transition">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://linkedin.com/in/yourprofile" target="_blank" class="text-blue-600 text-2xl hover:text-blue-800 transition">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/yourprofile" target="_blank" class="text-blue-600 text-2xl hover:text-blue-800 transition">
          <i class="fab fa-github"></i>
        </a>
        <a href="mailto:yourname@example.com" class="text-blue-600 text-2xl hover:text-blue-800 transition">
          <i class="fas fa-envelope"></i>
        </a>
      </div>
    </div>
  </section>


  <!-- Scroll to Top Button -->
  <button id="scrollToTopBtn" class="fixed bottom-6 right-6 text-gray-800 bg-white p-3 rounded-full shadow-lg  transition hidden z-50">
    <i class="fas fa-arrow-up"></i>
  </button>
  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-10 mt-20">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
      <p class="text-sm">© 2025 YourAgency. All rights reserved.</p>
      <div class="space-x-4 mt-4 md:mt-0">
        <a href="#" class="hover:underline">Privacy Policy</a>
        <a href="#" class="hover:underline">Terms of Service</a>
      </div>
    </div>
  </footer>
</body>
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
<script>
  // Button
  const scrollBtn = document.getElementById('scrollToTopBtn');

  // Show/hide on scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      scrollBtn.classList.remove('hidden');
    } else {
      scrollBtn.classList.add('hidden');
    }
  });

  // Scroll to top on click
  scrollBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>

</html>