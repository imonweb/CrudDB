
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Jumbotron example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
     
        <span class="fs-4">CRUD Database operations using PDO in PHP</span>
      </a>
    </header>

    <!-- <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">BOOKS</h1>
        <p class="col-md-8 fs-4">Book</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
    </div> -->

    <div class="row align-items-md-stretch">
      <div class="col-md-3">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
              <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Book Details</h3>
                        <p>Fill in the data below.</p>


                        <form method="" action="" class="requires-validation" novalidate>
                          
                            <div class="form-group">
                              <label for="formGroupExampleInput">Book Name</label>
                              <input name="book_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Book Name">
                            </div>

                            <div class="form-group mt-3">
                              <label for="formGroupExampleInput">Book Type</label>
                             
                               <select class="form-select" required>
                                      <option selected disabled value="">Science Fiction</option>
                                      <option value="jweb">Drama</option>
                                      <option value="sweb">Adventure</option>
                                      <option value="pmanager">Action</option>
                               </select>
                            </div>

                            <div class="form-group mt-3">
                              <label for="formGroupExampleInput">Number of Pages</label>
                              <input name="no_of_pages" type="text" class="form-control" id="formGroupExampleInput" placeholder="Number of pages">
                            </div>

                            <div class="form-group mt-3">
                              <label for="formGroupExampleInput">Book Price</label>
                              <input name="book_price" type="text" class="form-control" id="formGroupExampleInput" placeholder="Book Price">
                            </div>

                             <div class="form-group mt-3">
                              <label for="formGroupExampleInput">Author</label>
                              <input name="book_author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Author">
                            </div>



                             

                           

 
                           <!-- <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                            <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                               <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div> -->

                        <!-- <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I confirm that all data are correct</label>
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                        </div> -->
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">ADD RECORD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

          
        </div>
      </div>



      <div class="col-md-9">
        <div class="h-100 p-5 bg-light border rounded-3">
         <table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Pages</th>
      <th scope="col">Price</th>
      <th scope="col">Author</th>
      <th scope="col">Date Created</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Titanic</td>
    </tr>
    
  </tbody>
</table>
          <button class="btn btn-outline-secondary" type="button">Refresh Page</button>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2024
    </footer>
  </div>
</main>


    
  </body>
</html>
