<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AAI International</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrator</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="<?php echo base_url() .'case_reminder_c/index'; ?>" class="nav-link">
            <i class="fas fa-exclamation-triangle"></i>
            <p>Case Reminder</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="" class="nav-link">
            <i class="fas fa-ticket-alt"></i>
            <p>Tickets</p>
          </a>
          <ul class="nav-treeview mleft_min-20">
            <li class="nav-item">
              <ul>
                <li style="list-style-type: none;">
                  <a href="<?php echo base_url(); ?>ticket_c/add_ticket" class="nav-link">
                    <i class="far fa-plus-square"></i>
                    <p>New</p>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li style="list-style-type: none;">
                  <a href="<?php echo base_url(); ?>ticket_c/index" class="nav-link">
                    <i class="fas fa-search"></i>
                    <p>Search</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="<?php echo base_url() .'case_c/index'; ?>" class="nav-link">
            <i class="fas fa-ticket-alt"></i>
            <p>Case</p>
          </a>
        </li>


        <li class="nav-item has-treeview">
          <a href="" class="nav-link">
            <i class="fas fa-bars"></i>
            <p>Enquiries</p>
          </a>
          <ul class="nav-treeview">
            <li class="nav-item">
              <ul class="mleft_min-20">
                <li style="list-style-type: none;">
                  <a href="<?php echo base_url(); ?>client_c/index" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>Client</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav-treeview mleft_min-20">
            <li class="nav-item">
              <ul>
                <li style="list-style-type: none;">
                  <a href="<?php echo base_url(); ?>member_c/index" class="nav-link">
                    <i class="fas fa-users-cog"></i>
                    <p>Member</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav-treeview mleft_min-20">
            <li class="nav-item">
              <ul>
                <li style="list-style-type: none;">
                  <a href="<?php echo base_url(); ?>provider_c/index" class="nav-link">
                    <i class="fas fa-car"></i>
                    <p>Provider</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav-treeview mleft_min-20">
            <li class="nav-item">
              <ul>
                <li class="nav-item has-treeview" style="list-style-type: none;">
                  <a href="" class="nav-link">
                    <i class="fas fa-bars"></i>
                    <p>Combobox</p>
                  </a>
                  <ul class="nav-treeview mleft_min-20">
                    <li class="nav-item">
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>vehicle_brand_c/index" class="nav-link">
                            <i class="fas fa-car"></i>
                            <p>Vehicle Brand</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>ticket_c/index" class="nav-link">
                            <i class="fas fa-car"></i>
                            <p>Vehicle Type</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>call_relation_c/index" class="nav-link">
                            <i class="fas fa-phone-square-alt"></i>
                            <p>Call Relation</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>service_c/index" class="nav-link">
                            <i class="fas fa-wrench"></i>
                            <p>Service</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>problem_c/index" class="nav-link">
                            <i class="far fa-plus-square"></i>
                            <p>Problem</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>dealer_group_c/index" class="nav-link">
                            <i class="fas fa-car"></i>
                            <p>Dealer Group</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
          </ul>
          <ul class="nav-treeview mleft_min-20">
            <li class="nav-item">
              <ul>
                <li style="list-style-type: none;">
                  <a href="" class="nav-link">
                    <i class="fa-map-marker fa"></i>
                    <p>Location</p>
                  </a>
                  <ul class="nav-treeview mleft_min-20">
                    <li class="nav-item">
                      <ul>
                        <li>
                          <a href="<?php echo base_url(); ?>ticket_c/add_ticket" class="nav-link">
                            <i class="far fa-plus-square"></i>
                            <p>City</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="" class="nav-link">
            <i class="fa-bullhorn fa"></i>
            <p>Campaign</p>
          </a>
          <ul class="nav-treeview" style="margin-left: -20px;">
            <li class="nav-item" style="list-style-type: none;">
              <ul>
                <li class="nav-item" style="list-style-type: none;">
                  <a href="<?php echo base_url(); ?>ticket_c/add_ticket" class="nav-link">
                    <i class="fa-car fa"></i>
                    <p>Honda SRS Airbag Recall</p>
                  </a>
                  <ul class="nav-treeview mleft_min-20">
                    <li class="nav-item" style="list-style-type: none;">
                      <ul>
                        <li style="list-style-type: none;">
                          <a href="<?php echo base_url(); ?>ticket_c/add_ticket" class="nav-link">
                            <i class="fa-list fa"></i>
                            <p>Case</p>
                          </a>
                        </li>
                        <li style="list-style-type: none;">
                          <a href="<?php echo base_url(); ?>ticket_c/add_ticket" class="nav-link">
                            <i class="fa-list fa"></i>
                            <p>Daily Production</p>
                          </a>
                        </li>
                        <li style="list-style-type: none;">
                          <a href="<?php echo base_url(); ?>ticket_c/add_ticket" class="nav-link">
                            <i class="fa-list fa"></i>
                            <p>Daily Report</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview" id="m_setting">
          <a href="" class="nav-link">
            <i class="fa-cog fa"></i>
            <p>Setting</p>
          </a>
          <ul class="nav-treeview mleft_min-20">
            <li class="nav-item">
              <ul>
                <li class="nav-item ">
                  <a class="test" id="user" onclick="return false;">
                    <i class="fa-user fa"></i>
                    <p>Users</p>
                  </a>

                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="fas fa-tachometer-alt"></i>
            <p>Audittrail</p>
          </a>
        </li>
      </ul>
      </li>
      </ul>
      </li>
      </ul>
    </nav>
  </div>
</aside>


<!-- <script type="text/javascript">
    $(document).ready(function() {

        $('.test').click(function() {
            event.preventDefault();
            var menu = $(this).attr('id');
            if (menu == "user") {
                $('.badan').load('<?php echo base_url(); ?>ticket_c/add_ticket',false,false);
                $('#m_setting').addClass('menu-open');
            } else if (menu == "tentang") {
                $('.badan').load('tentang.php');
            } else if (menu == "tutorial") {
                $('.badan').load('tutorial.php');
            } else if (menu == "sosmed") {
                $('.badan').load('sosmed.php');
            }
            return false;
        });

    });
</script> -->

<!-- <script>
    var ind = 0;
    var indx = 0;
    $('#enquiries').click(function() {
        ind++;
        if (ind % 2 == 1) {
            $('#combobox').removeClass('d-none');
        }
        if (ind % 2 == 0) {
            $('#combobox').addClass('d-none');
        }
    })
    $('#cbbx').click(function() {      
        $('#li_enquiries').addClass('menu-open');
    })
</script> -->