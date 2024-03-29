<?
include 'libs/load.php';
?>
<html>

<head>
    <title>
        Portfolio
    </title>
    <!-- ---Header------Start------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/assets/css/style.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ---Header------End------------ -->
</head>

<body>
    <!-- ---------navbar-------Start------- -->
    <?load_template('navbar');?>
     <!-- --------navbar----Hero------------- -->
    <!-- --------Start-----Hero------------- -->
    <?load_template('hero');?>
    <!-- --------End-----Hero------------- -->
    </div>
    <!-- -----------------about-------Start------- -->
    <?load_template('about');?>
    <!-- -----------------about-------End------- -->
    <!-- -----------------Skill-------Start------- -->
    <?load_template('skill');?>
    <!-- -----------------Skill-------End------- -->
    <br><br>
    <!-- -----------------resume-------Start------- -->
    <?load_template('resume');?>
    <!-- -----------------resume-------End------- -->
    <!-- -----------------resume-------Start------- -->
        <?load_template('contect');?>
    <!-- -----------------resume-------End------- -->
    <!-- -----------------resume-------Start------- -->
    <?load_template('footer');?>
    <!-- -----------------resume-------End------- --> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <!-- <script  src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script> -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="assets/js/App.js"></script>
            <script>
                $(document).ready(function () {
                    $('#copy-button-PhoneNO').click(function () {
                        navigator.clipboard.writeText('+919677803688');
                    });
                    $('#copy-button-mailID').click(function () {
                        navigator.clipboard.writeText('sadh.sh12@gmail.com');
                    });
                });
                // -------PHONE NUMBER-------------
                const toastTrigger1 = document.getElementById('copy-button-PhoneNO')
                const toastLiveExample1 = document.getElementById('liveToast')

                if (toastTrigger1) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample1)
                toastTrigger1.addEventListener('click', () => {
                    toastBootstrap.show()
                });
                }
                // -----Email ID---------------
                const toastTrigger2 = document.getElementById('copy-button-mailID')
                const toastLiveExample2 = document.getElementById('liveToast')

                if (toastTrigger2) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample2)
                toastTrigger2.addEventListener('click', () => {
                    toastBootstrap.show()
                });
                }
            </script>
</body>

</html>