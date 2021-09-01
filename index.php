<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Stock-Market</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Others
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>
  </div>
  <div class="container">
    <h1 class="text-center m-4">Stock Market Data</h1>
    
<?php
//Json to ShowTable data
$dtls= file_get_contents ('stock_market_data.json ' );
$dtlsok= json_decode($dtls);
// $dtlsok = array_slice($dtlsokay, 0, 25);
$page = !isset($_GET['page']) ? 1 : $_GET['page'];
$limit = 600; 
$offset = ($page - 1) * $limit; 
$total_items = count($dtlsok); 
$total_pages = ceil($total_items / $limit);
$final = array_splice($dtlsok, $offset, $limit); 

?>

    <table class="table table-bordered display" id="example">

      <thead class="thead-dark text-center">
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Trade Code</th>
          <th scope="col">High</th>
          <th scope="col">Low</th>
          <th scope="col">Open</th>
          <th scope="col">Close</th>
          <th scope="col">Volume</th>
       </tr>
      </thead>

      <tbody>
<?php
foreach($final as $ok )
echo "
  <tr>
    <td> $ok->date</td>
    <td> $ok->trade_code </td>
    <td> $ok->high</td>
    <td> $ok->low </td>
    <td>$ok->open</td>
    <td> $ok->close</td>
    <td> $ok->volume </td>
    <td><button>Edit</button></td>
    <td><button>Delete</button></td>
  </tr>
  "
?>
  </tbody>
 </table>

 <!---Pagination-->
 <nav>
  <ul class="pagination">
  <?php for($x = 1; $x <= $total_pages; $x++): ?>
    <a class="page-link" href='index.php?page=<?php echo $x; ?>'><?php echo $x; ?></a>
        <?php endfor; ?> 
  </ul>
</nav>
</div> 
<br>
<br>
</body> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>