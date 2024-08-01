@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        .action-button {
            background-color: #000000; /* Black background */
            color: white; /* White text */
            border: none; /* Remove border */
            padding: 5px 10px; /* Add padding */
            text-align: center; /* Center text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Get inline block */
            font-size: 14px; /* Set font size */
            margin: 2px 1px; /* Add some margin */
            cursor: pointer; /* Pointer cursor on hover */
            border-radius: 4px; /* Rounded corners */
        }

        .action-button:hover {
            background-color: #333333; /* Darker grey on hover */
        }
        </style>
        </head>
        <body>
        <table>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Role</th>
            <th>Aksi</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Fani Windari</td>
            <td>Operator</td>
            <td>
                <button class="action-button" onclick="alert('Handle Fani Windari')">Handle</button>
            </td>
          </tr>
          
          <tr>
            <td>2</td>
            <td>Erli Gurning</td>
            <td>Operator</td>
            <td>
                <button class="action-button" onclick="alert('Handle Fani Windari')">Handle</button>
            </td>
          </tr>
         
        </table>


</body>
</html>

@endsection