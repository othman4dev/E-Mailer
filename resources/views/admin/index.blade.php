<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <header class="p-3" style="box-shadow: 0px 0px 40px rgba(211, 211, 211, 0.438);">
        <div class="p-2">
            <div class="d-flex align-items-center justify-content-between ">
                <div class="d-flex align-items-center ">
                    <div class="logo cursor-pointer ">
                        <img src="assets/img/logo.png" width="120px" alt="">
                    </div>
                    <div class="togl_menu cursor-pointer" id="togl_menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </div>
                </div>
                <div class="profile d-flex gap-4 align-items-center">
                    <div class="search">
                        <input type="search" name="Search" placeholder="Searche..." class="form-control" id="search">
                    </div>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/user.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="d-flex gap">
        <aside id="asideBar" class="p-2">
            <div class="nav flex-column" >
                <a href="index.html"  class="nav-link rounded-1 fw-bold mt-2 p-3 active" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    <span class="ml-2">Dashboard</span>
                </a>
                <a href="category.html"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                        <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
                    </svg>
                    <span class="ml-2">Items List</span>
                </a>
            </div>
        </aside>
        <section class=" ml-2 ">
            <div class="headerSection">
                <h2>Dashboard</h2>
                <span><span>Home</span> / Dashboard</span>
            </div>
            <div class="mt-3 cards d-flex justify-content-between w-full">
                <div class="">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">Sales <span>| Today</span></h5>
      
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="card_footr ml-2">
                                <h6>145</h6>
                                <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
        
                            </div>
                        </div>
                    </div>
      
                    </div>
                </div>
                <div class="">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">Sales <span>| Today</span></h5>
      
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="card_footr ml-2">
                                <h6>145</h6>
                                <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
        
                            </div>
                        </div>
                    </div>
      
                    </div>
                </div>
                <div class="">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">Sales <span>| Today</span></h5>
      
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="card_footr ml-2">
                                <h6>145</h6>
                                <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
        
                            </div>
                        </div>
                    </div>
      
                    </div>
                </div>

            </div>
            <div class="card-body mt-5">
                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns"><div class="datatable-top">
                 
                    <div class="datatable-search mt-4 w-25 mb-3">
                        <input class="form-control" placeholder="Search..." type="search" title="Search within table">
                    </div>
                </div>
                <div class="datatable-container">
                    <table class="table table-borderless datatable datatable-table">
                        <thead>
                            <tr>
                                <th data-sortable="true" style="width: 10.648148148148149%;">
                                    #
                                </th>
                                <th data-sortable="true" style="width: 23.456790123456788%;">
                                    Customer
                                </th>
                                <th data-sortable="true" style="width: 39.351851851851855%;">
                                    Product
                                </th>
                                <th data-sortable="true" style="width: 11.728395061728394%;">
                                    Price
                                </th>
                                <th data-sortable="true" class="red" style="width: 14.814814814814813%;">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody><tr data-index="0"><td><a href="#">#2457</a></td><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="1"><td><a href="#">#2147</a></td><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td class="green"><span class="badge bg-warning">Pending</span></td></tr><tr data-index="2"><td><a href="#">#2049</a></td><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$147</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="3"><td><a href="#">#2644</a></td><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td class="green"><span class="badge bg-danger">Rejected</span></td></tr><tr data-index="4"><td><a href="#">#2644</a></td><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td class="green"><span class="badge bg-success">Approved</span></td></tr></tbody></table></div>
                    <div class="datatable-bottom">
                        <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                        <nav class="datatable-pagination"><ul class="datatable-pagination-list"></ul></nav>
                    </div>
                </div>
            
            </div>
        </section>
    </main>
   <script src="assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>