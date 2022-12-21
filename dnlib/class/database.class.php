<?php

class Database{
    private $connection;
    function __construct(){
        try {
            $this->connection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }
private function getBindParmsDataType($data){
    $dt='';
    foreach($data as $value){
        if(is_float($value)) $dt.='d';
        elseif(is_integer($value))$dt.='i';
        elseif(is_string($value))$dt.='s';
        else $dt.='b';
        
    }
    return $dt;
}

private function getLabels($values){
    $label="";

    foreach($values as $value){
        $label.='?,';
    } 
    $label =substr_replace($label,'',-1);
    return $label;
}
private function getLabelsWithName($columns){
    $label="";
    $columns=explode(',',$columns);
    foreach($columns as $column){
        $label.=$column.='?,';
    } 
    $label =substr_replace($label,'',-1);
    return $label;
}
public function insert($table,$columns,$values){

            $label=$this->getLabels($values);

            $query="INSERT INTO $table($columns) VALUES($label)";
            $obj = $this->connection->prepare($query) ;
            $obj->bind_param($this->getBindParmsDataType($values),...$values);
            return $obj->execute();

}
public function update($table,$columns,$values,$condition){
            $label=$this->getLabelsWithName($columns);
            $query="UPDATE $table SET $label WHERE $condition";
            $obj = $this->connection->prepare($query) ;
            $obj->bind_param($this->getBindParmsDataType($values),...$values);
            return $obj->execute();
}


public function read($table,$columns="*",$conditions=''){
    $query="SELECT $columns FROM $table $conditions";
    $result=$this->connection->query($query);
    return $result->fetch_all(true);

}
public function delete($table,$condition){
    $query="delete from $table where $condition";
    return $this->connection->query($query);
}
}

