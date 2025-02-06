@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="max-w-7xl mx-auto py-10 px-6">
    <h2 class="text-4xl font-bold text-pink-500 text-center mb-8">Franchise Support & Training</h2>
    
    <!-- Training Sections -->
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Step-by-Step Training Guides -->
        <div class="bg-white p-6 shadow-lg rounded-xl">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Step-by-Step Training Guides</h3>
            <p class="text-gray-600 mb-4">Access detailed step-by-step guides to help you run your franchise successfully.</p>
            <button onclick="openModal('trainingGuidesModal')" class="text-pink-500 font-bold hover:underline">View Training Guides →</button>
        </div>

        <!-- Video Tutorials -->
        <div class="bg-white p-6 shadow-lg rounded-xl">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Video Tutorials</h3>
            <p class="text-gray-600 mb-4">Watch expert-led training videos covering all essential aspects of franchise management.</p>
            <button onclick="openModal('videoTutorialsModal')" class="text-pink-500 font-bold hover:underline">Watch Videos →</button>
        </div>
    </div>
    
    <!-- Support Options -->
    <div class="mt-12 grid md:grid-cols-3 gap-8">
        <!-- FAQs & Help Center -->
        <div class="bg-white p-6 shadow-lg rounded-xl text-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">FAQs & Help Center</h3>
            <p class="text-gray-600 mb-4">Find answers to common questions and troubleshooting tips.</p>
            <button onclick="openModal('faqModal')" class="text-pink-500 font-bold hover:underline">Visit Help Center →</button>
        </div>

        <!-- Live Chat Support -->
        <div class="bg-white p-6 shadow-lg rounded-xl text-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Live Chat Support</h3>
            <p class="text-gray-600 mb-4">Get instant help from our support team through live chat.</p>
            <button onclick="openModal('liveChatModal')" class="text-pink-500 font-bold hover:underline">Start Chat →</button>
        </div>

        <!-- Phone & Email Support -->
        <div class="bg-white p-6 shadow-lg rounded-xl text-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Phone & Email Support</h3>
            <p class="text-gray-600 mb-4">Contact us via phone or email for dedicated franchise assistance.</p>
            <button onclick="openModal('contactSupportModal')" class="text-pink-500 font-bold hover:underline">Contact Us →</button>
        </div>
    </div>
    
    <!-- Community & Forums -->
    <div class="mt-12 bg-white p-6 shadow-lg rounded-xl">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Franchise Community & Discussion Forums</h3>
        <p class="text-gray-600 mb-4">Join our community of franchise owners to share experiences, ask questions, and network.</p>
        <button onclick="openModal('communityModal')" class="text-pink-500 font-bold hover:underline">Join the Community →</button>
    </div>
</div>

<!-- Modals for Each Feature -->
<!-- Training Guides Modal -->
<div id="trainingGuidesModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal('trainingGuidesModal')">
    <div class="bg-white p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <h3 class="text-2xl font-bold text-pink-500 mb-6">Step-by-Step Training Guides</h3>
        <p class="text-gray-700 mb-6">Here are the detailed training guides to help you manage your franchise effectively:</p>
        <div class="space-y-4">
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Guide 1: Setting Up Your Franchise</h4>
                <p class="text-gray-600 mb-2">Learn how to set up your franchise from scratch.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Read Guide →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Guide 2: Daily Operations</h4>
                <p class="text-gray-600 mb-2">Understand the daily operations of your franchise.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Read Guide →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Guide 3: Marketing Strategies</h4>
                <p class="text-gray-600 mb-2">Discover effective marketing strategies for your franchise.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Read Guide →</a>
            </div>
        </div>
        <button onclick="closeModal('trainingGuidesModal')" class="mt-6 bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600">Close</button>
    </div>
</div>

