<?php
session_start();
include 'dbConfig.php';
$dbCon = new dbConnect();

$tableName = 'contact';
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        //get Toy in formations from the HTML form using POST method and the HTML elements names
        $toyData = array(
            'name' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'mail' => $_POST['mail'],
            'numero' => $_POST['numero'],
            'objet' => $_POST['objet'],
            'msg' => $_POST['msg']
        );
        
        $insert = $dbCon->insert($tableName,$toyData);
        
        $statusMsg = $insert?'Requete enregistre.'.'<br>'.$dbCon->showSqlRequest():'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
       // header("Location:adminDashboard.php");
    }
    //elseif($_REQUEST['action_type'] == 'update'){
    //    if(!empty($_POST['id'])){
    //        $toyData = array(
    //            'name' => $_POST['name'],
    //            'type' => $_POST['type'],
    //            'price' => $_POST['price'],
    //            'minAge' => $_POST['minAge'],
    //            'maxAge' => $_POST['maxAge']
    //        );
    //        $condition = array('id' => $_POST['id']);
    //        $update = $dbCon->update($tableName,$toyData,$condition);
    //        $statusMsg = $update?'Toy has been successfully updated.':'Some problem occurred, please try again.';
    //        $_SESSION['statusMsg'] = $statusMsg;
    //        header("Location:adminDashboard.php");
    //    }
   // }elseif($_REQUEST['action_type'] == 'delete'){
   //     if(!empty($_GET['id'])){
   //         $condition = array('id' => $_GET['id']);
   //         $delete = $dbCon->delete($tableName,$condition);
   //         $statusMsg = $delete?'Toy has been successfully deleted.':'Some problem occurred, please try again.';
   //         $_SESSION['statusMsg'] = $statusMsg;
   //         header("Location:adminDashboard.php");
   //     }
   // }
}
?>