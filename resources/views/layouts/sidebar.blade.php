 <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img
              src="./images/logocat.jpeg"
              alt=""
              class="my-4"
              style="width: 118px"
            />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{ route('dashboard') }}"
              class="list-group-item list-group-item-action active"
              >Dashboard</a
            >
            <a
              href="{{ route('dashboard.products') }}"
              class="list-group-item list-group-item-action"
              >My Products</a
            >
            <a
              href="{{ route('dashboard.transactions') }}"
              class="list-group-item list-group-item-action"
              >Transactions</a
            >
            <a
              href="{{ route('dashboard.accounts') }}"
              class="list-group-item list-group-item-action"
              >My Account</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->