<!-- Video Tutorials Modal -->
<div id="videoTutorialsModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal('videoTutorialsModal')">
    <div class="bg-white p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <h3 class="text-2xl font-bold text-pink-500 mb-6">Video Tutorials</h3>
        <p class="text-gray-700 mb-6">Watch these expert-led videos to learn more about franchise management:</p>
        <div class="space-y-4">
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Video 1: Introduction to Franchise Management</h4>
                <p class="text-gray-600 mb-2">Get started with the basics of franchise management.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Watch Video →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Video 2: Financial Planning for Franchises</h4>
                <p class="text-gray-600 mb-2">Learn how to manage finances for your franchise.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Watch Video →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Video 3: Customer Service Best Practices</h4>
                <p class="text-gray-600 mb-2">Improve customer satisfaction with these tips.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Watch Video →</a>
            </div>
        </div>
        <button onclick="closeModal('videoTutorialsModal')" class="mt-6 bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600">Close</button>
    </div>
</div>

<!-- FAQs Modal -->
<div id="faqModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal('faqModal')">
    <div class="bg-white p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <h3 class="text-2xl font-bold text-pink-500 mb-6">FAQs & Help Center</h3>
        <p class="text-gray-700 mb-6">Here are some frequently asked questions:</p>
        <div class="space-y-4">
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Q: How do I set up my franchise?</h4>
                <p class="text-gray-600 mb-2">Follow our step-by-step guide to set up your franchise.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Read Answer →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Q: What are the best marketing strategies?</h4>
                <p class="text-gray-600 mb-2">Explore our marketing guide for effective strategies.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Read Answer →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Q: How can I improve customer satisfaction?</h4>
                <p class="text-gray-600 mb-2">Check out our customer service best practices.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Read Answer →</a>
            </div>
        </div>
        <button onclick="closeModal('faqModal')" class="mt-6 bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600">Close</button>
    </div>
</div>

<!-- Live Chat Modal -->
<div id="liveChatModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal('liveChatModal')">
    <div class="bg-white p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <h3 class="text-2xl font-bold text-pink-500 mb-6">Live Chat Support</h3>
        <p class="text-gray-700 mb-6">Our support team is available 24/7 to assist you. Click below to start a live chat:</p>
        <button class="bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600">Start Chat</button>
        <button onclick="closeModal('liveChatModal')" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 ml-4">Close</button>
    </div>
</div>

<!-- Contact Support Modal -->
<div id="contactSupportModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal('contactSupportModal')">
    <div class="bg-white p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <h3 class="text-2xl font-bold text-pink-500 mb-6">Phone & Email Support</h3>
        <p class="text-gray-700 mb-6">Contact us for dedicated franchise assistance:</p>
        <div class="space-y-4">
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Phone Support</h4>
                <p class="text-gray-600 mb-2">Call us at: <a href="tel:+18001234567" class="text-pink-500 font-bold hover:underline">+1-800-123-4567</a></p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Email Support</h4>
                <p class="text-gray-600 mb-2">Email us at: <a href="mailto:support@franchise.com" class="text-pink-500 font-bold hover:underline">support@franchise.com</a></p>
            </div>
        </div>
        <button onclick="closeModal('contactSupportModal')" class="mt-6 bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600">Close</button>
    </div>
</div>

<!-- Community Modal -->
<div id="communityModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal('communityModal')">
    <div class="bg-white p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <h3 class="text-2xl font-bold text-pink-500 mb-6">Franchise Community & Discussion Forums</h3>
        <p class="text-gray-700 mb-6">Join our community to connect with other franchise owners:</p>
        <div class="space-y-4">
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Share Experiences</h4>
                <p class="text-gray-600 mb-2">Connect with other franchise owners and share your experiences.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Join Now →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Ask Questions</h4>
                <p class="text-gray-600 mb-2">Get answers to your questions from industry experts.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Ask Now →</a>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Network</h4>
                <p class="text-gray-600 mb-2">Expand your network and grow your franchise.</p>
                <a href="#" class="text-pink-500 font-bold hover:underline">Connect Now →</a>
            </div>
        </div>
        <button onclick="closeModal('communityModal')" class="mt-6 bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600">Close</button>
    </div>
</div>

<script>
    // Function to open modal
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    // Function to close modal
    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }
</script>
@endsection