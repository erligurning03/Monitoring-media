@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2ebeb;
        }

        /* Common styles for buttons */
        button {
            color: white;
            border: none;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
            border-radius: 4px;
        }

        /* Styles for edit button */
        .edit-button {
            background-color: #FFC107;
        }

        .edit-button:hover {
            background-color: #e0a800;
        }

        /* Styles for delete button */
        .delete-button {
            background-color: #DC3545;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        /* Styles for save button */
        .save-button {
            background-color: #007BFF; /* Blue background */
        }

        .save-button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            max-width: 800px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-content input[type=text],
        .modal-content select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="card">
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
                    <button class="edit-button" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
                    <button class="delete-button" onclick="alert('Are you sure you want to delete Fani Windari?')"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Erli Gurning</td>
                <td>Operator</td>
                <td>
                    <button class="edit-button" onclick="openModal('Erli Gurning', 'Operator')"><i class="fas fa-edit"></i></button>
                    <button class="delete-button" onclick="alert('Are you sure you want to delete Erli Gurning')"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </table>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <form id="editForm">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="role">Role:</label><br>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                </select><br><br>
                <button type="submit" class="save-button">Save</button>
            </form>
        </div>
    </div>

    <script>
        function openModal(username, role) {
            document.getElementById('username').value = username;
            document.getElementById('role').value = role;
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        // Close the modal when the user clicks anywhere outside of the modal
        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                closeModal();
            }
        }

        // Handle form submission
        document.getElementById('editForm').onsubmit = function(event) {
            event.preventDefault();
            // Perform your save logic here
            alert('Form submitted for: ' + document.getElementById('username').value + ' with role: ' + document.getElementById('role').value);
            closeModal();
        }
    </script>
</body>
</html>

@endsection
