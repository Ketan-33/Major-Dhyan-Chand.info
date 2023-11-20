@extends('layouts.app')

@section('appContents')
    <div class="body bg-gray-300 min-h-screen p-4">
        <div class="content w-full max-w-screen-xl mx-auto">

            <!-- History Overview -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold">History of Major Dhyan Chand</h2>
                <p class="text-gray-600">Explore the life and career of the legendary field hockey player.</p>
            </div>

            <!-- Timeline Section -->
            <div class="mb-8">
                <h3 class="text-2xl font-bold mb-4">Timeline</h3>
                <!-- Use a timeline package or create a simple list to display key events in Major Dhyan Chand's life and career. -->
                <ul class="list-disc list-inside">
                    <li>Year 1: Event 1</li>
                    <li>Year 2: Event 2</li>
                    <!-- Add more events as needed -->
                </ul>
            </div>

            <!-- Achievements Section -->
            <div class="mb-8">
                <h3 class="text-2xl font-bold mb-4">Achievements</h3>
                <!-- List Major Dhyan Chand's notable achievements and awards. -->
                <ul class="list-disc list-inside">
                    <li>Year 1: Achievement 1</li>
                    <li>Year 2: Achievement 2</li>
                    <!-- Add more achievements as needed -->
                </ul>
            </div>

            <!-- Legacy Section -->
            <div>
                <h3 class="text-2xl font-bold mb-4">Legacy</h3>
                <!-- Describe the legacy and impact of Major Dhyan Chand on field hockey and sports in general. -->
                <p>Major Dhyan Chand's legacy extends beyond his impressive records. Explore how his contributions have influenced the world of field hockey and sportsmanship.</p>
            </div>

        </div>
    </div>
@endsection
