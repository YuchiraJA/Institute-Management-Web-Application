<!DOCTYPE html>
<html lang="en">
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- joel's code start-->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/libraryheader-footer.css" /> 



    <title>Library Home</title>
   <!-- joel's code end-->

<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column2 {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.column3 {
  float: left;
  width: 45%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column2 {
    width: 100%;
    display: block;
  }
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container2 {
  padding: 0 16px;
}

.container2::after, .row2::after {
  content: "";
  clear: both;
  display: table;
}

.title2 {
  color: grey;
}

.button2 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #0495b3 ;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button2:hover {
  background-color: #555;  
}



/*heading photo css*/
.container0 {
  position: relative;
  width: 100%;
  
  margin: 0 auto;
}

.container0 img {vertical-align: middle;    height: 450px;}

.container0 .content0 {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 30px;
}




.row2 a {
  text-decoration: none ;
  color: black ;
}

.row2 a:hover{
  color:  #17a2b8;
}







/*heading photo css*/


.container0 img {vertical-align: middle;    height: 450px;}










</style>

</head>
<body>

      
    
<!-- image heading html  -->
<div style="text-align:center; position: relative; width: 100%; margin: auto; color: #white; background-color: #787575; " class="container0">

    <div style="position: fixed; text-align:center; top: -3%; bottom: 79%; color:white; width: 100%; background-color:#787575;" class="content0" >



   

    <h1>
     <center>
          <i class="fas fa-graduation-cap"> </i> MicroEye Educational Institute
      <center>
      </h1>
      <center>
    <h2>Library Statistic Report</h2>Report Generated on :<?= $mytime->toDateString(); ?>
      <br>

    </center>
    
    </div>
</div>
<div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<center><h2>Library Item Statistics</h2></center>
<center><h4>Total:<?= ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) ?></h4></center>





<div class="row2">
<table id="customers" style="color:white; font-family: 'Lato', sans-serif !important; font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width:95% !important; margin:auto; background:white; font-size:14px; font-family: 'Lato', sans-serif !important; color:black; padding: 16px;">
  <tr>
    <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #333; color: white;" width="30%"><center><h4>Library Item Name</h4></center></th>
    <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #333; color: white;" width="30%"><center><h4>Sub Total</h4></center></th>
    <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #333; color: white;" width="30%"><center><h4>Presentage</h4></center></th>

  </tr>


  <tr>
<td style="border: 1px solid #ddd; padding: 8px;">
    <a href="/librarian/manage_libraryitems"><h4>E-Books</h4></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem3 ?></h5></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5><?= $libraryitem3 / ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) * $w  ?> %</h5></a>
    </td>
  </tr>

  <tr>
     <td style="border: 1px solid #ddd; padding: 8px;">
     <a href="/librarian/manage_libraryitems"><h4>Jornals </h4></a>
      </td>
      <td style="border: 1px solid #ddd; padding: 8px;">
      <a style="color:white;" class="button2"><h5> <?= $libraryitem1 ?></h5></a>
      </td>
      <td style="border: 1px solid #ddd; padding: 8px;">
      <a style="color:white;" class="button2"><h5> <?= $libraryitem1 / ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) * $w  ?> %</h5></a>
    </td>
    </tr>


  <tr>
  <td style="border: 1px solid #ddd; padding: 8px;">
  <a href="/librarian/manage_libraryitems"><h4>Edutacional PDF </h4></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem2 ?></h5></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" style="color:white;" class="button2"><h5>  <?= $libraryitem2 / ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) * $w  ?> %</h5></a>
    </td>
  </tr>


  <tr>
  <td style="border: 1px solid #ddd; padding: 8px;">
  <a href="/librarian/manage_libraryitems"><h4>Other</h4></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem4 ?></h5></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem4 / ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) * $w  ?> %</h5></a>
    </td>
  </tr>


  
  <tr>
  <td style="border: 1px solid #ddd; padding: 8px;">
      <a href="/librarian/manage_libraryitems"><h4>Past Papers</h4></a>
    </td >
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem5 ?></h5></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem5 / ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) * $w  ?> %</h5></a>
    </td>
  </tr>

  
  <tr>
  <td style="border: 1px solid #ddd; padding: 8px;"><a href="/librarian/manage_libraryitems"><h4>Model Papers</h4></a>
  
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem6 ?></h5></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $libraryitem6 / ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) * $w  ?> %</h5></a>
    </td>
    </tr>


  <tr>
  <td style="border: 1px solid #ddd; padding: 8px;"> <a href="/librarian/manage_libraryitems"><h4>More Reading Materials</h4></a>
  
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a class="button2" style="color:white;"><h5> <?= $libraryitem7 ?></h5></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a class="button2" style="color:white;"><h5><?= $libraryitem7 / ($libraryitem3 + $libraryitem1 + $libraryitem4 + $libraryitem2 +  $libraryitem5 +  $libraryitem6 +  $libraryitem7) * $w  ?> %</h5></a>
    </td>
  </tr>


