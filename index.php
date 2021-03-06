<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a5ab502b29.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <section class="form section">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an arror msg</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                
                    <div class="field input">
                        <label">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label">Email Address</label>
                    <input type="text" placeholder="Enter Email">
                </div>
                <div class="field input">
                    <label">Password</label>
                    <input type="text" placeholder="Enter new password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label">Select image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>

                
            </form>
            <div class="link">Already signed up? <a href="#">Login Now</a></div>
        </section>
    </div>
</body>
</html>