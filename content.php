<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Poiret One' rel='stylesheet'>
        <title></title>
    </head>
    <body style="background: #e06666">
        <div class="container" class="col-md-4">
            <div class="row col-md-8" style="margin-left: 10%">
                <div style="background: #efefef;height: 400px;border-radius: 350px;width: 400px;margin-top: 20%;float: right;margin-left: -40% " class="col-md-4">
        </div>
                <div style="float: left;margin-top: 30%;margin-left: 10%;height: 400px" class="col-md-8">
            <center>
                <b><div style="color: #434343;font-family: Poiret One;font-size: 21pt;text-align: left">WRITING SERVICES & PRICING</div></b>
                <div style="background:#000000;width: 10%;height: 8px;margin-left: -80%">
                </div><br><br>
                <b><div style="color: #434343;font-family: Poiret One;font-size: 15pt;text-align: left"><button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Premium SOP Building >> INR. 6000</button> <br>
                        <a href="form.php" style="color: #434343">Personalized SOP Building >> INR. 2500 (inc GST)</a><br>
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal">SOP Review / Remodelling >> INR. 1200 (inc GST)</button>   <br><br>                        
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">    ~ Blogs </button> I
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Web page  </button>I
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Social media  </button>I
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Essays </button><br>
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Subject centric literature  </button>I
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Copywriting  SEO optimized content  </button>I
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Feature writing </button> <br>
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Product description  </button>I
                        <button type="button" style="background: transparent;border: none" data-toggle="modal" data-target="#myModal1">Instructional design</button></div></b>
            </center>
                </div>
        </div>
            <br><br><br><br>
            <div class="row col-md-8" style="margin-left: 20%">

                <center>
                    <a href="index.php"><img src="home.png" width="20px" height="20px"/></a>
                    
                </center>
                                </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Submit details
            </div>
            <div class="modal-body">
                Please submit the following details 
                <!-- We display the details entered by the user here -->
                <form action="sop.php" method="post" enctype="multipart/form-data">
                <table class="table">
                   
                    <tr>
                        <th> Name</th>
                        <td id="lname">
                            <input type="text" name="fname" required="true"/>
                            </td>
                    </tr>
                    <tr>
                        <th>Email-ID</th>
                        <td id="em"><input type="text" name="email" required="true"/></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td id="ph"><input type="number" name="ph" required="true"/></td>
                    </tr>
                    <tr>
                        <th>File</th>
                        <td id="f"><input type="file" name="f" required="true"/></td>
                    </tr>
                </table>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" value="submit" name="submit" href="#" id="submit" class="btn btn-success success">
                
            </div>
            </form>
        </div>
    </div>
</div>
     <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Submit details
            </div>
            <div class="modal-body">
                Please submit the following details 
                <!-- We display the details entered by the user here -->
                <form action="query.php" method="post" >
                <table class="table">
                   
                    <tr>
                        <th> Name</th>
                        <td id="lname">
                            <input type="text" name="fname" required="true"/>
                            </td>
                    </tr>
                    <tr>
                        <th>Email-ID</th>
                        <td id="em"><input type="text" name="email" required="true"/></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td id="ph"><input type="number" name="ph" required="true"/></td>
                    </tr>
                    <tr>
                        <th>Query</th>
                        <td id="qry" ><textarea name="f" required="true" style="width: 250px;height: 100px"></textarea></td>
                    </tr>
                </table>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" value="submit" name="submit" href="#" id="submit" class="btn btn-success success">
                
            </div>
            </form>
        </div>
    </div>
</div>      
      <?php
        // put your code here
        ?>
    </body>
</html>
<style>
    body
    {
        font-family: Poiret one;
        font-size: 15px;
        color: #434343;
    }
    button
    {
        color: #434343;
    }
    
</style>