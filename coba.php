<?php 
 include "controller.php";

 $display=display("SELECT orders.orders_id,sender.sender_id,item.item_id,courier.courier_id FROM orders,sender,item,courier;");
//   foreach($display as $row) :

//   endforeach;
    $order = $display['orders_id'];
    $sender = $display['sender_id'];
    $item= $display['item_id'];
    $courier= $display['courier_id'];

 

 query("insert into orders (orders_id,sender_id,item_id,courier_id) values
 (null,null,null,null)");
?>