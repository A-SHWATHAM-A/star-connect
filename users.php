<?php include('header.php');
	include('auth_validate.php');
	?>
		<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                        

                                <span class="text-white breadcrumbs">
                                    <a href="/" style="color:white;text-decoration:none">
                                        <i class="fa fa-home font-18"></i>
                                    </a>
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">My Users</span>
                                </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
	<div class="ds-head-body">

<style>
    .carousel-inner {
        display: none;
    }

    .sl-login {
        display: none !important;
    }

    .inpage {
        background: #fff;
        border: none;
        margin-top: 0 !important;
    }

        .inpage .h2, .inpage .page-heading {
            font-weight: bold !important;
            font-size: 24px;
        }

    .walletbalance-section {
        border: 1px solid #F1717E;
        border-radius: 10px;
    }

    .ata-balance-total {
        padding-left: 20px;
        font-size: 16px;
    }

        .ata-balance-total li {
            width: 180px;
        }

    #pills-tab {
        border-bottom: 1px solid #ffd4d8;
        justify-content: center;
    }

        #pills-tab button.nav-link {
            background: none;
            border: none;
            width: 205px;
        }

            #pills-tab button.nav-link.active {
                color: #EE4E5E;
            }

            #pills-tab button.nav-link:focus {
                outline: none;
            }

            #pills-tab button.nav-link.active::after {
                content: "";
                background: #EE4E5E;
                width: 100%;
                height: 7px;
                position: absolute;
                border-radius: 10px;
                bottom: -4px;
                left: 0;
            }

    .anytime-astro-data-table .data-row-head {
        background: #fff;
        color: #000;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom: 1px solid #ffd4d8;
    }
    .drp-buttons .btn-primary {
        background-color: #ee4e5e;
        border-color: #ee4e5e;
    }


        .drp-buttons .btn-primary:not(:disabled):not(.disabled).active, .drp-buttons .btn-primary:not(:disabled):not(.disabled):active, .show > .drp-buttons .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #cf404f;
            border-color: #cf404f;
        }
    .daterangepicker td.in-range {
        background-color: rgb(239 181 181 / 20%) !important;
    }
    .daterangepicker td.active, .daterangepicker td.active:hover {
        background-color: #cf404f !important;
    }
    .drp-buttons .btn-primary.focus, .drp-buttons .btn-primary:focus {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
        box-shadow: 0 0 0 .2rem rgb(239 181 181 / 50%);
    }
    .anytime-astro-data-table .data-column-body.last span:first-child {
        width: auto !important;
    }
    .anytime-astro-data-table .data-column-body.last, .anytime-astro-data-table .data-column-head.last{
        width:150px !important
    }
    .filterbtn svg{
        margin-right:5px;
    }
    @media(max-width:767px){
        .anytime-astro-data-table .data-row-body, .anytime-astro-data-table .data-row-head {
            align-items: unset;
        }
    }

    @media(max-width:576px) {
        .walletbalance-section{
            padding:10px !important;
        }
        .inpage {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }
        .subheading {
            font-size: 12px;
        }
        .ata-balance-total {
            padding-left: 15px;
            font-size: 12px;
        }
        .walletbalance-section .font-20{
            font-size:12px !important;
        }
        .ata-balance-total li{
            width:130px;
        }
        #pills-tab{
            flex-wrap:nowrap;
        }
        #pills-tab button.nav-link{
            width:150px;
        }
        .anytime-astro-data-table .font-14{
            font-size:12px !important;
        }
        .anytime-astro-data-table .data-column-body.last {
            text-align: center;
            font-size: 14px;
        }
        
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="inpage">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-left pb-md-2 pb-2">
                        <h1 class="h2 font-weight-bold colorblack">Your Users</h1>
                        <p class="subheading">Check your recent users who messaged You.</p>
                    </div>
                    </div>


                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-wallet" role="tabpanel" aria-labelledby="pills-wallet-tab">
                        <div id="Transactions" class="tab-content mt-3">
							<table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Astrologer</th>
                <th>Amount</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
		<?php 
	$result = mysqli_query($conn, "select txn.*,pf.name from transactions txn left join profile pf ON txn.profile_id=pf.profile_id where txn.deleted='0' and txn.status='Success' and txn.cus_id='$customer_id' order by txn.created_at desc");
	while ($row = mysqli_fetch_array($result)) {
	 ?> 
            <tr>
                <td><?php echo $row['name'] != ""?$row['name']:
				'Self';?></td>
                <td><?php echo $row['amount'];?></td>
                <td><?php echo format_my_mysql_time($row['created_at']);?></td>
                <td><?php echo $row['status'];?></td>
            </tr>
	<?php } ?>
			</tbody>
			</table>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <input type="hidden" value="0" id="flag">
    </div>
</div>

        </div>
    <?php include('footer.php');?>
	<script>
	new DataTable('#example', {
    responsive: true
});
	</script>