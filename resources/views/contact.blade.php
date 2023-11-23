@extends('layouts.app')

@section('appContents')
    <div class="body bg-gray-300 min-h-screen p-4 bg-cover bg-center bg-fixed flex flex-col relative" style="background-image: url('images/bg.jpg');">
        <div class="overlay absolute inset-0 bg-white opacity-40 z-0"></div>
        <div class="content flex-1 w-full max-w-screen-xl mx-auto mt-32 realtive inset-0 backdrop-blur z-10">

            <h2 class="text-3xl font-semibold mb-4">In Memory of Major Dhyan Chand</h2>
            <p class=" mb-6">We remember and honor the legendary Major Dhyan Chand for his exceptional contributions to field hockey and his enduring legacy.</p>

            <div class="mb-8">
                <h3 class="text-xl font-semibold mb-2">Share Your Tribute</h3>
                <form action="#" method="post" class="space-y-4">

                    <label for="tribute" class="block text-sm font-medium text-gray-700">Your Message:</label>
                    <textarea id="tribute" name="tribute" rows="4" class="w-full border p-2 rounded-md"></textarea>

                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Submit
                        Tribute</button>
                </form>
            </div>


            <div class="mb-8">
                <h3 class="text-xl font-semibold mb-2">Memorial Quotes</h3>
                <blockquote class="italic text-2xl font-bold">"The true measure of any athlete is not just in the victories on the field but in the inspiration left for generations to come."</blockquote>
            </div>

            <hr>
            <div>
                <h3 class="text-xl font-semibold mb-2 text-center">Connect on Social Media with the organizations and NGO's working under his name</h3>
                <ul class="flex space-x-4 justify-center">
                    <li><a href="#" class="text-blue-500 hover:underline">Twitter</a></li>
                    <li><a href="#" class="text-blue-500 hover:underline">Facebook</a></li>
                    <li><a href="#" class="text-blue-500 hover:underline">Email</a></li>
                    <li><a href="#" class="text-blue-500 hover:underline">NGO's</a></li>
                </ul>
            </div>
        </div>
    </div>
        <style>
            .contact{
            color: #fbbf24;
            text-decoration: underline #fbbf24;
        }

        </style>
        </div>
    </div>

@endsection
