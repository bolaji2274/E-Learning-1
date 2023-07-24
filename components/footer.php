<style>
        footer{
            width: 100%;
            bottom: 0;
            background: #7a6ad8;
            color: #fff;
            padding: 100px 0 30px;
            border-top-left-radius: 125px;
            font-size: 13px;
            line-height: 18px;
        }
        .rok{
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }
        .col{
            flex-basis: 25%;
            padding: 10px;
        }
        .col:nth-child(2), .col:nth-child(3){
            flex-basis: 15%;
        }
        .logo{
            width: 80px;
            margin-bottom: 30px;
            cursor: pointer;
        }
        .col h3{
            width: fit-content;
            margin-bottom: 40px;
            position: relative;
        }
        .email-id{
            width: fit-content;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
            margin: 20px 0;
        }
        ul li{
            list-style: none;
            margin-bottom: 12px;
        }
        ul li a{
            text-decoration: none;
            color: #fff;
        }
        ul li a:hover{
            padding-left: 20px;
            transition: 0.2s;
        }
        .formm{
            padding-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            margin-bottom: 50px;
        }
        .formm .fa{
            font-size: 18px;
            margin-right: 10px;
        }
        .formm input{
            width: 100%;
            background: transparent;
            color: #ccc;
            border: 0;
            outline: none;
        }
        .formm .bts{
            padding: 4px 6px;
            background: transparent;
            cursor: pointer;
            color: #ccc;
            border: 1px solid #ccc;
        }
        .social-icons .fab{
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #7a6ad8;
            background: #fff;
            margin-right: 8px;
            cursor: pointer;
            transition: all 0.5s ease;

        }
        .social-icons .fab:hover{
            border: 1px solid #ccc;
            transition: 1s ease;
            color: #fff;
            background: #7a6ad8;
        }
        hr{
            width: 90%;
            border: 0;
            border-bottom: 1px solid #ccc;
            margin: 20px auto;
        }
        .copyright{
            text-align: center;
        }
        .underline{
            width: 100%;
            height: 5px;
            background: #767676;
            border-radius: 3px;
            position: absolute;
            top: 25px;
            left: 0;
            overflow: hidden;
        }
        .underline span{
            width: 15px;
            height: 100%;
            background: #fff;
            border-radius: 3px;
            position: absolute;
            top: 0;
            left: 10px;
            animation: moving 2s linear infinite;
        }
        @keyframes moving{
            0%{
                left: -20px;
            }
            100%{
                left: 100%;
            }
        }
        @media (max-width: 700px) {
            footer{
                bottom: unset;
            }
            .col{
            flex-basis: 100%;
        }
        .col:nth-child(2), .col:nth-child(3){
            flex-basis: 100%;
        }
        }
        h3,h4{
            color: #fff;
        }
        #contact-forms input::placeholder {
            color: #fff;
        }
</style>
    <footer>
        <div class="rok">
            <div class="col">
                <h2 class="logo"><span style="color: #fff;">Learn</span><span style="color: blue;">Hub..</span></h2>
                <p>An E-Learning platform rich of resources, We
                    make learning easy and simple for Everyone.</p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>ITPL Road</p>
                <p>Oke Awesin, Erin Osun</p>
                <p>Osun State, Nigeria.</p>
                <p class="email-id">learners471@gmail.com</p>
                <h4>+234 - 9047310968</h4>
            </div>
            <div class="col">
                <h3>Links <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="teachers.php">Instructors</a></li>
                    <li><a href="contact.php">Contacts Us</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Newsletter <div class="underline"><span></span></div></h3>
                <form id="contact-forms" class="formm" action="https://formspree.io/f/mayzrvev" method="post">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter Your Email id" maxlength="30" required class="box">
                    <button type="submit" class="bts">Submit</button>
                </form>
                <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">&copy; copyright @ <?= date('Y'); ?>  <span style="color: #fff;">Learn</span><span style="color: blue;">Hub..</span> | All Rights Reserved!</p>
    </footer>

