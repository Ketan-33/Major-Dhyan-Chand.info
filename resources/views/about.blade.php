@extends('layouts.app')

@section('appContents')
    <div class="body bg-gray-300 min-h-screen bg-cover bg-center  flex flex-col relative" style="background-image: url('images/bg.jpg');">
        <div class="overlay absolute inset-0 bg-white opacity-40 "></div>
        <div class="content flex-1 w-full max-w-screen-xl mx-auto mt-32 relative backdrop-blur">

            <!-- Top Image -->
            <div class="flex items-center mb-8">
                <div class="flex-shrink-0 w-1/3">
                    <img src="images/face.jpg" alt="Major Dhyan Chand" class="w-90 h-90 object-cover rounded-full">
                </div>
                <div class="w-2/3 pl-8">
                    <h2 class="text-4xl font-bold">About Major Dhyan Chand</h2><br>
                    <ul class="list-disc text-xl">
                        <li><b>Birth name:</b> Dhyan Singh</li>
                        <li><b>Nickname:</b> The Wizard</li>
                        <li><b>Born:</b> August 29, 1905</li>
                        <li><b>Place of Birth:</b> Allahabad,British India</li>
                        <li><b>Died:</b> 3 December 1979 (aged 74)</li>
                        <li><b>Service:</b> Indian British Army</li>
                        <li><b>Rank:</b> Mojor</li>
                        <!-- Add more specific information as needed -->
                    </ul>
                </div>
            </div>

            <!-- Three Sections Side by Side -->
            <div class="flex space-x-8 mb-8">
    <!-- Section 1 -->
    <div class="w-1/3 hover:scale-105">
        <a href="https://en.wikipedia.org/wiki/Dhyan_Chand#Early_career"><h3 class="text-2xl font-semibold mb-2">Early Life</h3></a>
        <p>Major Dhyan Chand, born on August 29, 1905, in Allahabad, India, showed an early passion for field hockey. Growing up, he honed his skills on the streets and quickly gained recognition for his exceptional talent.</p>
    </div>
    <!-- Section 2 -->
    <div class="w-1/3 hover:scale-105">
        <h3 class="text-2xl font-semibold mb-2">Olympic Glory</h3>
        <p>Maj. Dhyan Chand's journey to international fame began with the Amsterdam Olympics in 1928, where he secured his first Olympic gold medal. His dominance continued in subsequent Olympics, winning gold in Los Angeles (1932) and Berlin (1936).</p>
    </div>
    <!-- Section 3 -->
    <div class="w-1/3 hover:scale-105">
        <a href="https://en.wikipedia.org/wiki/Dhyan_Chand#Legacy"><h3 class="text-2xl font-semibold mb-2">Legacy and Honors</h3></a>
        <p>Major Dhyan Chand's impact on Indian hockey is immeasurable. His legacy extends beyond the field, influencing generations of players. In recognition of his contributions, he was posthumously awarded the Bharat Ratna, India's highest civilian honor, in 2014.</p>
    </div>
</div>

            <div class="flex items-center justify-center space-x-4 pb-4">
                <img src="{{ asset('images/image1.jpg') }}" alt="Image 1" class="w-20 h-20 object-cover rounded-md">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="w-20 h-20 object-cover rounded-md">
                <img src="{{ asset('images/image3.jpg') }}" alt="Image 3" class="w-20 h-20 object-cover rounded-md">
                <img src="{{ asset('images/image4.jpg') }}" alt="Image 4" class="w-20 h-20 object-cover rounded-md">
                <img src="{{ asset('images/image5.jpg') }}" alt="Image 5" class="w-20 h-20 object-cover rounded-md">
                <img src="{{ asset('images/image6.jpg') }}" alt="Image 6" class="w-20 h-20 object-cover rounded-md">
            </div>

        </div>
    </div>
@endsection
