<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-5">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        
        <style>
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a>BRAS Info</a>
                        <ul>
                            <li><a href="#">first</a></li>
                            <li><a href="#">second</a></li>
                            <li><a href="#">third</a></li>
                        </ul>
                    </li>
                    
                    <li><a>Access Info</a></li>
                    
                    <li><a>Subscriber Info</a></li>
                    
                </ul>
            </nav>
            <div id="content_area">
                <?php echo $content; ?>
                <h3>
                    <?php echo $word; ?>
                </h3>
                
                <form action="">
                    <input type="text" name=$button/>
                    <button type="submit">enter</button>
                    
                </form>
                
                <iframe src="https://maps.googleapis.com/maps/api/staticmap?center=40.714728,-73.998672&zoom=12&size=400x400&key=AIzaSyDwJPls2x4pNjvjm5QicGa3U2cz0Mx1xPo"allowfullscreen></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0594294610896!2d101.51846731429944!3d3.078808997757999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMDQnNDMuNyJOIDEwMcKwMzEnMTQuNCJF!5e0!3m2!1sen!2s!4v1502259290666" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
            </div>
            <div id="sidebar">
                
            </div>
            <footer id="footer">
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
