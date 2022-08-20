<div class="widget">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>



    <div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large"
                onclick="w3_close()">Close &times;</button>
        <a href="admin/teacher" class="w3-bar-item w3-button"><i style='font-size:24px' class='fas'>&#xf51c;</i> Teachers</a>
        <a href="admin/student" class="w3-bar-item w3-button"><i style='font-size:24px' class='fas'>&#xf501;</i>
             Students</a>
        <a href="{{route('admin.subject')}}" class="w3-bar-item w3-button"><i style='font-size:24px' class='fas'>&#xf518;</i>
            Subjects</a>
        <a href="admin/question" class="w3-bar-item w3-button"><i style='font-size:24px' class='far'>&#xf059;</i>
            Questions</a>
        <a href="admin/answer" class="w3-bar-item w3-button"><i style='font-size:24px' class='far'>&#xf044;</i>
             Answers</a>
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
