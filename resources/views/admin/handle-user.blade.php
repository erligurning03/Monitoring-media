@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<!-- Link Font Awesome dari CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
   
</style>
@endsection

@section('content')

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
                    <button class="delete-button" onclick="alert('Are you sure you want to delete Erli Gurning?')"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </table>
    </div>

    <!-- The Modal untuk handle user -->
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
                <button type="submit" class="save-button">
                    <i class="fas fa-save"></i> Save
                </button>
            </form>   
        </div>
    </div>
    <!-- end of The Modal untuk handle user -->

@endsection

@section('js')

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

@endsection
