<!-- annotation.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Annotation Services</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
</head>

<body class="bg-blue-50 text-gray-800">
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
  <!-- Header -->
  <a href="home.php">
    <header class="text-center py-10 bg-white shadow">
      <h1 class="text-4xl font-bold text-blue-700 mb-4">Annotation Services</h1>
      <h3 class="text-lg text-gray-600">High Quality Data Annotation Service Providers </h3>
    </header>
  </a>

  <!-- Introduction -->
  <section class="py-16 px-6 max-w-6xl mx-auto" data-aos="fade-up">
    <h2 class="text-2xl font-bold text-blue-600 mb-4">Introduction</h2>
    <p class="text-gray-700 leading-relaxed">
      Marveit Solution is a leading annotation providing service company that specializes
      in delivering high-quality data Marveit solutions to businesses and organizations across
      various industries. With a team of skilled annotators and advanced machine learning technologies,
      we help our clients harness the power
      of annotated data for training, refining, and improving their AI and machine learning models.
    </p>
  </section>

  <!-- Our Mission -->
  <section class="py-16 px-6 max-w-6xl mx-auto bg-white rounded-lg shadow" data-aos="fade-up">
    <h2 class="text-2xl font-bold text-blue-600 mb-4">Our Mission</h2>
    <p class="text-gray-700 leading-relaxed">
      As Marveit Solution, our mission is to empower businesses with accurate and reliable annotated data,
      enabling them to build cutting-edge AI applications and make data-driven decisions with confidence.
      We are committed to delivering exceptional annotation services that exceed our clients'
      expectations, providing them with a competitive edge in the ever-evolving technological landscape.
    </p>
  </section>

  <!-- Our Team -->
  <!-- <section class="py-16 px-6 max-w-6xl mx-auto" data-aos="fade-up">
    <h2 class="text-2xl font-bold text-blue-600 mb-4">Our Team</h2>
    <p class="text-gray-700 leading-relaxed mb-6">
      There are 40+ annotators with 10 reviewers and 5 team leaders. We have 2 dedicated project managers.
    </p>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white p-4 rounded-lg shadow text-center">
        <img src="image/salman.png" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4 shadow">
        <h3 class="text-blue-600 font-semibold">Salman Rahman</h3>
        <p class="text-sm text-gray-600">Lead Project Manager</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow text-center">
        <img src="team2.jpg" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4 shadow">
        <h3 class="text-blue-600 font-semibold">Anika Sultana</h3>
        <p class="text-sm text-gray-600">Quality Assurance Lead</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow text-center">
        <img src="image/shahin.png" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4 shadow">
        <h3 class="text-blue-600 font-semibold">Tanvir Hossain</h3>
        <p class="text-sm text-gray-600">Data Annotation Specialist</p>
      </div>
    </div>
  </section> -->

  <!-- Our Services -->
  <section class="py-16 px-6 max-w-6xl mx-auto bg-white rounded-lg shadow" data-aos="fade-up">
    <h2 class="text-2xl font-bold text-blue-600 mb-6">Our Services</h2>
    <div class="grid md:grid-cols-2 gap-6">

      <div class="p-4 bg-blue-50 rounded-lg shadow">
        <h3 class="text-lg font-semibold text-blue-700 mb-2">Image Annotation</h3>
        <div class="text-sm text-blue-800 flex flex-wrap gap-2">
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Bounding Boxes</span>
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Semantic Segmentation</span>
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Landmark Annotation</span>
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">More</span>
        </div>
      </div>
      <div class="p-4 bg-blue-50 rounded-lg shadow">
        <h3 class="text-lg font-semibold text-blue-700 mb-2">Text Annotation</h3>
        <div class="text-sm text-blue-800 flex flex-wrap gap-2">
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Named Entity Recognitionv</span>
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Sentiment Analysis</span>
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Text Classification</span>

        </div>
      </div>
      <div class="p-4 bg-blue-50 rounded-lg shadow">
        <h3 class="text-lg font-semibold text-blue-700 mb-2">Video Annotation</h3>
        <div class="text-sm text-blue-800 flex flex-wrap gap-2">
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Object Tracking</span>
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Activity Recognition</span>
          <span class="bg-white px-2 py-1 rounded-full shadow text-xs">Frame Labeling</span>

        </div>
      </div>
    </div>
  </section>
  <!-- Image Section -->
  <section class="py-20 bg-blue-50" id="gallery">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-10" data-aos="fade-up">Image Annotation</h2>
      <div class="grid md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">

        <div class="overflow-hidden rounded-lg shadow-lg">
          <img src="images/project1.jpg" alt="Project 1" class="w-full h-64 object-cover hover:scale-105 transition duration-300">
        </div>

        <div class="overflow-hidden rounded-lg shadow-lg">
          <img src="images/project2.jpg" alt="Project 2" class="w-full h-64 object-cover hover:scale-105 transition duration-300">
        </div>

        <div class="overflow-hidden rounded-lg shadow-lg">
          <img src="images/project3.jpg" alt="Project 3" class="w-full h-64 object-cover hover:scale-105 transition duration-300">
        </div>

      </div>
    </div>
  </section>
  <!-- Text Section -->
  <section class="py-20 bg-blue-50" id="text-annotation">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-10" data-aos="fade-up">Text Annotation</h2>
      <div class="grid md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">

        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:ring-2 hover:ring-blue-300 transition">
          <img src="images/project1.jpg" alt="NER Annotation" class="w-full h-56 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-600 mb-1">Named Entity Recognition (NER)</h3>
            <p class="text-gray-600 text-sm">Identify entities like names, dates, and organizations within text data.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:ring-2 hover:ring-blue-300 transition">
          <img src="images/project2.jpg" alt="Sentiment Analysis" class="w-full h-56 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-600 mb-1">Sentiment Analysis</h3>
            <p class="text-gray-600 text-sm">Label customer feedback or reviews as positive, negative, or neutral.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:ring-2 hover:ring-blue-300 transition">
          <img src="images/project3.jpg" alt="Intent Detection" class="w-full h-56 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-600 mb-1">Intent Detection</h3>
            <p class="text-gray-600 text-sm">Classify user inputs to understand the intent in chatbot or support systems.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Video Section -->
  <section class="py-20 bg-blue-50" id="video-annotation">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-10" data-aos="fade-up">Video Annotation</h2>

      <div class="grid md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">

        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:ring-2 hover:ring-blue-300 transition">
          <video class="w-full h-56 object-cover" controls poster="images/video1-thumb.jpg">
            <source src="videos/object-tracking.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-600 mb-1">Object Tracking</h3>
            <p class="text-gray-600 text-sm">Track objects across frames to train detection and motion models.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:ring-2 hover:ring-blue-300 transition">
          <video class="w-full h-56 object-cover" controls poster="images/video2-thumb.jpg">
            <source src="videos/action-recognition.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-600 mb-1">Action Recognition</h3>
            <p class="text-gray-600 text-sm">Identify human or object actions within video scenes.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:ring-2 hover:ring-blue-300 transition">
          <video class="w-full h-56 object-cover" controls poster="images/video3-thumb.jpg">
            <source src="videos/temporal-segmentation.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-600 mb-1">Temporal Segmentation</h3>
            <p class="text-gray-600 text-sm">Label and divide videos into segments based on scenes or actions.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- industries section  -->
  <section class="py-20 bg-blue-50" id="industries">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-10" data-aos="fade-up">Industries We Serve</h2>

      <div class="grid md:grid-cols-3 gap-6 text-left" data-aos="fade-up" data-aos-delay="100">

        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Healthcare & Life Sciences</h3>
          <p class="text-gray-600 text-sm">Enhancing medical AI with precise data for diagnostics, imaging, and research.</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Autonomous Vehicles & Transportation</h3>
          <p class="text-gray-600 text-sm">Supporting self-driving tech with annotated sensor and vision data.</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">E-commerce & Retail</h3>
          <p class="text-gray-600 text-sm">Improving recommendation systems, product tagging, and sentiment analysis.</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Robotics & Automation</h3>
          <p class="text-gray-600 text-sm">Training robots for vision-based navigation, sorting, and assembly.</p>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Agriculture</h3>
          <p class="text-gray-600 text-sm">Supporting precision farming through crop detection, soil monitoring, and analysis.</p>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Finance & Insurance</h3>
          <p class="text-gray-600 text-sm">Enabling fraud detection, document processing, and predictive analysis.</p>
        </div>

        <!-- Card 7 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Gaming & Entertainment</h3>
          <p class="text-gray-600 text-sm">Creating immersive experiences using annotated visuals and sound data.</p>
        </div>

        <!-- Card 8 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">NLP Applications</h3>
          <p class="text-gray-600 text-sm">Powering chatbots, translation engines, and intent recognition systems.</p>
        </div>

      </div>
    </div>
  </section>
  <!-- our process  section  -->
  <section class="py-20 bg-blue-50" id="our-process">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-10" data-aos="fade-up">Our Process</h2>

      <div class="grid md:grid-cols-3 gap-6 text-left" data-aos="fade-up" data-aos-delay="100">

        <!-- Step 1: Data Collection -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Data Collection</h3>
          <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
            <li>Secure and diverse data sources</li>
            <li>Client-provided datasets</li>
          </ul>
        </div>

        <!-- Step 2: Annotation -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Annotation</h3>
          <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
            <li>Expert human annotators</li>
            <li>Consistent and accurate labeling</li>
          </ul>
        </div>

        <!-- Step 3: Quality Control -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Quality Control</h3>
          <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
            <li>Multi-level verification</li>
            <li>Iterative feedback loop</li>
          </ul>
        </div>

      </div>
    </div>
  </section>
  <!-- security section  -->
  <section class="py-20 bg-blue-50" id="data-security">
    <div class="max-w-3xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-10" data-aos="fade-up">Data Security</h2>

      <div class="bg-white rounded-xl shadow-lg p-6 text-left hover:ring-2 hover:ring-blue-300 transition" data-aos="fade-up" data-aos-delay="100">
        <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
          <li><strong>Strict data privacy measures</strong> to ensure client trust and compliance.</li>
          <li><strong>Confidentiality agreements</strong> signed by all team members and partners.</li>
          <li><strong>Secure data transfer and storage</strong> using encryption and access control.</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- solution section    -->
  <section class="py-20 bg-blue-50" id="why-choose-us">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-10" data-aos="fade-up">Why Choose Marveit Solution?</h2>

      <div class="grid md:grid-cols-2 gap-6 text-left" data-aos="fade-up" data-aos-delay="100">

        <!-- Point 1 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Highly Skilled Annotators</h3>
          <p class="text-gray-600 text-sm">Our team comprises skilled annotators with expertise in various domains, ensuring accurate and consistent annotations.</p>
        </div>

        <!-- Point 2 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Data Security & Confidentiality</h3>
          <p class="text-gray-600 text-sm">We prioritize data security and implement robust measures to protect our clients' sensitive information.</p>
        </div>

        <!-- Point 3 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Scalable Solutions</h3>
          <p class="text-gray-600 text-sm">Whether it's a small project or a large-scale annotation task, we have the resources and infrastructure to handle projects of any size.</p>
        </div>

        <!-- Point 4 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Quality Assurance</h3>
          <p class="text-gray-600 text-sm">Our stringent quality control processes guarantee reliable annotations, meeting the highest industry standards.</p>
        </div>

        <!-- Point 5 -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:ring-2 hover:ring-blue-300 transition">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Customized Solutions</h3>
          <p class="text-gray-600 text-sm">We understand that every project is unique, and we tailor our annotation services to suit each client's specific requirements.</p>
        </div>

      </div>
    </div>
  </section>
  <!-- platform section  -->
  <section class="bg-white py-12 px-6 lg:px-24" id="annotation-platforms">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-6">🛠️ Annotation Platforms We Support</h2>
      <p class="text-gray-600 mb-10">
        We utilize a range of industry-standard annotation tools to ensure quality, flexibility, and seamless workflow integration.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-blue-50 rounded-xl p-6 shadow">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">CVAT</h3>
          <p class="text-gray-600 text-sm">Open-source and customizable. Perfect for video and image annotations.</p>
        </div>

        <div class="bg-green-50 rounded-xl p-6 shadow">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Supervisely</h3>
          <p class="text-gray-600 text-sm">All-in-one platform with advanced visualization and automation tools.</p>
        </div>

        <div class="bg-yellow-50 rounded-xl p-6 shadow">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">LabelMe</h3>
          <p class="text-gray-600 text-sm">Lightweight tool ideal for quick polygonal annotations.</p>
        </div>

        <div class="bg-purple-50 rounded-xl p-6 shadow">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">SuperAnnotate</h3>
          <p class="text-gray-600 text-sm">Enterprise-ready platform with powerful features and quality control.</p>
        </div>
      </div>

      <div class="mt-10">
        <p class="text-md text-gray-700 font-medium">
          🔹 Have a preferred tool? We’re flexible! We also support any annotation platforms provided by our clients.
        </p>
      </div>
    </div>
  </section>











  <!-- Footer -->
  <footer class="text-center py-6 text-gray-600">
    &copy; 2025 Marveit Solution. All rights reserved.
  </footer>

  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>