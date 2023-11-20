@extends('layouts.app')

@section('appContents')
    <div class="body bg-gray-300 min-h-screen p-4">
        <div class="content w-full max-w-screen-xl mx-auto">

            <!-- Top Image and About Information -->
            <div class="flex items-center mb-8">
                <div class="flex-shrink-0 w-50 h-40 mr-4">
                    <img src="images/face.jpg" alt="Small Image" class="w-full h-full object-cover rounded-full">
                </div>
                <div>
                    <h2 class="text-3xl font-bold">Major Dhyan Chand</h2>
                    <p class="text-gray-600">One of the greatest field hockey players of all time.</p>
                </div>
            </div>

            <!-- About Information -->
            <div class="text-justify mb-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia in cupiditate atque sint! Fugit velit, dolores cupiditate nesciunt quasi autem accusamus voluptates culpa, debitis sunt eaque assumenda aspernatur molestias magnam.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium modi minus rem! Illum non officiis temporibus, omnis doloremque facilis qui eveniet. Nostrum vel nisi non dolore itaque, suscipit temporibus vero?</p>
            </div>

            <!-- Row of Small Images -->
            <div class="flex items-center justify-center space-x-4">
                <img src="{{ asset('images/image1.jpg') }}" alt="Image 1" class="w-20 h-20 object-cover rounded-md">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="w-20 h-20 object-cover rounded-md">
                <img src="{{ asset('images/image3.jpg') }}" alt="Image 3" class="w-20 h-20 object-cover rounded-md">
                <!-- Add more images as needed -->
            </div>

        </div>
    </div>
@endsection
