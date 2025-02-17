@extends('customer.partials.customer_app')

@section('customer_content')
<div class="p-5 md:p-6 bg-gray-50 min-h-screen py-14">
    <!-- Main Chat Container -->
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
        <!-- Chat Header -->
        <div class="bg-gradient-to-r from-purple-600 to-blue-500 px-4 py-6 sm:p-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-robot text-white text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg sm:text-2xl font-bold text-white">Instant Help Center</h2>
                        <div class="flex items-center space-x-2 mt-1">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-sm text-white/90">AI Assistant • Online Now</span>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <button class="p-2 hover:bg-white/10 rounded-full transition">
                        <i class="fas fa-times text-white"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Chat Body -->
        <div class="grid grid-cols-1 xl:grid-cols-4 h-[600px]">
            <!-- Chat Messages Section -->
            <div class="xl:col-span-3 border-r p-4 flex flex-col">
                <!-- Messages Container -->
                <div class="flex-1 overflow-y-auto space-y-4 pr-2" id="chat-messages">
                    <!-- Bot Message -->
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-robot text-white text-sm"></i>
                        </div>
                        <div class="max-w-[75%] bg-gray-100 p-4 rounded-2xl">
                            <p class="text-gray-700 text-sm">नमस्ते! मैं आपकी कैसे सहायता कर सकता हूँ? 🍦</p>
                            <span class="text-xs text-gray-500 mt-1 block">2:34 PM</span>
                        </div>
                    </div>

                    <!-- User Message -->
                    <div class="flex items-start gap-3 justify-end">
                        <div class="max-w-[75%] bg-purple-600 text-white p-4 rounded-2xl">
                            <p class="text-sm">मेरा आर्डर #ICE3456 का स्टेटस चेक करें</p>
                            <span class="text-xs text-purple-200 mt-1 block">2:35 PM</span>
                        </div>
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                    </div>
                </div>

                <!-- Input Area -->
                <div class="mt-4 p-2 border-t">
                    <div class="flex items-center gap-3">
                        <input type="text" 
                               id="chat-input"
                               placeholder="Type your message..."
                               class="flex-1 p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <button class="p-3 bg-purple-600 text-white rounded-xl hover:bg-purple-700 transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <button class="p-3 text-purple-600 hover:bg-gray-100 rounded-xl transition">
                            <i class="fas fa-paperclip"></i>
                        </button>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Press Enter to send</p>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="hidden xl:block p-4 bg-gray-50">
                <div class="space-y-4">
                    <!-- Quick Actions -->
                    <div class="bg-white p-4 rounded-xl shadow-sm">
                        <h3 class="font-bold text-lg mb-3">Quick Actions</h3>
                        <ul class="space-y-2">
                            <li class="text-sm flex items-center gap-2 p-2 hover:bg-gray-100 rounded-lg cursor-pointer">
                                <i class="fas fa-shipping-fast text-purple-600"></i>
                                <span>Track Order</span>
                            </li>
                            <li class="text-sm flex items-center gap-2 p-2 hover:bg-gray-100 rounded-lg cursor-pointer">
                                <i class="fas fa-undo-alt text-purple-600"></i>
                                <span>Return Request</span>
                            </li>
                            <li class="text-sm flex items-center gap-2 p-2 hover:bg-gray-100 rounded-lg cursor-pointer">
                                <i class="fas fa-file-invoice-dollar text-purple-600"></i>
                                <span>Payment Issues</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Chat History -->
                    <div class="bg-white p-4 rounded-xl shadow-sm">
                        <h3 class="font-bold text-lg mb-3">Recent Chats</h3>
                        <div class="space-y-2">
                            <div class="cursor-pointer flex items-center gap-3 p-2 bg-purple-50 rounded-lg">
                                <div class="min-w-8 min-h-8 bg-purple-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-robot text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-nowrap text-ellipsis overflow-hidden w-28">Order Delivery Query</p>
                                    <p class="text-xs text-gray-500">Yesterday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');
    
    // Handle message sending
    const sendMessage = () => {
        const message = chatInput.value.trim();
        if(message) {
            // Add user message
            const userDiv = document.createElement('div');
            userDiv.className = 'flex items-start gap-3 justify-end';
            userDiv.innerHTML = `
                <div class="max-w-[70%] bg-purple-600 text-white p-4 rounded-2xl">
                    <p>${message}</p>
                    <span class="text-xs text-purple-200 mt-1 block">${new Date().toLocaleTimeString()}</span>
                </div>
                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white text-sm"></i>
                </div>
            `;
            chatMessages.appendChild(userDiv);
            
            // Simulate bot response
            setTimeout(() => {
                const botDiv = document.createElement('div');
                botDiv.className = 'flex items-start gap-3';
                botDiv.innerHTML = `
                    <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-robot text-white text-sm"></i>
                    </div>
                    <div class="max-w-[70%] bg-gray-100 p-4 rounded-2xl">
                        <p class="text-gray-700">Thank you for your message! We'll respond shortly.</p>
                        <span class="text-xs text-gray-500 mt-1 block">${new Date().toLocaleTimeString()}</span>
                    </div>
                `;
                chatMessages.appendChild(botDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }, 1000);

            chatInput.value = '';
        }
    }

    // Event Listeners
    document.querySelector('button').addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', (e) => {
        if(e.key === 'Enter') sendMessage();
    });
});
</script>
@endsection