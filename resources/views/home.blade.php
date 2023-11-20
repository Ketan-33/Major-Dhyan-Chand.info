@extends('layouts.app')

@section('appContents')
    <div class="body bg-gray-300 min-h-screen flex flex-col items-center p-4">
        <div class="content flex flex-col md:flex-row items-center justify-between w-full max-w-screen-xl px-4 md:px-8">
            <img src="images/image.png" alt="image" class="center-image w-full max-w-md h-auto md:max-h-700 object-cover mb-4 md:mb-0 shadow-lg transition-transform transform hover:scale-110">
            <div class="info text-center max-w-md mx-auto md:text-left text-lg md:text-xl">
                <div class="heading py-4 text-2xl md:text-3xl font-bold text-shadow-md">
                    <h1>Welcome to the Major Dhyan Chand Website</h1>
                </div>
                <p class="mt-4">This website is dedicated to celebrating the life and achievements of Major Dhyan Chand, one of the greatest field hockey players of all time.</p>
                <p class="mt-4">Explore the various sections to learn more about his incredible journey and legacy.</p>
            </div>
        </div>
    </div>
@endsection
