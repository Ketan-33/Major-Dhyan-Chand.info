@extends('layouts.app')

@section('appContents')
    <div class="body">
        <div class="content">
            <img src="images/image.png" alt="image" class="center-image">
            <div class="info">
                <div class="heading">
                    <h1>Welcome to the Official Major Dhyan Chand Website</h1>
                </div>
                <p>This website is dedicated to celebrating the life and achievements of Major Dhyan Chand, one of the greatest field hockey players of all time.</p>
                <p>Explore the various sections to learn more about his incredible journey and legacy.</p>
            </div>
        </div>
    </div>

    <style>
        body {
            margin: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #333;
        }

        .body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            background-color: #bebebe
        }

        .content {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            max-width: 100%;
            padding: 30px
        }

        .center-image {
            width:flex;
            max-width: 400px;
            height:flex;
            max-height: 700px;
            object-fit: cover;
        }

        .info {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            font-size:20px
        }

        .heading {
            padding: 20px;
            font-size: 34px;
            font-weight: bold;
            /* color:rgb(96, 106, 191) */
        }

        @media (max-width: 680px) {

            .content {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
@endsection
