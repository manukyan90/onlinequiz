<div class="widget">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large"
                onclick="w3_close()">Close &times;</button>
        <a href="admin/teacher" class="w3-bar-item w3-button">Teachers</a>
        <a href="admin/student" class="w3-bar-item w3-button">Students</a>
        <a href="{{route('admin.subject')}}" class="w3-bar-item w3-button">Subjects</a>
        <a href="admin/question" class="w3-bar-item w3-button">Questions</a>
        <a href="admin/answer" class="w3-bar-item w3-button">Answers</a>
    </div>

    <div>
        <button class="w3-button w3-white w3-xlarge" onclick="w3_open()">&#9776;</button>
    </div>

    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

    </script>
</div>
