<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        .user-profile-icon{
            max-width:60px;
        }
        .navbar.navbar-expand-lg.bg-light.navbarStyle{
            font-size:20px;
            font-family: 'Inter';
            font-weight: 600;
            background-color: #F6EFBD!important;
            position:fixed;
            width:100%;
            top:0;
            padding-top: 10px;
            padding-top: 10px;
            z-index: 999;
        }

        .alata-font{
            font-family: 'Alata';
        }

        .search-logo{
            position: absolute;
            top:12px;
            right:5px;
        }

        .logo-nav{
            max-width:100px;
        }

        .input-nav-style{
            border-radius: 30px;
            width:90%;
            padding: 10px 20px;
        }
        

        .form-nav-style{
            width:100%;
            height:50px;
        }

        .section-1 {
            width: 100%;
            height: 300px; /* Adjust height as needed */
            background: url('./image/background-section-1.svg') no-repeat center center;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background-position: bottom;
            padding: 350px 0px 225px 0px;
        }

        .content {
            position: relative;
            z-index: 2;
        }

        .title {
            font-size: 64px;
            font-weight: 700;
            color: #BC7C7C;
            margin: 0;
        }

        .subtitle {
            font-size: 24px;
            font-weight: 400;
            color: black;
            margin: 10px 0 0;
        }

        .section-1 .logo {
            width: 100px;
            height: 83.3px;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        .section2 {
            padding: 50px 0;
            background-color: #fff; /* Adjust background color as needed */
            text-align: center;
        }
        .section2 .container {
            max-width: 800px; /* Adjust width as needed */
            margin: 0 auto;
        }
        .section2 h2 {
            font-size: 48px; /* Adjust size as needed */
            font-weight: 700;
            color: black; /* Adjust color as needed */
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        .section3 {
    padding: 50px 0;
}

.section3 h2 {
    font-size: 32px;
    font-weight: 600;
    color: #000;
}

.service-card {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.service-img {
    width: 200px;
    height: 150px;
    object-fit: cover;
}

.service-info {
    flex: 1;
}

.service-info h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.service-info p {
    font-size: 14px;
    color: #666;
    margin: 0;
}

.details-link {
    display: inline-block;
    color: #000;
    text-decoration: underline;
    font-weight: 500;
    margin-top: 10px;
}

.more-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
}

.arrow-img {
    width: 28px; /* Adjust as needed */
    height: auto;
}

.section4 {
    padding: 50px 0;
}

.section4 h2 {
    font-size: 32px;
    font-weight: 600;
    color: #000;
}

.offer-card {
    background-color: #FFF8E1;
    padding: 20px;
    border-radius: 15px;
    height: 100%;
}

.offer-card h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.validity {
    color: #666;
    font-size: 14px;
    margin-bottom: 15px;
}

.section5 {
    padding: 50px 0 70px;
}

.section5 h2 {
    font-size: 32px;
    font-weight: 600;
    color: #000;
}

.spa-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px; /* Kurangi nilai gap di sini */
    background: #fff;
    border-radius: 15px;
}

.spa-info-wrapper {
    display: flex;
    align-items: center;
    gap: 48px;
}

.spa-image {
    width: 300px;
    height: 200px;
    border-radius: 15px;
    object-fit: cover;
}

.spa-details h3 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 12px;
    color: #000;
}

.spa-details p {
    margin: 0;
    color: #666;
    font-size: 16px;
    line-height: 1.5;
}

.book-again-btn {
    background-color: #C17C7C;
    color: white;
    border: none;
    padding: 12px 32px;
    border-radius: 25px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-right: 250px;
}

