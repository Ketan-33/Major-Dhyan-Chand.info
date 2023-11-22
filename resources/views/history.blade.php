@extends('layouts.app')

@section('appContents')
    <div class="body bg-gray-300 min-h-screen p-4 bg-cover bg-center bg-fixed flex flex-col relative" style="background-image: url('images/bg.jpg');">
        <div class="overlay absolute inset-0 bg-white opacity-40 z-0"></div>
        <div class="content flex-1 w-full max-w-screen-xl mx-auto mt-32 realtive inset-0 backdrop-blur z-10">

            <!-- Heading -->
            <h2 class="text-4xl font-bold text-center mb-4">Major Dhyan Chand's Timeline</h2>

            <!-- Timeline Sections -->
            <div class="timeline flex flex-col items-center  justify-center space-y-8 p-4">
                <!-- Section 1 -->
                <div class="section w-2/3 hover:scale-125">
                    <div class="year">1905</div>
                    <div class="content">
                        <h3 class="text-2xl font-semibold mb-2">Birth</h3>
                        <p>Major Dhyan Chand was born on August 29, 1905, in Allahabad, British India, as Dhyan Singh. His early life was marked by a passion for field hockey.</p>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="section w-2/3 hover:scale-125">
                    <div class="year">1928</div>
                    <div class="content">
                        <h3 class="text-2xl font-semibold mb-2">Olympic Debut</h3>
                        <p>Maj. Dhyan Chand made his Olympic debut in 1928 at the Amsterdam Olympics, securing his first gold medal. His extraordinary skills and goal-scoring ability earned him the nickname "The Wizard."</p>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="section w-2/3 hover:scale-125">
                    <div class="year">1932</div>
                    <div class="content">
                        <h3 class="text-2xl font-semibold mb-2">Olympic Glory</h3>
                        <p>Continuing his success, he won gold again in the 1932 Los Angeles Olympics. His exceptional performance on the field solidified his status as one of the greatest field hockey players.</p>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="section w-2/3 hover:scale-125">
                    <div class="year">1936</div>
                    <div class="content">
                        <h3 class="text-2xl font-semibold mb-2">Berlin Olympics</h3>
                        <p>Major Dhyan Chand's prowess reached new heights in the 1936 Berlin Olympics, where he led the Indian hockey team to its third consecutive gold medal.</p>
                    </div>
                </div>

                <!-- Section 5 -->
                <div class="section w-2/3 hover:scale-125">
                    <div class="year">1956</div>
                    <div class="content">
                        <h3 class="text-2xl font-semibold mb-2">Padma Bhushan</h3>
                        <p>In 1956, Major Dhyan Chand was honored with the Padma Bhushan, a prestigious civilian award in India, recognizing his significant contributions to the sport.</p>
                    </div>
                </div>

                <!-- Section 6 -->
                <div class="section w-2/3 hover:scale-125">
                    <div class="year">1979</div>
                    <div class="content">
                        <h3 class="text-2xl font-semibold mb-2">Legacy and Passing</h3>
                        <p>Major Dhyan Chand's legacy extends beyond the field, influencing generations of players. He passed away on December 3, 1979, leaving an indelible mark on Indian hockey.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
