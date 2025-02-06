@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="min-h-screen py-10 px-5 md:px-10">
    <h2 class="text-3xl font-bold text-pink-500 mb-4 text-center">Customer Reviews & Feedback</h2>
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">

        <!-- Review List -->
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200 bg-white border rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-4 text-nowrap text-center">Customer</th>
                        <th class="py-3 px-4 text-nowrap text-center">Review</th>
                        <th class="py-3 px-4 text-nowrap text-center">Rating</th>
                        <th class="py-3 px-4 text-nowrap text-center">Status</th>
                        <th class="py-3 px-4 text-nowrap text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="reviewTable" class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="py-3 px-4 text-nowrap text-center">Amit Kumar</td>
                        <td class="py-3 px-4 text-nowrap text-center">Great taste and amazing quality!</td>
                        <td class="py-3 px-4 text-nowrap text-center">⭐⭐⭐⭐⭐</td>
                        <td class="py-3 px-4 text-nowrap text-center"><span class="status text-green-500">Approved</span></td>
                        <td class="py-3 px-4 text-nowrap">
                            <button onclick="showReplyBox(this)" title="Reply"><i class="ri-reply-line text-2xl text-pink-500"></i></button>
                            <button class="ml-3 text-pink-500" onclick="toggleStatus(this)">Toggle Status</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-nowrap text-center">Neha Sharma</td>
                        <td class="py-3 px-4 text-nowrap text-center">Loved the chocolate flavor!</td>
                        <td class="py-3 px-4 text-nowrap text-center">⭐⭐⭐⭐</td>
                        <td class="py-3 px-4 text-nowrap text-center"><span class="status text-yellow-500">Pending</span></td>
                        <td class="py-3 px-4 text-nowrap text-center">
                            <button onclick="showReplyBox(this)" title="Reply"><i class="ri-reply-line text-2xl text-pink-500"></i></button>
                            <button class="ml-3 text-pink-500" onclick="toggleStatus(this)">Toggle Status</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Reply Box -->
        <div id="replyBox" class="hidden mt-6 p-4 bg-gray-50 rounded-lg">
            <h3 class="text-lg font-semibold text-gray-700">Reply to Review</h3>
            <textarea id="replyText" class="w-full p-2 rounded-lg mt-2" placeholder="Write your response..."></textarea>
            <div class="flex justify-end mt-2">
                <button class="bg-pink-500 text-white px-4 py-2 rounded-lg" onclick="submitReply()">Send Reply</button>
            </div>
        </div>

    </div>
</div>

<script>
    function showReplyBox(button) {
        document.getElementById('replyBox').classList.remove('hidden');
    }

    function submitReply() {
        document.getElementById('replyBox').classList.add('hidden');
    }

    function toggleStatus(button) {
        let statusElem = button.closest("tr").querySelector(".status");
        if (statusElem.textContent === "Approved") {
            statusElem.textContent = "Pending";
            statusElem.classList.remove("text-green-500");
            statusElem.classList.add("text-yellow-500");
        } else {
            statusElem.textContent = "Approved";
            statusElem.classList.remove("text-yellow-500");
            statusElem.classList.add("text-green-500");
        }
    }

    // Drag-to-scroll functionality for table container
  const scrollContainer = document.getElementById('scrollContainer');
  let isDown = false;
  let startX;
  let scrollLeft;

  scrollContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    scrollContainer.classList.add('cursor-grabbing');
    startX = e.pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
    // Disable text selection during drag
    scrollContainer.classList.add('select-none');
  });
  scrollContainer.addEventListener('mouseleave', () => {
    isDown = false;
    scrollContainer.classList.remove('cursor-grabbing');
    scrollContainer.classList.remove('select-none');
  });
  scrollContainer.addEventListener('mouseup', () => {
    isDown = false;
    scrollContainer.classList.remove('cursor-grabbing');
    scrollContainer.classList.remove('select-none');
  });
  scrollContainer.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 2; // Adjust scroll speed as needed
    scrollContainer.scrollLeft = scrollLeft - walk;
  });
</script>
@endsection
