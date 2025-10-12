<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <h3>Form Input dengan Validasi dan AJAX</h3>
    <form id="myForm" method="post" action="proses_validasi_ajax.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil" style="margin-top: 20px; color: green;"></div>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: "proses_validasi_ajax.php",
                        type: "POST",
                        data: $("#myForm").serialize(),
                        success: function (response) {
                            $("#hasil").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
