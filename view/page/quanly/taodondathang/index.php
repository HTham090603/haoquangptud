
    <style>
        body {
                 font-family: Arial, sans-serif;
             }
             .navbar {
                 background-color: #A0522D;
             }
             .navbar .nav-link, .navbar .navbar-brand {
                 color: white;
             }
             .navbar .nav-link:hover, .navbar .navbar-brand:hover {
                 color: #FFD700;
             }
             .card {
                 margin: 10px;
             }
             .card img {
                 height: 150px;
                 object-fit: cover;
             }
             .card-title {
                 font-size: 1rem;
             }
             .card-text {
                 font-size: 0.9rem;
             }
             .order-summary {
                 background-color: #F8F9FA;
                 padding: 20px;
                 border-radius: 5px;
             }
             .order-summary .list-group-item {
                 display: flex;
                 justify-content: space-between;
                 align-items: center;
             }
             .order-summary .list-group-item input {
                 width: 50px;
                 text-align: center;
             }
             .order-summary .total {
                 font-weight: bold;
                 font-size: 1.2rem;
             }
             
       </style>
</head>

<body>
        <nav class="">
            <br>
            <form class="d-flex" style="margin-left: 30%; width: 30%;">
                <input aria-label="Search" class="form-control me-2" placeholder="Tìm món" type="search" /> <button type="button" class="btn btn-primary">Tìm</button>

           </form>
           
        </nav>
        <div class="container-fluid mt-3">
         <div class="row">
          <div class="col-md-8">
           <div class="d-flex flex-wrap">
            <div class="card" style="width: 10rem;">
             <img alt="Hamburger image" class="card-img-top" height="150" src="https://storage.googleapis.com/a1aa/image/0Vn2Y0npSCJqJ9k9JVfKEAOCufPNLfOOOGTqPhOwTgmjpTXnA.jpg" width="150"/>
             <div class="card-body text-center">
              <h5 class="card-title">
               0
              </h5>
              <p class="card-text">
               Hamburger
              </p>
             </div>
            </div>
            <div class="card" style="width: 10rem;">
             <img alt="Lettuce image" class="card-img-top" height="150" src="https://storage.googleapis.com/a1aa/image/94FApqHfx9UWX6VzsgpwekwufDaNaeVq0LAnp01pCX18SnuOB.jpg" width="150"/>
             <div class="card-body text-center">
              <h5 class="card-title">
               0
              </h5>
              <p class="card-text">
               b
              </p>
             </div>
            </div>
            <div class="card" style="width: 10rem;">
             <img alt="Person image" class="card-img-top" height="150" src="https://storage.googleapis.com/a1aa/image/JbIwiTIFJIpAGRB4dmhDWAHB99fH0i6z5qFwohDmeALxfXVnA.jpg" width="150"/>
             <div class="card-body text-center">
              <h5 class="card-title">
               0
              </h5>
              <p class="card-text">
               c
              </p>
             </div>
            </div>
            <div class="card" style="width: 10rem;">
             <img alt="Person image" class="card-img-top" height="150" src="https://storage.googleapis.com/a1aa/image/JbIwiTIFJIpAGRB4dmhDWAHB99fH0i6z5qFwohDmeALxfXVnA.jpg" width="150"/>
             <div class="card-body text-center">
              <h5 class="card-title">
               0
              </h5>
              <p class="card-text">
               d
              </p>
             </div>
            </div>
            <div class="card" style="width: 10rem;">
             <img alt="Football player image" class="card-img-top" height="150" src="https://storage.googleapis.com/a1aa/image/l8qwottuOeQMb6qF50dxmRALM5Y5G7rWihNUEiUf5uUufXVnA.jpg" width="150"/>
             <div class="card-body text-center">
              <h5 class="card-title">
               0
              </h5>
              <p class="card-text">
               e
              </p>
             </div>
            </div>
            <div class="card" style="width: 10rem;">
             <img alt="Person image" class="card-img-top" height="150" src="https://storage.googleapis.com/a1aa/image/JbIwiTIFJIpAGRB4dmhDWAHB99fH0i6z5qFwohDmeALxfXVnA.jpg" width="150"/>
             <div class="card-body text-center">
              <h5 class="card-title">
               0
              </h5>
              <p class="card-text">
               f
              </p>
             </div>
            </div>
           </div>
          </div>
          <div class="col-md-4">
           <div class="order-summary">
            <h5>
             Mang về
            </h5>
            <ul class="list-group">
             <li class="list-group-item">
              <span>
               1. Hamburger
              </span>
              <div>
               <button class="btn btn-outline-secondary btn-sm">
                -
               </button>
               <input type="text" value="1"/>
               <button class="btn btn-outline-secondary btn-sm">
                +
               </button>
               <span>
                0
               </span>
              </div>
             </li>
             <li class="list-group-item">
              <span>
               2. b
              </span>
              <div>
               <button class="btn btn-outline-secondary btn-sm">
                -
               </button>
               <input type="text" value="1"/>
               <button class="btn btn-outline-secondary btn-sm">
                +
               </button>
               <span>
                0
               </span>
              </div>
             </li>
             <li class="list-group-item">
              <span>
               3. c
              </span>
              <div>
               <button class="btn btn-outline-secondary btn-sm">
                -
               </button>
               <input type="text" value="1"/>
               <button class="btn btn-outline-secondary btn-sm">
                +
               </button>
               <span>
                0
               </span>
              </div>
             </li>
             <li class="list-group-item">
              <span>
               4. d
              </span>
              <div>
               <button class="btn btn-outline-secondary btn-sm">
                -
               </button>
               <input type="text" value="1"/>
               <button class="btn btn-outline-secondary btn-sm">
                +
               </button>
               <span>
                0
               </span>
              </div>
             </li>
             <li class="list-group-item">
              <span>
               5. e
              </span>
              <div>
               <button class="btn btn-outline-secondary btn-sm">
                -
               </button>
               <input type="text" value="1"/>
               <button class="btn btn-outline-secondary btn-sm">
                +
               </button>
               <span>
                0
               </span>
              </div>
             </li>
             <li class="list-group-item">
              <span>
               6. f
              </span>
              <div>
               <button class="btn btn-outline-secondary btn-sm">
                -
               </button>
               <input type="text" value="1"/>
               <button class="btn btn-outline-secondary btn-sm">
                +
               </button>
               <span>
                0
               </span>
              </div>
             </li>
            </ul>
            <div class="mt-3">
             <div class="d-flex justify-content-between">
              <span>
               Tổng tiền
              </span>
              <span class="total">
               0
              </span>
             </div>
             <button class="btn btn-warning w-100 mt-2">
              Thanh toán
             </button>
            </div>
           </div>
          </div>
         </div>
        </div>
       
        <script crossorigin="anonymous" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOgQpeKBmBIpJR7l+8bn0z1U8p7B7v5Hj6jI1Q1KpG5" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
        </script>
</body>
  
    