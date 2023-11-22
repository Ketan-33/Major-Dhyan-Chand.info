@extends('layouts.app')

@section('appContents')
    <div class="relative p-4 bg-cover bg-center bg-fixed" style="background-image: url('images/bg.jpg');">
        <div class="relative z-10 content w-full max-w-screen-xl mx-auto mt-32 backdrop-blur-md">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">Major Dhyan Chand's Awards</h2>
                <p>Explore the remarkable achievements and honors of the legendary field hockey player.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                <!-- Award 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center flex flex-col items-center justify-center p-4 transition-transform transform hover:scale-110">
                    <img src="images/award1.jpeg" alt="Award 1" class="w-80 h-80 object-cover rounded-lg">
                    <div class="p-4">
                        <h3 class="text-3xl font-semibold mb-2">Olympic Gold Medal 1928</h3>
                        <p>Major Dhyan Chand won his first Olympic gold medal in Amsterdam in 1928. This prestigious award marked the beginning of his illustrious career and showcased his exceptional skills on the field.</p>
                    </div>
                </div>

                <!-- Award 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center flex flex-col items-center justify-center p-4 transition-transform transform hover:scale-110">
                    <img src="images/award2.jpeg" alt="Award 2" class="w-90 h-80 object-cover rounded-lg">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Olympic Gold Medal 1932</h3>
                        <p>His second Olympic gold medal came in Los Angeles in 1932. Major Dhyan Chand's outstanding performance and dedication to the sport were once again recognized on the international stage.</p>
                    </div>
                </div>

                <!-- Award 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center flex flex-col items-center justify-center p-4 transition-transform transform hover:scale-110">
                    <img src="images/award3.jpg" alt="Award 3" class="w-90 h-80 object-cover rounded-lg">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Olympic Gold Medal 1936</h3>
                        <p>Major Dhyan Chand secured his third Olympic gold medal in Berlin in 1936. This remarkable achievement solidified his legacy as one of the greatest field hockey players in history.</p>
                    </div>
                </div>

                <!-- Award 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center flex flex-col items-center justify-center p-4 transition-transform transform hover:scale-110">
                    <img src="images/award4.jpg" alt="Award 4" class="w-80 h-75 object-cover rounded-lg">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Padma Bhushan</h3>
                        <p>He was honored with the Padma Bhushan, a prestigious civilian award in India, in 1956. Major Dhyan Chand's contributions to the sport and his exemplary sportsmanship earned him this esteemed recognition.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="absolute inset-0 bg-white opacity-40"></div>
    </div>
@endsection