</table>
    </div>



<br>
<hr>
<br>


<center><h2>Student's Feedback Statistics</h2></center>
<center><h4>Total:<?= ($feedback3 + $feedback1 + $feedback2) ?></h4></center>


<br>


    <div class="row2">
<table id="customers" style="color:white; font-family: 'Lato', sans-serif !important; font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width:95% !important; margin:auto; background:white; font-size:14px; font-family: 'Lato', sans-serif !important; color:black; padding: 16px;">
  <tr>
    <th width="30%" style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #333; color: white;" width="30%"><center><h3>Student Feedback</h3></center></th>
    <th width="30%" style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #333; color: white;" width="30%"><center><h3>Sub Total</h3></center></th>
    <th width="30%" style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #333; color: white;" width="30%"><center><h3>Presentage</h3></center></th>

  </tr>


  <tr>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a href="/librarian/manage_libraryitems"><h4>Positive &#128522;</h4></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5><?= $feedback1 ?></h5></a>
    </td>
    <td style="border: 1px solid #ddd; padding: 8px;">
    <a style="color:white;" class="button2"><h5> <?= $feedback1 / ($feedback1 + $feedback2 + $feedback3) * $w  ?> %</h5></a>
    </td>
  </tr>

  <tr>
     <td style="border: 1px solid #ddd; padding: 8px;">
     <a href="/librarian/manage_libraryitems"><h4>Negative  &#128577;</h4></a>
      </td>
      <td style="border: 1px solid #ddd; padding: 8px;">
      <a style="color:white;" class="button2"><h5> <?= $feedback2 ?></h5></a>
      </td>
      <td style="border: 1px solid #ddd; padding: 8px;">
      <a style="color:white;" class="button2"><h5><?=  $feedback2 / ($feedback1 + $feedback2 + $feedback3) * $w   ?> %</h5></button>
    </td>
    </tr>



    <tr>
     <td style="border: 1px solid #ddd; padding: 8px;">
     <a href="/librarian/manage_libraryitems"><h4>Neutral  &#128528;</h4></a>
      </td>
      <td style="border: 1px solid #ddd; padding: 8px;">
      <a style="color:white;" class="button2"><h5> <?= $feedback3 ?></h5></a>
      </td>
      <td style="border: 1px solid #ddd; padding: 8px;">
      <a style="color:white;" class="button2"><h5> <?= $feedback3 / ($feedback1 + $feedback2 + $feedback3) * $w  ?> %</h5></a>
    </td>
    </tr>

</table>
    </div>

<br>
<br>
<hr>
<br>


    <!--      ['LibraryItems', 'Hours per Day'],
          ['E-books',  <?= $libraryitem3 ?>],
          ['Jornals',  <?= $libraryitem1 ?>],
          ['Edutacional PDF',  <?= $libraryitem2 ?>],
          ['Other',  <?= $libraryitem4 ?>],
          ['Past Papers',  <?= $libraryitem5 ?>],
          ['Model Papers',  <?= $libraryitem6 ?>],
          ['More Reading Materials',  <?= $libraryitem7 ?>]  -->
 

  

          <!-- ['Tas', 'Hours per Day'],
          ['Positive', <?= $feedback1 ?>],
          ['Negative', <?= $feedback2 ?>],
          ['Neutral', <?= $feedback3 ?>], -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
