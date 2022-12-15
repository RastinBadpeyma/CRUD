<?php

class signupConfig
{

    public $id;
    public $firstName;
    public $lastName;
    public $address;
    protected  $pdo;


    public function __construct($id = 0, $firstName = "", $lastName = "", $address = "")
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;


        $this->pdo = new PDO("mysql:host=localhost;dbname=registration" , 'root' , '');
        $this->pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setfirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getfirstName()
    {
        return $this->firstName;
    }

    public function setlastname($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }


    public function insertData()
    {
        try {


            $statm = $this->pdo->prepare("insert into users (firstName,lastName,address) values(?,?,?)");
            $statm->execute([$this->firstName,$this->lastName,$this->address]);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function fetchAll()
    {
        try {
            $stm = $this->pdo->prepare("select * from users");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function fetchOne()
    {
        try {
            $stm = $this->pdo->prepare("select * from users where id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function update()
    {
        try {
            $stm = $this->pdo->prepare("update users set firstName = ? , lastName = ? , address = ? where id =? ");
            $stm->execute([$this->firstName, $this->lastName, $this->address, $this->id]);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function delete()
    {
        try {
            $stm = $this->pdo->prepare("delete from users where id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}