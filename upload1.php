<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Full Screen Slider</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style1.css?v=<?php echo time(); ?>" />
</head>

<body>

<div class="main-content">
    <!-- <div class="wrapper"> -->
        <nav>
            <div class="wrapper">
                <a href="page.php"><img src="images/logowhite.png" alt="logo"></a>
            </div>
        </nav>
    <!-- </div> -->
</div>

    <div class="slider">
        <div class="slide current">
            <div class="content">
                <h1>Upload any picture below...</h1>
                <p>
                    
                </p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1>To spot your favourite celebrity</h1>
                <p>
                    
                </p>
            </div>
        </div>
        <div class="slide">
           
        </div>
        <div class="slide">
            
        </div>
        <div class="slide">
        </div>   
        
    </div>
    <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>



    <div class="upload">

        <br>
        <br>
        <br>
        <br>
        <br>

        <p>       
                    <form action="ml.html">
                        <input type="file" id="real-file" hidden="hidden" />
                        <button type="button" id="custom-button">CHOOSE A FILE</button>
                        <span id="custom-text">No file chosen, yet.</span>
                        <button type="submit" name="submit" id="custom-button2">UPLOAD</button>
                    </form>

        </p>
        
        <br>
        <br>
        <br>
        <br>


        

    </div>
    




        
    

    <script src="main1.js"></script>
</body>

</html>