<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        UD Iswara
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/addproduct') }}">
            <i class="material-icons">library_add</i>
            <p>Add Product</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/productcategories') }}">
            <i class="material-icons">content_paste</i>
            <p>Product Categories</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/task') }}">
            <i class="material-icons">library_books</i>
            <p>Task</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/purchaselog') }}">
            <i class="material-icons">account_balance_wallet</i>
            <p>Purchase Log</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/loanlog') }}">
            <i class="material-icons">auto_stories</i>
            <p>Loan Log</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/returnlog') }}">
            <i class="material-icons">description</i>
            <p>Return Log</p>
          </a>
        </li>
        <!-- <li class="nav-item active-pro ">
              <a class="nav-link" href="./upgrade.html">
                  <i class="material-icons">unarchive</i>
                  <p>Upgrade to PRO</p>
              </a>
          </li> -->
      </ul>
    </div>
  </div>