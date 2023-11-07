<!DOCTYPE html>
<html>
    <head>
        <title>Student Management | Edit</title>
        <style>
            body{
                font-family:Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }
            h1{
                text-align: center;
            }
            form{
                width:300px;
                margin; 0 auto;
                background-color: #fff;
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 5px;
                box-shadow:0 0 10px rgba(0, 0, 0.2);

            }
            table{
                width: 100%;
            }
            table tr{
                margin-bottom: 10px;
            }
            td{
                padding: 5px;
                text-align: right;
            }
            input[type="text"]{
                width: 100%;
                padding: 5px;
            }

            input[type="submit"]{
                background-color: #007BFF;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }
            input[type="submit"]:hover{
                 background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <form action="/edit/{{ $data[0]->id }}" method="post">
           @csrf
           <h1>Edit Form</h1>
           <table>
              <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="{{
$data[0]->username }}" /></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{
$data[0]->email }}" /></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="{{
$data[0]->password }}" /></td>
              </tr>

              <tr>
                <td>Phone</td>
                <td><input type="tel" name="phone" value="{{
$data[0]->phone }}" /></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td><input type="text" name="gender" value="{{
$data[0]->gender }}" /></td>
              </tr>
              <tr>
                <td>Language</td>
                <td><input type="text" name="language" value="{{
$data[0]-> language}}" /></td>
              </tr>
              <tr>
                <td>Zipc</td>
                <td><input type="text" name="zipc" value="{{
$data[0]->zipc }}" /></td>
              </tr>
              <tr>
                <td>About</td>
                <td><input type="text" name="about"
value="{{ $data[0]->about }}" /></td>
              </tr>
              