.book-again-btn:hover {
    background-color: #a66868;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .spa-card {
        flex-direction: column;
        padding: 20px;
    }
    
    .spa-info-wrapper {
        flex-direction: column;
        text-align: center;
    }
    
    .spa-image {
        width: 100%;
        height: auto;
    }
    
    .book-again-btn {
        margin-right: 50;
    }
}
.footer {
  background-color: #FFF8E1;
  padding: 40px 0;
  width: 100%;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-links {
  display: flex;
  justify-content: space-between;
  margin-bottom: 30px;
}

.footer-section h4 {
  font-size: 16px;
  margin-bottom: 15px;
  color: #333;
}

.footer-secondary {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.footer-legal {
  display: flex;
  gap: 190px;
}

.footer-legal span {
  color: #666;
  cursor: pointer;
}

.social-media {
  display: flex;
  gap: 15px;
}

.social-media img {
  width: 24px;
  height: 24px;
  transition: opacity 0.3s;
}

.social-media img:hover {
  opacity: 0.8;
}

.footer-copyright {
  text-align: center;
  color: #666;
  font-size: 14px;
}

.background-about-us{
     width:100%;
     padding-top:450px;
     height: 300px;
     background-image:url("./image/background-about-us.svg");
     background-size:cover;
     background-position:bottom;
}

.about-us-section {
    padding: 0px 0;
    padding-bottom: 60px;
    margin-top: -150px;
}

.homeglam-text { 
    color: #BC7C7C;  /* Warna pink/mauve seperti di logo */
    font-weight: 700; /* Bold */
    font-size: 100px;   
}
.about-us-title {
    text-align: center;
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 20px;
}

.about-us-content {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.about-us-image {
    width: 100%;
    height: auto;
    border-radius: 15px;
    object-fit: cover;
}

.vision-mission-section {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 50px;
}

.vision-section, .mission-section, .profile-section {
    background: linear-gradient(180deg, #A2D2DF 0%, #F6EFBD 100%);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 30px;
    border: 2px black solid;
    padding: 20px;
}

.vision-section h2, .mission-section h2 {
    font-size: 25px;
    font-weight: 700;
}

.call-to-action {
    text-align: center;
    margin-top: 30px;
}

.explore-services-btn {
    background-color: #BC7C7C;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

/* Review */
.review-section {
    padding: 50px 0;
}

.review-title {
    padding-top: 50px;
}

.alata-font {
    font-family: 'Alata';
}

.review-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 20px;
}

.review-item {
    display: flex;
    align-items: flex-start;
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 20px;
}

.review-content {
    flex-grow: 1;
}

.review-content h4 {
    margin-bottom: 10px;
}

.review-content p {
    margin-bottom: 5px;
}

.review-date {
    color: #888;
    font-size: 14px;
}

.review-rating {
    color: #FFD700;
    font-size: 18px;
}

.text-area-style{
    height:187px;
}

.button-review-style {
  background: none;
  border: none;
  position: absolute !important;
  right: 36px;
  bottom: 15px;
}

.orange-star{
    opacity:0%;
    position:absolute;
    left:0;
    top:0;
}

@media (min-width: 991px) and (max-width: 1200px){
    .about-us-section {
    padding: 0px 0;
    margin-top: -75px;
}
.homeglam-text { 
    color: #BC7C7C;  /* Warna pink/mauve seperti di logo */
    font-weight: 700; /* Bold */
    font-size: 60px;   
}
.book-again-btn{
    margin-right:250px;
}
}

@media (max-width: 991px){
    .about-us-section {
    padding: 0px 0;
    margin-top: -75px;
}
.homeglam-text { 
    color: #BC7C7C;  /* Warna pink/mauve seperti di logo */
    font-weight: 700; /* Bold */
    font-size: 48px;   
}
.about-us-image {
    max-width: 90%;
    height: auto;
    border-radius: 15px;
    object-fit: cover;
}
.more-section div{
    text-decoration:underline;
}
.book-again-btn{
    margin-right:0px;
}
}

@media (max-width: 576px){
    .homeglam-text{
        font-size: 36px;
    }

    .background-about-us{
        height: unset;
        padding-top:300px;
    }

    .about-us-section {
        padding: 0px 0;
        margin-top: 0px;
    }

}
    </style>
</head>