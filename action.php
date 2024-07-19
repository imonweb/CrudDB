<?php 
require_once('book.php');

class Action 
{
  function __construct()
  {
    switch($_POST['submit']){
      case 'insert':
        $objBook = new Book;
        $objBook->setName($_POST['book_name']);
        $objBook->setType($_POST['btype']);
        $objBook->setPages($_POST['pages']);
        $objBook->setPrice($_POST['price']);
        $objBook->setAuthor($_POST['author']);
        $objBook->setCreatedDate(date('Y-m-d H:i:s'));
        if($objBook->insert()){
          header('index.php?insert=1');
        } else {
          header('index.php?insert=0');

        }
        break;

      default:
        header('index.php');
        break;
    }
  }
}
  if(isset($_POST['submit'])){
    $objAct = new Action;
  } else {
    header('index.php');
  }