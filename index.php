<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAIL</title>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"
      integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css"
      integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css\style.css" />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
      data-interval="2500"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="images/01_Bokaro_Steel_Plant.jpg"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="images\bokaro-hosts-international-automotive-steel-seminar.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="images\steel-660_031215012132_042015031841_042115075257_030716013627.jpg"
            alt="Third slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
    <header class="header">
      <div class="sail_container">
        <img class="head_image" src="images/bs-logo.png" alt="logo" />
      </div>
      <div class="visitor_container">
        <div class="detail">
          <span>Visitor No: 00000 || हिन्दी || </span>
          <?php

            $sql="select * count from core";

          ?>
          <input type="text" placeholder="Search" />
        </div>

        <hr class="hr" />
        <!-- <div class="department">
          <div class="department_box">
            <a href="departmentnw.php" >DEPARTMENT(NON WORKS)</a>
            <img src="images\352021_arrow_drop down_icon.svg" alt="down" class="down"/>
          </div> -->
              <div class="dropdown department ">
              <button class="dropbtn department_box">DEPARTMENTS (NON-WORKS) <img src="images\352021_arrow_drop down_icon.svg" alt="down" class="down"/></button>
              
                <div class="dropdown-content">
                    <a href="#">BUSINESS</a>
                    <a href="#">C&IT</a>
                    <a href="departmentnw.php">HRD</a>
                </div>
              </div>
              <div class="dropdown department ">
              <button class="dropbtn department_box">DEPARTMENTS (WORKS) <img src="images\352021_arrow_drop down_icon.svg" alt="down" class="down"/></button>
                <div class="dropdown-content">
                    <a href="#">Central Maintenance (Mechanical)</a>
                    <a href="#">Contract Cell (Works)</a>
                    <a href="#">Electronics and Telecommunication</a>
                </div>
              </div>
              <div class="dropdown department">
              <button class="dropbtn department_box">IMMS/HRIS LINKS <img src="images\352021_arrow_drop down_icon.svg" alt="down" class="down"/></button>
                <div class="dropdown-content">
                    <a href="#">EL Encashment</a>
                    <a href="#">S90 DNB/Trainees Data Entry</a>
                    <a href="#">Download Form-16</a>
                </div>
              </div>
      </div>
      <div class="sail_container">
        <img class="head_image" src="images/SAIL-LOGO-24-Jan-new.png" alt="logo" />
      </div>
    </header>
    <main>
      <div class="box"></div>
      <div class="box1">
        <p class="contact">
          Contact - 9051049999 & MAX Nos. - 80280 ,80053 for SAP GUI/Network/PC
          related issue
        </p>
        <p class="ip">My IP Address: 10.143.11.174</p>
      </div>
      <!-- <script>
      .bounce:hover{
	transform: scale(1.2);
    z-index: 1000;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
</script> -->
      <div class="ten-row p-10" style="display: flex">
        <div class="card_box roop bounce">
          <img class="img1" src="images\conversion-03.png" alt="Roopantram" />
          <div class="link fc">
            <a href="#">Roopantram (BSL ERP)</a>
          </div>
        </div>
        <div class="card_box online_attend bounce">
          <img class="img1" src="images\online-attend.png" alt="online-attend"/>
          <div class="link fc">
          <a href="#">Online Attendance System (EDMS)</a>
          </div>    
        </div>
        <div class="card_box daily_attend bounce">
          <img class="img1" src="images\gen-info.png" alt="Daily Attendance" />
          <div class="link fc">
          <a href="#">Daily Attendance Report ( Beta )</a>
        </div>
        </div>
        <div class="card_box hrd_mag bounce">
          <img class="img1" src="images\information-icon-01.png" alt="HRD" />
          <div class="link fc">
            <a href="#">HRD E-Magazine</a>
            <a href="#">E-Magazine Steel Horizon</a>
            <a href="#">Press Clipping</a>
            </div>
        </div>
        <div class="card_box online_comp bounce">
          <img class="img1" src="images\complaint-icon.png" alt="Online Complaint"/>
          <div class="link fc">
          <a href="#">Online Complaint Management System</a>
          </div>
        </div>
        <div class="card_box kavach bounce">
          <img class="img1" src="images\reset-01.png" alt="Kavach" />
          <div class="link fc">
          <a href="#">Kavach (Safety related survey)</a>
          </div>
        </div>
        <div class="card_box sap bounce">
          <img class="img1" src="images\password-reset-thumb.png" alt="SAP" />
          <div class="link fc">
          <a href="#">SAP</a>
            <a href="#">Domain</a>
            </div>
        </div>
        <div class="card_box self bounce">
          <img class="img1" src="images\images.png" alt="Self" />
          <div class="link fc">
          <a href="#">Self Service</a>
          </div>
        </div> 
        <div class="card_box dept_upload bounce">
          <img class="img1" src="images\upload-new.png" alt="Upload" />
          <div class="link fc">
          <a style="color: #ff00ff;" href="login.php">Dept. Upload</a>
            <a style="color: #00ff00;"href="newlog.php">Home-page Upload</a>
        </div>
        </div>
        <div class="card_box download bounce">
          <img class="img1" src="images\download-02.png" alt="Downloads" />
          <div class="link fc"></div>
          <a href="#">Downloads</a>
          </div>
        </div>
      </div>
      <div class="imp flex" >
        <div class="imp1">
        <p>Important Informations & Notices</p>
        <ul>
          <li>Anti Bribery Management Policy (Vision Statement) of SAIL</li>
          <li>Swachhata Abhiyan-2022</li>
          <li>Integrated Policy</li>
          <li>Group Insurance Circular 2022-23</li>
          <li>AIPR submission for 2021</li>
          <li>For BGH Covid test Result</li>
          <li>Circular</li>
          <li>NMD 2021 on 20.11.2021</li>
          <li>E-Notesheet Help</li>
          <li>Employee Connect</li>
          <li>Vishwakarma Rashtriya Puraskar [PY-2020]-Invitation of Nomination</li>
        </ul>
      </div>
      </div>
      
    </main>
   
  </body>
  <?php
    include 'footer.php';
    ?>
</html>
