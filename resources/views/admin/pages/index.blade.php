@extends('backend.layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg">
            <div class="p-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold">ChatGPT Chat</h2>
            </div>
            <div class="p-4 h-96 overflow-y-auto">
                <div class="space-y-4">
                    <!-- User Message -->
                    <div class="flex justify-end">
                        <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs">
                            Hello, how can I help you?
                        </div>
                    </div>
                    <!-- ChatGPT Message -->
                    <div class="flex justify-start">
                        <div class="bg-gray-200 p-3 rounded-lg max-w-xs">
                            Hi! I need some assistance with my project.
                        </div>
                    </div>
                    <!-- Add more messages here -->
                </div>
            </div>
            <div class="p-4 border-t border-gray-200">
                <form class="flex">
                    <input type="text"
                        class="flex-grow p-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Type your message...">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-r-lg">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
