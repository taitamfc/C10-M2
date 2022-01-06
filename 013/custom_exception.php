<?php
class CustomException extends Exception{
    public function getMyMessage(){
        echo "Loi: ".$this->getMessage();
        echo "<br>";
        echo "Code: ".$this->getCode();
        echo "<br>";
        echo "File: ".$this->getFile();
        echo "<br>";
        echo "Line: ".$this->getLine();
    }

}

class CustomAbcException extends CustomException {

}

try {
    throw new CustomException("Loi thuc hien chuong trinh");
} catch (CustomException $e) {
    echo("Caught CustomException class exception");
} catch (CustomAbcException $e) {
    echo("Caught CustomAbcException class exception");
}