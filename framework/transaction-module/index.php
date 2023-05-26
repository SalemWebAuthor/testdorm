<!--Index File for Transaction Type Page-->
<div id="page-title">
    <h1><i class="fa-solid fa-cash-register"></i>Transaction Types</h1>
</div> 
<div id="wrapper">
    <div id="submenu">
        <!--Submenu/Navigation bar for Transaction Type Page-->
        <a href="index.php?page=transactions&subpage=records"><i class="fa-solid fa-list"></i>&nbspList of Transaction Types</a>&nbsp&nbsp
        <a href="index.php?page=transactions&subpage=create"><i class="fa-sharp fa-solid fa-plus"></i>&nbspCreate Transaction Type</a>
        
    </div>
    <div id="subcontent">
        <?php
            /*Switch case for the subpage of the Transaction Type Page */
            switch($subpage){
                case 'create':
                    require_once 'create-transaction.php';
                break;
                case 'records':
                    require_once 'read-transaction.php';
                break; 
                case 'profile':
                    require_once 'profile-transaction.php';
                break; 
                case 'remove':
                    require_once 'remove-transaction.php';
                break; 
                default:
                    require_once 'read-transaction.php';
                break;
            }
        ?>
    </div>
</div>