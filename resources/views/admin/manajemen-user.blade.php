@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection
@section('content')

    <button class="blue-button" onclick="openAddUserModal()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
            <!--! Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" fill="#ffffff"/>
        </svg>
        Tambah Pengguna
    </button>
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
