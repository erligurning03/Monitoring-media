@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
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

        button {
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
            border-radius: 4px;
        }

        .blue-button {
            background-color: #007BFF;
        }

        .blue-button:hover {
            background-color: #0056b3;
        }

        .green-button {
            background-color: #28a745;
        }

        .green-button:hover {
            background-color: #28a745;
        }

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
        .modal-content input[type=email],
        .modal-content input[type=password],
        .modal-content select,
        .modal-content input[type=file] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .save-button {
            background-color: #326CFF;
        }

        .save-button:hover {
            background-color: #1474AE;
        }
    </style>
</head>
<body>
    <button class="blue-button" onclick="openAddUserModal()">Tambah Pengguna</button>
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
                    <button class="green-button">Handle</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Erli Gurning</td>
                <td>Operator</td>
                <td>
                    <button class="green-button">Handle</button>
                </td>
            </tr>
        </table>
    </div>

    <!-- The Add User Modal -->
    <div id="addUserModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeAddUserModal()">&times;</span>
            <form id="addUserForm">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="nidn">NIDN:</label><br>
                <input type="text" id="nidn" name="nidn" required><br>
                <label for="role">Role:</label><br>
                <select id="role" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                </select><br><br>
                <label for="photo">Photo:</label><br>
                <input type="file" id="photo" name="photo" accept="image/*"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <button type="submit" class="save-button">Save</button>
            </form>
        </div>
    </div>

    <script>
        function openAddUserModal() {
            document.getElementById('addUserModal').style.display = "block";
        }

        function closeAddUserModal() {
            document.getElementById('addUserModal').style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('addUserModal')) {
                closeAddUserModal();
            }
        }

        document.getElementById('addUserForm').onsubmit = function(event) {
            event.preventDefault();
            alert('Data berhasil diinput untuk: ' + document.getElementById('name').value);
            closeAddUserModal();
        }
    </script>
</body>
</html>

@endsection
