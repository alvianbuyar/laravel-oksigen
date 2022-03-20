<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a class="simple-text logo-normal">
        CV Iswara
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
            <p>Tambah Produk</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/productcategories') }}">
            <i class="material-icons">content_paste</i>
            <p>Kategori</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/task') }}">
            <i class="material-icons">library_books</i>
            <p>Task</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/cart') }}">
            <i class="material-icons">shopping_cart</i>
            <p>Keranjang</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/purchaselog') }}">
            <i class="material-icons">account_balance_wallet</i>
            <p>Pemesan</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/admin/detail') }}">
            <i class="material-icons">auto_stories</i>
            <p>Detail</p>
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