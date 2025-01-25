@extends('layout.main')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <style>
       .form-container {
           max-width: 600px;
           margin: 0 auto;
           padding: 20px;
           border: 1px solid #ccc;
           border-radius: 10px;
           background-color: #f9f9f9;
       }

       .form-container div {
           margin-bottom: 15px;
       }

       .form-container label {
           display: block;
           margin-bottom: 5px;
           font-weight: bold;
       }

       .form-container input[type="text"],
       .form-container textarea {
           width: 100%;
           padding: 10px;
           border: 1px solid #ccc;
           border-radius: 5px;
       }

       .form-container input[type="submit"] {
           background-color: #4CAF50;
           color: white;
           padding: 10px 20px;
           border: none;
           border-radius: 5px;
           cursor: pointer;
       }

       .form-container input[type="submit"]:hover {
           background-color: #45a049;
       }
   </style>

   <div class="form-container">
       <form action="{{ route('post.store') }}" method="POST">
           @csrf
           <div>
               <label for="title">Title:</label>
               <input type="text" id="title" name="title" required>
           </div>
           <div>
               <label for="content">Content:</label>
               <textarea id="content" name="content" rows="4" cols="50" required></textarea>
           </div>
           <div>
               <label for="image">Image URL:</label>
               <input type="text" id="image" name="image" required>
           </div>
           <div>
               <input type="submit" value="Submit">
           </div>
       </form>
   </div>
@endsection