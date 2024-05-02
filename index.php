<!DOCTYPE html>
<html lang="en">

<head>
  <title>Divine Favour International Schools</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#home">Divine Favour International Schools</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">HOME</a></li>
          <li><a href="#result">CHECK RESULT</a></li>
          <li><a href="#gallery">GALLERY</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li>
            <a role="button" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">PAY FEES</a>
          </li>
          <li><a href="#loginForm">LOGIN</a></li>
          <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#loginForm" id="tracoForm">Primary</a></li>
            <li><a href="#loginForm" id="trihsForm">Secondary</a></li>
          </ul>
        </li> -->
          <li>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slide/class1.jfif" alt="New York" width="1200" height="700" />
      </div>

      <div class="item">
        <img src="img/slide/class2.jfif" alt="Chicago" width="1200" height="700" />
      </div>

      <div class="item">
        <img src="img/slide/class3.jfif" alt="Los Angeles" width="1200" height="700" />
        <!-- <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div> -->
      </div>

      <div class="item">
        <img src="img/slide/class4.jfif" alt="Los Angeles" width="1200" height="700" />
        <!-- <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div> -->
      </div>

      <div class="item">
        <img src="img/slide/class5.jfif" alt="Los Angeles" width="1200" height="700" />
        <!-- <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div> -->
      </div>

      <div class="item">
        <img src="img/slide/class6.jfif" alt="Los Angeles" width="1200" height="700" />
        <!-- <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div> -->
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Container (The RESULT Section) -->
  <div id="result" class="container text-center">
    <h3>RESULT CHECKER</h3>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-5" align="left">
        <h5>HOW TO CHECK YOUR RESULT</h5>
        <p>
          1. Enter Your Admission Number<br />
          2. Select Secondary or Primary Section<br />
          3. Select the term in respect to the class selected<br />
          4. Enter your result checking pin where required<br />
          5. Click on the Check Result button<br />
          6. Your result will be downloaded in pdf format <br />
          7. Check your download location to view your result<br />
          8. Help or Assitance ? Call
          <span class="glyphicon glyphicon-phone"></span>+2348032199478
          <br /><br />
        </p>
      </div>
      <div class="col-sm-5">
        <form action="" method="post" enctype="multipart/form-data" role="form" id="result_form">
          <div class="form-group">
            <input class="form-control" type="text" name="admno" id="admno" placeholder="Enter Admission Number" required />
          </div>
          <div class="form-group">
            <select name="myschool" class="form-control" id="myschool" required="required">
              <option value="">Please Select School</option>
              <!--<option value="traco">PRIMARY</option>>-->
              <option value="trihs">SECONDARY</option>
            </select>
          </div>
          <div class="form-group">
            <select name="myclass" class="form-control" id="myclass" required="required"></select>
          </div>
          <div class="form-group">
            <select name="myterm" class="form-control" id="myterm" required="required">
              <option value="">Please Select Term</option>
              <option value="First Term">First Term</option>
              <option value="Second Term">Second Term</option>
              <option value="Third Term">Third Term</option>
            </select>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="card" id="card" placeholder="Enter Scratch Card Pin" required min="1" />
          </div>
          <button type="submit" name="submit" class="btn pull-right">
            Check Result &nbsp; <i class="glyphicon glyphicon-download"></i>
          </button>
        </form>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>

  <!-- Container (GALLERY Section) -->
  <div id="gallery" class="bg-1">
    <div class="container">
      <h3 class="text-center">GALLERY</h3>
      <!-- images for gallery should be 591x591 in pixels -->
      <div id="myGallery" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="img/gallery/user_icon.jpg" alt="Card image cap" />
                  <div class="card-body text-center">
                    <h4 class="card-title">
                      Mrs. Odawayi <br />
                      <pos>(FOUNDER)</pos>
                    </h4>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="img/gallery/user_icon.jpg" alt="Card image cap" />
                  <div class="card-body text-center">
                    <h4 class="card-title">
                      Mr Opera Martins<br />
                      <pos>(PRINCIPAL)</pos>
                    </h4>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="img/gallery/user_icon.jpg" alt="Card image cap" />
                  <div class="card-body text-center">
                    <h4 class="card-title">
                      Mr. Chisom Nestor
                      <br />
                      <pos>(School Adminstrator)</pos>
                    </h4>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myGallery" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="contact" class="container">
    <h3 class="text-center">Contact</h3>

    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-4">
        <hr />
        <p>Customer ? Locate us.</p>
        <hr />
        <p>
          <span class="glyphicon glyphicon-map-marker"></span>
          Opara-Nestor/Ejiogu Compound <br />
          Opposite Holy Trinity Catholic Church<br />
          Awaka Owerri North L.G.A
        </p>
        <p>
          <span class="glyphicon glyphicon-phone"></span> Phone: +234
          8037110444
        </p>
        <p>
          <span class="glyphicon glyphicon-envelope"></span> Email:
          info@dfisportal.com
        </p>
      </div>
      <div class="col-md-6">
        <hr />
        <p>Customer ? Drop a message.</p>
        <hr />
        <form id="contact_form" action="#" method="post" class="" role="form">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea>
          <br />
          <div class="row">
            <div class="col-md-12 form-group">
              <button class="btn pull-right" type="submit">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Image of location/map -->
  <h3 class="text-center">Map/Direction</h3>
  <img src="img/map/map_urrata.png" class="img-responsive" style="width: 100%" />
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.501597240093!2d7.0632929141474525!3d5.492262035816033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042584473019061%3A0xc596e2f36d6df382!2sThe%20Redeemed%20Christian%20Church%20Of%20God!5e0!3m2!1sen!2sng!4v1572705929015!5m2!1sen!2sng" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->

  <!-- Login form -->
  <div id="loginForm" class="container">
    <h3 class="text-center">Login</h3>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <form action="" method="post" enctype="multipart/form-data" role="form" id="login_form">
        <div class="form-group">
          <label>Username</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name="username" id="username" placeholder="username" required />
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name="password" id="password" placeholder="*********" required />
          </div>
        </div>

        <button type="submit" name="submit" class="btn pull-right">
          Sign In &nbsp; <i class="glyphicon glyphicon-log-in"></i>
        </button>
      </form>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-center" style="vertical-align: center">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <img src="img/logo/dfis_logo.jpg" style="width: 200px; height: 200px; border-radius: 50%;" />
        </div>
        <div class="modal-body">
          <form style="padding-left: 30px" class="text-center">
            <div class="text-center" style="color: red; font-family: Verdana; font-size: 30px">
              SCHOOL FEES
            </div>
            <div class="row text-center">
              <div class="col-lg-6">
                <label for="term">Term</label>
                <select name="term" id="term" class="form-control" required>
                  <!-- To be populated using ajax -->
                </select>

                <br />
              </div>
              <div class="col-lg-6">
                <label for="level">Level / Category</label>
                <select name="level" id="level" class="form-control" required>
                  <!-- To be populated using ajax -->
                </select>

                <br />
              </div>
            </div>
            <div class="row text-center">
              <div class="col-lg-6 form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email-address" class="form-control" required /><br />
              </div>
              <div class="col-lg-6">
                <label for="amount">Amount</label>
                <select name="amount" id="amount" class="form-control">
                  <!-- To be populated using ajax -->
                </select>
                <!-- <input
                    type="tel"
                    id="amount"
                    class="form-control"
                    required
                  /> -->
                <br />
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <label for="guardians_phoneno">Guardian Phone Number</label>
                <input type="text" id="guardians_phoneno" class="form-control" placeholder="Enter phone number first" required /><br />
              </div>
              <div class="col-lg-6">
                <label for="g_name">Guardian Name</label>
                <input type="text" id="g_name" class="form-control" disabled /><br />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label for="surname">Surname</label>
                <input type="text" id="surname" class="form-control" disabled /><br />
              </div>
              <div class="col-lg-6">
                <label for="middle-name">Middle Name</label>
                <input type="text" id="middle_name" class="form-control" disabled /><br />
              </div>

            </div>
            <div class="row">
              <div class="col-lg-6">
                <label for="last-name">Last Name</label>
                <input type="text" id="last_name" class="form-control" disabled /><br />
              </div>
              <div class="col-lg-6">
                <label for="total_fees">Total Fees</label>
                <input type="text" id="total_fees" class="form-control" disabled /><br />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label for="amount_paid">Amount Paid</label>
                <input type="text" id="amount_paid" class="form-control" disabled/><br />
              </div>
              <div class="col-lg-6">
                <label for="amount_unpaid">Amount Unpaid</label>
                <input type="text" id="amount_unpaid" class="form-control" disabled/><br />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-submit">
                  <button type="button" onclick="SquadPay()" class="btn btn-danger">
                    Check Out</button><br /><br />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="">
    <div class="row">
      <div class="col-md-4">
        <h4>About Us</h4>
        <hr />
        <p>
          Divine Favour International Schools is an Institution maped out to
          train, teach and prepare children for greater days ahead.
        </p>
        <p>We believe in Possibility, try us and see.</p>
      </div>
      <div class="col-md-4">
        <h4>Schools/Programs</h4>
        <hr />
        <div>
          <ul class="arrow">
            <li><a href="#">Play Group</a></li>
            <li><a href="#">Kindergartin</a></li>
            <li><a href="#">Nursery</a></li>
            <li><a href="#">Primary</a></li>
            <li><a href="#">Secondary</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <h4>Address</h4>
        <hr />
        <address>
          Opara-Nestor/Ejiogu Compound,<br />
          Opposite Holy Trinity Catholic Church<br />
          Awaka Owerri North L.G.A, Imo state.<br />
          <abbr title="Phone"><span class="glyphicon glyphicon-phone-alt"></span></abbr>
          (234) 8037110444
        </address>
      </div>
    </div>
    <br />
    <div class="text-center">
      <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span> </a><br /><br />
      <p>
        Powered By
        <a href="#" data-toggle="tooltip" title="08032199478">Divine Favour International Schools</a>
      </p>
    </div>
  </footer>

  <!-- <script>
    fetch(`https://sandbox-api-d.squadco.com/transaction/verify/SQINFO1877761742097`, {
        method: 'GET', // or 'PUT'
        headers: {
          'Authorization': 'sandbox_sk_06fda0d87d3772b8c6e8cccd5b6e030f7707f3baf944',
        },
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);
      })
      .catch((error) => {
        console.error('Error:', error);
      });
  </script> -->

  <script src="https://checkout.squadco.com/widget/squad.min.js"></script>
  <script>
    function SquadPay() {
      const squadInstance = new squad({
        onClose: () => console.log("Widget closed"),
        onLoad: () => $("#myModal").modal("hide"),
        onSuccess: function() {
          // save details to the database
          let term = $("#term").val();
          let transaction_ref = squadInstance.config.payload.transaction_ref;
          let surname = $("#surname").val();
          let middle_name = $("#middle_name").val();
          let last_name = $("#last_name").val();
          let guardian_name = $("#g_name").val();
          let guardians_phoneno = $("#guardians_phoneno").val();
          let total_fees = $("#total_fees").val();
          let amount_paid = $("#amount_paid").val();
          let amount_unpaid = $("#amount_unpaid").val();
          $.ajax({
            type: "POST",
            url: "process/ajax.php",
            data: {
              term: term,
              transaction_ref: transaction_ref,
              surname: surname,
              middlename: middle_name,
              lastname: last_name,
              guardian_name: guardian_name,
              guardians_phoneno: guardians_phoneno,
              total_fees: total_fees,
              amount_paid: amount_paid,
              amount_unpaid: amount_unpaid,
              action: "saveTransaction",
            },
            success: function(result) {
              // console.log(result);
              if (result == "success") {
                window.location.href =  'http://localhost/portala/verifypament.php';
              } else {
                alert(data);
              }
            },
            error: function(request, error) {
              console.log("ERROR:" + error);
            },
          });
        },
        // key: "sandbox_pk_06fda0d87d3772b8c6e8d5af27101c056f6de8c38a4e",
        key: "sandbox_sk_06fda0d87d3772b8c6e8cccd5b6e030f7707f3baf944",
        //Change key (test_pk_sample-public-key-1) to the key on your Squad Dashboard
        email: document.getElementById("email-address").value,
        amount: document.getElementById("amount").value * 100,
        customer_name: document.getElementById("g_name").value,
        //Enter amount in Naira or Dollar (Base value Kobo/cent already multiplied by 100)
        currency_code: "NGN",
      });
      squadInstance.setup();
      squadInstance.open();



    }
  </script>

  <script type="text/javascript" src="process/resultVaidator.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</body>

</html>